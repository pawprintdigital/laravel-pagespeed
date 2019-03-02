<?php

namespace PawprintDigital\LaravelPagespeed\Middleware;

class TrimUrls extends LaravelPageSpeed
{
    public function apply($buffer)
    {
        $replace = [
            '/https:/' => '',
            '/http:/' => ''
        ];

        return $this->replace($replace, $buffer);
    }
}
