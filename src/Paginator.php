<?php

declare(strict_types=1);

namespace InstagramScraper;

class Paginator {
    const DEFAULT_PAGE_SIZE = 10;

    private $pageSize;

    function __construct($pageSize = Paginator::DEFAULT_PAGE_SIZE) {
        $this->pageSize = $pageSize;
    }

    public function page_size() {
        return $this->pageSize;
    }

    public function page($page, $items) {
        if ($page <= 0) {
            return [];
        }
        if ($this->pageSize === 0) {
            return $items;
        }
        return array_slice($items, ($page - 1) * $this->pageSize, $page * $this->pageSize);
    }
}