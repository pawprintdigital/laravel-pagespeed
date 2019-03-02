<?php

namespace PawprintDigital\LaravelPagespeed\Middleware;

class RemoveComments extends LaravelPageSpeed
{
    public function apply($buffer)
    {
        $replace = [
            '/<!--[^]><!\[](.*?)[^\]]-->/s' => ''
        ];

        return $this->replace($replace, $buffer);
    }
}
