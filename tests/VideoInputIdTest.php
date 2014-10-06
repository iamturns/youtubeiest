<?php

use YouTubeiest\VideoInput\Id as VideoInputId;

class VideoInputIdTest extends PHPUnit_Framework_TestCase
{

    public function testValid()
    {

        $videoInputId = new VideoInputId('dQw4w9WgXcQ');

        $this->assertTrue($videoInputId->isValid());

    }

    public function testValidYouTubeId()
    {

        $videoInputId = new VideoInputId('dQw4w9WgXcQ');

        $this->assertEquals('dQw4w9WgXcQ', $videoInputId->getYouTubeId());

    }

    public function testInvalid()
    {

        $videoInputId = new VideoInputId('INVALID ID!');

        $this->assertFalse($videoInputId->isValid());

    }

    public function testInvalidYouTubeId()
    {

        $videoInputId = new VideoInputId('INVALID ID!');

        $this->setExpectedException('YouTubeiest\Exception');

        $videoInputId->getYouTubeId();

    }

}
