<?php

namespace YouTubeiest\VideoInput;

/**
 * Input can be YouTube ID, URL, embed code, etc
 * It can be validated, and the YouTube ID calculated
 */
interface VideoInputInterface
{

    /**
     * @param string $value
     */
    public function __construct($value);

    /**
     * @return string
     */
    public function getValue();

    /**
     * @return string
     */
    public function __toString();

    /**
     * @return bool
     */
    public function isValid();

    /**
     * @return string
     * @throws Exception
     */
    public function getYouTubeId();

}
