<?php

namespace YouTubeiest;

use YouTubeiest\VideoInput\VideoInputInterface;

/**
 * A YouTube video
 */
class Video
{

    /**
     * @var string
     */
    protected $_id;

    /**
     * @param VideoInputInterface $input
     * @throws Exception
     */
    public function __construct($input)
    {

        $isValid = $input->isValid();
        if (!$isValid) {
            throw new Exception('Invalid input "' . $input . '"');
        }

        $this->_id = $input->getYouTubeId();

    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return 'http://www.youtube.com/watch?v=' . $this->_id;
    }

    /**
     * @TODO include all available options, eg: width and height
     * @param string $style YouTubeiest::EMBED_CODE_STYLE_ constant, defaults EMBED_CODE_STYLE_NEW if null
     * @throws Exception
     * @return string
     */
    public function getEmbedCode($style = null)
    {

        switch ($style) {

            case YouTubeiest::EMBED_CODE_STYLE_STANDARD:
            case null:

                return <<<END_OF_EMBED_CODE
<iframe width="420" height="315" src="//www.youtube.com/embed/{$this->_id}" frameborder="0" allowfullscreen></iframe>
END_OF_EMBED_CODE;

                break;

            case YouTubeiest::EMBED_CODE_STYLE_OLD:

                return <<<END_OF_EMBED_CODE
<object width="420" height="315"><param name="movie" value="//www.youtube.com/v/{$this->_id}?version=3&amp;hl=en_GB"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="//www.youtube.com/v/{$this->_id}?version=3&amp;hl=en_GB" type="application/x-shockwave-flash" width="420" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object>
END_OF_EMBED_CODE;

                break;

            default:

                throw new Exception('Invalid embed style "' . $style . '"');
                break;

        }

    }

}
