<?php declare(strict_types=1);

namespace Youtube\GetVideoInfo;

use Closure;
use Youtube\GetVideoInfo\Parser\Str;

class Parser
{
    public function parse(string $value, ?Closure $closure = null) : array
    {
        $closure ?? $closure = Closure::fromCallable(new Str);
        return $closure($value);
    }
}
