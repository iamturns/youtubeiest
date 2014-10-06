<?php

use YouTubeiest\Video;
use YouTubeiest\VideoInput\Id as VideoInputId;

class VideoInvalidTest extends PHPUnit_Framework_TestCase
{

    public function testInvalidVideoInput()
    {

        $invalidVideoInput = new VideoInputId('invalid input!');

        $this->setExpectedException('YouTubeiest\Exception');

        $video = new Video($invalidVideoInput);
        unset($video);

    }

}
