<?php

require 'vendor/autoload.php';

use Chonla\InstagramScraper\TagScraper;

$scraper = new TagScraper();
$tags = $scraper->scrape('snail');
print_r($tags->videos());
echo $tags->videos()->count();