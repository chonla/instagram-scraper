<?php

declare(strict_types=1);

namespace Chonla\InstagramScraper;

class Scraper
{
    private $baseUrl;

    function __construct()
    {
        $this->baseUrl = 'https://www.instagram.com';
    }

    public function scrape(string $uri)
    {
        $url = sprintf("%s%s", $this->baseUrl, $uri);

        $c = curl_init($url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($c, CURLOPT_SSL_VERIFYHOST, false);
        $content = curl_exec($c);
        curl_close($c);

        return $content;
    }
}
