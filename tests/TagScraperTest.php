<?php

use PHPUnit\Framework\TestCase;
use InstagramScraper\TagScraper;

class TagScraperTest extends TestCase {
    public function testCreateTagScraper() {
        $scraper = new TagScraper();
        $this->assertNotNull($scraper);
    }
}