<?php

declare(strict_types=1);

namespace Chonla\InstagramScraper;

use Chonla\InstagramScraper\Scraper;

class TagScraper
{
    private $scraper;
    private $tags;

    function __construct(Scraper $scraper = NULL)
    {
        if ($scraper === NULL) {
            $scraper = new Scraper;
        }
        $this->scraper = $scraper;
    }

    public function scrape(string $tag): FeedResult
    {
        $uri = sprintf('/explore/tags/%s/', $tag);
        $content = $this->scraper->scrape($uri);
        $tags = $this->parse($content);

        return new FeedResult($tags);
    }

    public function parse(string $content)
    {
        $tags = [];
        if (preg_match('/window\._sharedData\s*=\s*([^;]+)/', $content, $matches)) {
            // Find proper semicolon
            $sharedData = $matches[1];
            $pos = mb_strpos($content, $sharedData);
            while ($data = json_decode($sharedData, true) === NULL) {
                $semiPos = mb_strpos($content, ';', $pos + mb_strlen($sharedData) + 1);
                if ($semiPos === FALSE) {
                    $sharedData = mb_substr($content, $pos);
                } else {
                    $sharedData = mb_substr($content, $pos, $semiPos - $pos);
                }
            }
            $data = json_decode($sharedData, true);
            $el = $data['entry_data']['TagPage'][0]['graphql']['hashtag']['edge_hashtag_to_media']['edges'];

            $tags = array_map(function ($o) {
                return [
                    'display_url' => $o['node']['display_url'],
                    'thumbnails' => $o['node']['thumbnail_resources'],
                    'likes_count' => $o['node']['edge_liked_by']['count'],
                    'comments_count' => $o['node']['edge_media_to_comment']['count'],
                    'short_code' => $o['node']['shortcode'],
                    'dimensions' => $o['node']['dimensions'],
                    'caption' => $o['node']['edge_media_to_caption']['edges'][0]['node']['text'],
                    'is_video' => $o['node']['is_video'],
                ];
            }, $el);
        }
        return $tags;
    }
}
