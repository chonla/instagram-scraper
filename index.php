<?php

require 'vendor/autoload.php';

use \InstagramScraper\TagScraper;

$scraper = new TagScraper('snail');
$tags = $scraper->scrape('snail', TagScraper::IMAGES);
print_r($tags);