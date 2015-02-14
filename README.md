# YouTubeiest

Of all the PHP YouTube libraries, this is the YouTubeiest

## Install via Composer

Require:

```
"turnbullm/youtubeiest": "1.0.0"
```

## Basic usage

```php

//Setup

use YouTubeiest\YouTubeiest;

$youTubeiest = new YouTubeiest();

//Create video

$video = $youTubeiest->createVideo('dQw4w9WgXcQ');
//or...
$video = $youTubeiest->createVideo('http://www.youtube.com/watch?v=dQw4w9WgXcQ');

//Get video details

echo $video->getId(); //dQw4w9WgXcQ
echo $video->getUrl(); //http://www.youtube.com/watch?v=dQw4w9WgXcQ
echo $video->getEmbedCode(); //<iframe [...] ></iframe>
echo $video->getEmbedCode(YouTubeiest::EMBED_CODE_STYLE_OLD); //<object [...] ></object>
```
