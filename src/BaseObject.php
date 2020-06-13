<?php

namespace Astrotomic\OpenGraph;

use Closure;

abstract class BaseObject
{
    /** @var BaseObject[] */
    protected array $tags = [];

    public function when(bool $condition, Closure $callback)
    {
        if ($condition) {
            $callback($this);
        }

        return $this;
    }

    protected function setProperty(string $prefix, string $property, string $content)
    {
		$this->tags[$prefix.(empty($property)?'':':').$property] = Property::make($prefix, $property, $content);
    }

    protected function addProperty(string $prefix, string $property, string $content)
    {
        $this->tags[] = Property::make($prefix, $property, $content);
    }

    public function __toString(): string
    {
        return implode(PHP_EOL, array_map('strval', $this->tags));
    }
}
