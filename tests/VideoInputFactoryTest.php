<?php

use YouTubeiest\VideoInput\Factory\Standard as VideoInputFactory;

class VideoInputFactoryTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var VideoInputFactory
     */
    protected $_factory;

    public function setUp()
    {
        $this->_factory = new VideoInputFactory();
    }

    public function tearDown()
    {
        unset($this->_factory);
    }

    public function testFactoryCreatesVideoInputId()
    {

        $videoInput = $this->_factory->getByValue('dQw4w9WgXcQ');

        $this->assertInstanceOf('YouTubeiest\VideoInput\Id', $videoInput);

    }

    public function testFactoryCreatesVideoInputUrl()
    {

        $videoInput = $this->_factory->getByValue('http://www.youtube.com/watch?v=dQw4w9WgXcQ');

        $this->assertInstanceOf('YouTubeiest\VideoInput\Url', $videoInput);

    }

    public function testFactoryCreatesNull()
    {

        $videoInput = $this->_factory->getByValue('this is invalid!');

        $this->assertNull($videoInput);

    }

}
