<?php

require 'vendor/autoload.php';

use \InstagramScraper\TagScraper;

$scraper = new TagScraper();
$tags = $scraper->scrape('snail', TagScraper::IMAGES);
print_r($tags);