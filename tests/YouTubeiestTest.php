<?php

use YouTubeiest\YouTubeiest;

class YouTubeiestTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var YouTubeiest
     */
    protected $_youTubeiest;

    public function setUp()
    {
        $this->_youTubeiest = new YouTubeiest();
    }

    public function tearDown()
    {
        unset($this->_youTubeiest);
    }

    public function testYouTubeiestById()
    {

        $video = $this->_youTubeiest->createVideo('dQw4w9WgXcQ');

        $this->assertEquals('dQw4w9WgXcQ', $video->getId());

    }

    public function testYouTubeiestByUrl()
    {

        $video = $this->_youTubeiest->createVideo('http://www.youtube.com/watch?v=dQw4w9WgXcQ');

        $this->assertEquals('dQw4w9WgXcQ', $video->getId());

    }

    public function testYouTubeiestNull()
    {

        $this->setExpectedException('YouTubeiest\Exception');

        $this->_youTubeiest->createVideo('invalid input!');

    }

}
