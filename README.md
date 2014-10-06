# YouTubeiest

Of all the PHP YouTube libraries, this is the YouTubeiest

## Please note

This is an incomplete test version. Stay tuned!

## Basic usage

```php

use YouTubeiest\YouTubeiest;

$youTubeiest = new YouTubeiest();

$video = $youTubeiest->createVideo('dQw4w9WgXcQ');
$video = $youTubeiest->createVideo('http://www.youtube.com/watch?v=dQw4w9WgXcQ');

echo $video->getId(); //dQw4w9WgXcQ"
echo $video->getUrl(); //http://www.youtube.com/watch?v=dQw4w9WgXcQ"
echo $video->getEmbedCode(); //<iframe width="420" height="315" src="//www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allowfullscreen></iframe>
echo $video->getEmbedCode(YouTubeiest::EMBED_CODE_STYLE_OLD); //<iframe width="420" height="315" src="//www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allowfullscreen></iframe>

```
## Adding to composer

```
"repositories": [
    {
        "url": "https://github.com/turnbullm/YouTubeiest.git",
        "type": "git"
    }
]
```

```
"require": {
    "turnbullm/YouTubeiest": "master"
}
```
