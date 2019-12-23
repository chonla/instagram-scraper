<?php

use PHPUnit\Framework\TestCase;

use InstagramScraper\FeedResult;

class FeedResultTest extends TestCase
{
    public function testCreateFeedResult()
    {
        $fresult = new FeedResult([]);
        $this->assertNotNull($fresult);
    }

    public function testGetFeedResult()
    {
        $fresult = new FeedResult([]);
        $result = $fresult->toArray();
        $this->assertEquals([], $result);
    }

    public function testGetImageResult()
    {
        $fresult = new FeedResult([
            [
                'id' => 1,
                'is_video' => true
            ],
            [
                'id' => 2,
                'is_video' => true
            ],
            [
                'id' => 3,
                'is_video' => false
            ],
            [
                'id' => 4,
                'is_video' => true
            ]
        ]);
        $expected = [
            [
                'id' => 3,
                'is_video' => false
            ]
        ];

        $result = $fresult->images()->toArray();

        $this->assertEquals($expected, $result);
    }

    public function testGetVideoResult()
    {
        $fresult = new FeedResult([
            [
                'id' => 1,
                'is_video' => true
            ],
            [
                'id' => 2,
                'is_video' => true
            ],
            [
                'id' => 3,
                'is_video' => false
            ],
            [
                'id' => 4,
                'is_video' => true
            ]
        ]);
        $expected = [
            [
                'id' => 1,
                'is_video' => true
            ],
            [
                'id' => 2,
                'is_video' => true
            ],
            [
                'id' => 4,
                'is_video' => true
            ]
        ];

        $result = $fresult->videos()->toArray();

        $this->assertEquals($expected, $result);
    }
}
