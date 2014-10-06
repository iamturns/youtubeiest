<?php

use YouTubeiest\VideoInput\Url as VideoInputUrl;

class VideoInputUrlTest extends PHPUnit_Framework_TestCase
{

    public function testValid()
    {

        $videoInputUrl = new VideoInputUrl('http://www.youtube.com/watch?v=dQw4w9WgXcQ');

        $this->assertTrue($videoInputUrl->isValid());

    }

    public function testValidYouTubeId()
    {

        $videoInputUrl = new VideoInputUrl('http://www.youtube.com/watch?v=dQw4w9WgXcQ');

        $this->assertEquals('dQw4w9WgXcQ', $videoInputUrl->getYouTubeId());

    }

    public function testInvalid()
    {

        $videoInputUrl = new VideoInputUrl('invalid url');

        $this->assertFalse($videoInputUrl->isValid());

    }

    public function testInvalidYouTubeId()
    {

        $videoInputUrl = new VideoInputUrl('invalid url');

        $this->setExpectedException('YouTubeiest\Exception');

        $videoInputUrl->getYouTubeId();

    }

}
