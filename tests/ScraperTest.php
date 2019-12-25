<?php

use PHPUnit\Framework\TestCase;
use Chonla\InstagramScraper\Scraper;

class ScraperTest extends TestCase
{
    public function testCreateScraper()
    {
        $scraper = new Scraper();
        $this->assertNotNull($scraper);
    }
}
