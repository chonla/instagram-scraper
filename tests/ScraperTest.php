<?php

use PHPUnit\Framework\TestCase;
use InstagramScraper\Scraper;

class ScraperTest extends TestCase {
    public function testCreateScraper() {
        $scraper = new Scraper();
        $this->assertNotNull($scraper);
    }
}