<?php

use YouTubeiest\YouTubeiest;
use YouTubeiest\Video;
use YouTubeiest\VideoInput\Id as VideoInputId;

class VideoValidTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var Video
     */
    protected $_video;

    public function setUp()
    {

        $videoInputId = new VideoInputId('dQw4w9WgXcQ');

        $this->_video = new Video($videoInputId);

    }

    public function tearDown()
    {
        unset($this->_video);
    }

    public function testInvalidVideoInput()
    {

        $invalidVideoInput = new VideoInputId('invalid input!');

        $this->setExpectedException('YouTubeiest\Exception');

        $video = new Video($invalidVideoInput);
        unset($video);

    }

    public function testVideoId()
    {

        $this->assertEquals(
            'dQw4w9WgXcQ',
            $this->_video->getId()
        );

    }

    public function testUrl()
    {

        $this->assertEquals(
            'http://www.youtube.com/watch?v=dQw4w9WgXcQ',
            $this->_video->getUrl()
        );

    }

    public function testEmbedCode()
    {

        $this->assertEquals(
            '<iframe width="420" height="315" src="//www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allowfullscreen></iframe>',
            $this->_video->getEmbedCode()
        );

    }

    public function testEmbedCodeStandard()
    {

        $this->assertEquals(
            '<iframe width="420" height="315" src="//www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allowfullscreen></iframe>',
            $this->_video->getEmbedCode(YouTubeiest::EMBED_CODE_STYLE_STANDARD)
        );

    }

    public function testEmbedCodeOld()
    {

        $this->assertEquals(
            '<object width="420" height="315"><param name="movie" value="//www.youtube.com/v/dQw4w9WgXcQ?version=3&amp;hl=en_GB"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="//www.youtube.com/v/dQw4w9WgXcQ?version=3&amp;hl=en_GB" type="application/x-shockwave-flash" width="420" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object>',
            $this->_video->getEmbedCode(YouTubeiest::EMBED_CODE_STYLE_OLD)
        );

    }

    public function testEmbedCodeInvalid()
    {

        $this->setExpectedException('YouTubeiest\Exception');

        $this->_video->getEmbedCode('invalid style');

    }

}
