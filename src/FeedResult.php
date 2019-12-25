<?php

declare(strict_types=1);

namespace Chonla\InstagramScraper;

class FeedResult
{
    const IMAGES = 1;
    const VIDEOS = 2;

    private $data;
    private $paginator;

    function __construct($data, Paginator $paginator = NULL)
    {
        $this->data = $data;
        if ($paginator === NULL) {
            $paginator = new Paginator();
        }
        $this->paginator = $paginator;
    }

    public function toArray()
    {
        return $this->data;
    }

    public function count()
    {
        return count($this->data);
    }

    public function videos(): FeedResult
    {
        return $this->filter(FeedResult::VIDEOS);
    }

    public function images(): FeedResult
    {
        return $this->filter(FeedResult::IMAGES);
    }

    public function set_page_size($size) {
        $this->paginator->set_page_size($size);
    }

    public function page_size() {
        return $this->paginator->page_size();
    }

    private function videos_only($object)
    {
        return $object['is_video'];
    }

    private function images_only($object)
    {
        return !$object['is_video'];
    }

    private function filter($type): FeedResult
    {
        $result = [];
        if ($type === FeedResult::VIDEOS) {
            $result = array_filter($this->data, [$this, 'videos_only']);
        } elseif ($type === FeedResult::IMAGES) {
            $result = array_filter($this->data, [$this, 'images_only']);
        }
        $result = [...$result];

        return new FeedResult($result);
    }

    public function page($num) {
        return $this->paginator->page($num, $this->data);
    }
}
