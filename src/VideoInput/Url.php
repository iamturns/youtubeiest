<?php

namespace YouTubeiest\VideoInput;

use YouTubeiest\Exception;

/**
 * Eg: http://www.youtube.com/watch?v=dQw4w9WgXcQ
 */
class Url extends VideoInputAbstract
{

    /**
     * @return bool
     */
    protected function _isValid()
    {
        return (bool)preg_match(
            '/v=([A-Za-z0-9\-_]+)/',
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
            '/v=([A-Za-z0-9\-_]+)/',
            $this->_value,
            $matches
        );

        if (!isset($matches[1])) {
            throw new Exception('Could not find YouTube ID within URL');
        }

        return $matches[1];

    }

}
