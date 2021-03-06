<?php

namespace Astrotomic\OpenGraph\Types\Music;

use Astrotomic\OpenGraph\Type;

class Playlist extends Type
{
    protected const PREFIX = 'music';

    protected string $type = 'music.playlist';

    public function creator(string $url)
    {
        $this->setProperty(self::PREFIX, 'creator', $url);

        return $this;
    }

    public function song(string $url, ?int $disc = null, ?int $track = null)
    {
        $this->addProperty(self::PREFIX, 'song', $url);
        $this->when($disc > 0, fn () => $this->addProperty(self::PREFIX, 'song:disc', $disc));
        $this->when($track > 0, fn () => $this->addProperty(self::PREFIX, 'song:track', $track));

        return $this;
    }
}
