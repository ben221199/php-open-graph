<?php

namespace Astrotomic\OpenGraph\StructuredProperties;

use Astrotomic\OpenGraph\BaseObject;

class Image extends BaseObject
{
    protected const PREFIX = 'og:image';

	public function __construct(string $url,$useSubProperty=false)
    {
		$this->setProperty(self::PREFIX,$useSubProperty?'url':'', $url);
    }

	public static function make(string $url,$useSubProperty=false)
    {
		return new static($url,$useSubProperty);
    }

    public function secureUrl(string $url)
    {
        $this->setProperty(self::PREFIX, 'secure_url', $url);

        return $this;
    }

    public function mimeType(string $mimeType)
    {
        $this->setProperty(self::PREFIX, 'type', $mimeType);

        return $this;
    }

    public function width(int $width)
    {
        $this->setProperty(self::PREFIX, 'width', $width);

        return $this;
    }

    public function height(int $height)
    {
        $this->setProperty(self::PREFIX, 'height', $height);

        return $this;
    }

    public function alt(string $alt)
    {
        $this->setProperty(self::PREFIX, 'alt', $alt);

        return $this;
    }
}
