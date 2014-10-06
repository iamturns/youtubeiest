<?php

namespace YouTubeiest\VideoInput;

use YouTubeiest\Exception;
use YouTubeiest\VideoInput\VideoInputAbstract;

/**
 * Eg: dQw4w9WgXcQ
 */
class Id extends VideoInputAbstract
{

    /**
     * @return bool
     */
    protected function _isValid()
    {
        return (bool)preg_match(
            '/^[A-Za-z0-9\-_]+$/',
            $this->_value
        );
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function _getYouTubeId()
    {

        preg_match(
            '/^([A-Za-z0-9\-_]+)$/',
            $this->_value,
            $matches
        );

        if (!isset($matches[1])) {
            throw new Exception('Invalid YouTube ID');
        }

        return $matches[1];

        return $this->_value;
    }

}
