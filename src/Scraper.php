<?php

declare(strict_types=1);

namespace InstagramScraper;

class Scraper {
    private $baseUrl;

    function __construct(string $base) {
        $this->baseUrl = $base;
    }

    protected function scrapeFile(string $file) {
        return file_get_contents($file);
    }

    protected function scrape(string $uri) {
        $url = sprintf("%s%s", $this->baseUrl, $uri);

        $c = curl_init($url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt ($c, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt ($c, CURLOPT_SSL_VERIFYHOST, false);
        $content = curl_exec($c);
        curl_close($c);

        return $content;
    }
}