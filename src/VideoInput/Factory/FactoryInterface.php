<?php

namespace YouTubeiest\VideoInput\Factory;

use YouTubeiest\VideoInput\VideoInputInterface;

/**
 * Creates video inputs
 */
interface FactoryInterface
{

    /**
     * @param string $value
     * @return VideoInputInterface|null
     */
    public function getByValue($value);

}
