<?php declare(strict_types=1);

namespace Youtube\GetVideoInfo\Parser;

class Str
{
    public function __invoke(string $text) : array
    {
        parse_str(urldecode($text), $output);
        return $output;
    }
}
