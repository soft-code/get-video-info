<?php declare(strict_types=1);

namespace Youtube\GetVideoInfo;

use Youtube\GetVideoInfo\Parser\Str;

class Parser
{
    public function parse(string $value, ?Closure $closure) : array
    {
        $closure ?? $closure = Closure::fromCallable(new Str);
        return $closure($value);
    }
}
