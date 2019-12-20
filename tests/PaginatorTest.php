<?php

use PHPUnit\Framework\TestCase;
use InstagramScraper\Paginator;

class PaginatorTest extends TestCase {
    private $paginator;

    protected function setUp(): void {
        $this->paginator = new Paginator();
    }

    public function testCreatePaginator() {
        $this->assertNotNull($this->paginator);
    }

    public function testDefaultPageSize() {
        $this->assertEquals($this->paginator->page_size(), 10);
    }

    public function testGetPageItemIfNumberOfItemIsGreaterThanPageSize() {
        $items = [1,2,3,4,5,6,7,8,9,10,11,12];
        $expected = [1,2,3,4,5,6,7,8,9,10];

        $result = $this->paginator->page(1, $items);

        $this->assertEquals($expected, $result);
    }

    public function testGetPageItemIfNumberOfItemIsEqualToPageSize() {
        $items = [1,2,3,4,5,6,7,8,9,10];
        $expected = [1,2,3,4,5,6,7,8,9,10];

        $result = $this->paginator->page(1, $items);

        $this->assertEquals($expected, $result);
    }

    public function testGetPageItemIfNumberOfItemIsLessThanPageSize() {
        $items = [1,2,3,4,5,6];
        $expected = [1,2,3,4,5,6];

        $result = $this->paginator->page(1, $items);

        $this->assertEquals($expected, $result);
    }

    public function testGetSecondPageItemsWhenItemIsGreaterThan1Page() {
        $items = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
        $expected = [11,12,13,14,15];

        $result = $this->paginator->page(2, $items);

        $this->assertEquals($expected, $result);
    }

    public function testGetThirdPageItemsWhenItemIsGreaterThan2Page() {
        $items = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22];
        $expected = [21,22];

        $result = $this->paginator->page(3, $items);

        $this->assertEquals($expected, $result);
    }

    public function testGetThirdPageItemsWhenItemIsLessThan3Page() {
        $items = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
        $expected = [];

        $result = $this->paginator->page(3, $items);

        $this->assertEquals($expected, $result);
    }

    public function testGetNegativePageNumberShouldReturnEmpty() {
        $items = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
        $expected = [];

        $result = $this->paginator->page(-1, $items);

        $this->assertEquals($expected, $result);
    }

    public function testGetZeroPageNumberShouldReturnEmpty() {
        $items = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
        $expected = [];

        $result = $this->paginator->page(0, $items);

        $this->assertEquals($expected, $result);
    }

    public function testGetPageWithNonDefaultPageSize() {
        $paginator = new Paginator(7);

        $items = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
        $expected = [15,16,17,18,19,20];

        $result = $paginator->page(3, $items);

        $this->assertEquals($expected, $result);
    }

    public function testPageSizeOfZero() {
        $paginator = new Paginator(0);

        $items = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
        $expected = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

        $result = $paginator->page(3, $items);

        $this->assertEquals($expected, $result);
    }
}