<?php

/**
 * YouTubeiest v1.0.0 - Of all the PHP YouTube libraries, this is the YouTubeiest
 * https://github.com/turnbullm/youtubeiest
 */

namespace YouTubeiest;

use YouTubeiest\VideoInput\Factory\FactoryInterface as VideoInputFactoryInterface;
use YouTubeiest\VideoInput\Factory\Standard as VideoInputFactoryStandard;
use YouTubeiest\VideoInput\VideoInputInterface;
use YouTubeiest\Video;

/**
 * Main entry point
 */
class YouTubeiest
{

    const EMBED_CODE_STYLE_STANDARD = 'embed-code-style-standard';
    const EMBED_CODE_STYLE_OLD = 'embed-code-style-old';

    /**
     * @var VideoInputFactoryInterface
     */
    protected $_videoInputFactory;

    /**
     * @param VideoInputFactoryInterface|null $videoInputFactory
     */
    public function __construct($videoInputFactory = null)
    {
        if ($videoInputFactory !== null) {
            $this->setVideoInputFactory($videoInputFactory);
        }
    }

    /**
     * @param VideoInputFactoryInterface $videoInputFactory
     * @return YouTubeiest
     */
    public function setVideoInputFactory($videoInputFactory)
    {
        $this->_videoInputFactory = $videoInputFactory;
        return $this;
    }

    /**
     * @return VideoInputFactoryInterface
     */
    public function getVideoInputFactory()
    {
        if ($this->_videoInputFactory === null) {
            $this->_videoInputFactory = $this->_getDefaultVideoInputFactory();
        }
        return $this->_videoInputFactory;
    }

    /**
     * @return VideoInputFactoryInterface
     */
    protected function _getDefaultVideoInputFactory()
    {
        return new VideoInputFactoryStandard();
    }

    /**
     * @param string|VideoInputInterface $input YouTube ID or URL
     * @throws Exception
     * @return Video
     */
    public function createVideo($input)
    {

        $videoInput = $this->_rawInputToVideoInput($input);

        if ($videoInput === null) {
            throw new Exception('Invalid input "' . $input . '"');
        }

        return new Video($videoInput);

    }

    /**
     * @param string|VideoInputInterface $input
     * @return VideoInputInterface|null
     */
    protected function _rawInputToVideoInput($input)
    {

        if ($input instanceof VideoInputInterface) {
            return $input;
        }

        return $this
            ->getVideoInputFactory()
            ->getByValue($input);

    }

}
