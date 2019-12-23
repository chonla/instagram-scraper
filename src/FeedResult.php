<?php

declare(strict_types=1);

namespace InstagramScraper;

class FeedResult {
    const IMAGES = 1;
    const VIDEOS = 2;

    private $data;

    function __construct($data) {
        $this->data = $data;
    }

    public function toArray() {
        return $this->data;
    }

    public function count() {
        return count($this->data);
    }

    public function videos(): FeedResult {
        return $this->filter(FeedResult::VIDEOS);
    }

    public function images(): FeedResult {
        return $this->filter(FeedResult::IMAGES);
    }

    private function videos_only($object) {
        return $object['is_video'];
    }

    private function images_only($object) {
        return !$object['is_video'];
    }

    private function filter($type): FeedResult {
        $result = [];
        if ($type === FeedResult::VIDEOS) {
            $result = array_filter($this->data, [$this, 'videos_only']);
        } elseif ($type === FeedResult::IMAGES) {
            $result = array_filter($this->data, [$this, 'images_only']);
        }
        $result = [...$result];

        return new FeedResult($result);
    }
}