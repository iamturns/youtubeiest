# YouTubeiest

Of all the PHP YouTube libraries, this is the YouTubeiest

## Please note

This is an incomplete test version. Stay tuned!

## Install via Composer

```
"repositories": [
    {
        "url": "https://github.com/turnbullm/youtubeiest.git",
        "type": "git"
    }
]
```

```
"require": {
    "turnbullm/youtubeiest": "master"
}
```

You may need to adjust your 'minimum-stability' setting;

```
"minimum-stability": "dev"
```

## Basic usage

```php

use YouTubeiest\YouTubeiest;

require 'vendor/autoload.php';

$youTubeiest = new YouTubeiest();

$video = $youTubeiest->createVideo('dQw4w9WgXcQ');
$video = $youTubeiest->createVideo('http://www.youtube.com/watch?v=dQw4w9WgXcQ');

echo $video->getId(); //dQw4w9WgXcQ"
echo $video->getUrl(); //http://www.youtube.com/watch?v=dQw4w9WgXcQ"
echo $video->getEmbedCode(); //<iframe [...] ></iframe>
echo $video->getEmbedCode(YouTubeiest::EMBED_CODE_STYLE_OLD); //<object [...] ></object>

```
