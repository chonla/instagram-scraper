<?php

require 'vendor/autoload.php';

use \InstagramScraper\TagScraper;
use \InstagramScraper\Paginator;

$paginator = new Paginator(2);
$scraper = new TagScraper(NULL, $paginator);
$tags = $scraper->scrape('snail', TagScraper::IMAGES);
print_r($tags);
echo count($tags);