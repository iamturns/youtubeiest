<?php

namespace YouTubeiest\VideoInput\Factory;

use YouTubeiest\VideoInput\VideoInputInterface;
use YouTubeiest\VideoInput\Id as VideoInputId;
use YouTubeiest\VideoInput\Url as VideoInputUrl;

/**
 * Standard factory for available video inputs
 */
class Standard implements FactoryInterface
{

    /**
     * @param string $value
     * @return VideoInputInterface|null
     */
    public function getByValue($value)
    {

        $videoInputUrl = new VideoInputUrl($value);
        if ($videoInputUrl->isValid()) {
            return $videoInputUrl;
        }
        unset($videoInputUrl);

        $videoInputId = new VideoInputId($value);
        if ($videoInputId->isValid()) {
            return $videoInputId;
        }
        unset($videoInputId);

        return null;

    }

}
