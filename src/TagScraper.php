<?php

declare(strict_types=1);

namespace InstagramScraper;

class TagScraper extends Scraper {
    const IMAGES = 1;
    const VIDEOS = 2;
    const ALL = TagScraper::IMAGES | TagScraper::VIDEOS;

    private $tags;

    function __construct() {
        parent::__construct();
    }

    public function scrape(string $tag, int $flag = TagScraper::IMAGES) {
        $uri = sprintf('/explore/tags/%s/', $tag);
        $content = parent::scrape($uri);
        $tags = $this->parse($content);

        if ($flag === TagScraper::VIDEOS) {
            $tags = array_filter($tags, [$this, 'videos_only']);
        } elseif ($flag === TagScraper::IMAGES) {
            $tags = array_filter($tags, [$this, 'images_only']);
        }

        return $tags;
    }

    private function videos_only($object) {
        return $object['is_video'];
    }

    private function images_only($object) {
        return !$object['is_video'];
    }

    public function parse(string $content) {
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
            $tags = array_map(function($o) {
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
            }, $data['entry_data']['TagPage'][0]['graphql']['hashtag']['edge_hashtag_to_media']['edges']);
        }
        return $tags;
    }
}