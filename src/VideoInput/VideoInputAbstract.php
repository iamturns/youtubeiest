<?php

namespace YouTubeiest\VideoInput;

/**
 * Basic video input holding common code
 */
abstract class VideoInputAbstract
{

    /**
     * @var string
     */
    protected $_value;

    /**
     * @var string
     */
    protected $_youTubeId;

    /**
     * @var bool
     */
    protected $_isValid;

    /**
     * @param string $value
     */
    public function __construct($value)
    {
        $this->_value = $value;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->_value;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getValue();
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        if ($this->_isValid === null) {
            $this->_isValid = $this->_isValid();
        }
        return $this->_isValid;
    }

    /**
     * @return bool
     */
    abstract protected function _isValid();

    /**
     * @return string
     * @throws Exception
     */
    public function getYouTubeId()
    {
        if ($this->_youTubeId === null) {
            $this->_youTubeId = $this->_getYouTubeId();
        }
        return $this->_youTubeId;
    }

    /**
     * @return string
     * @throws Exception
     */
    abstract protected function _getYouTubeId();

}
