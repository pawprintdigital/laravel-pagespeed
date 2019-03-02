<?php

namespace PawprintDigital\LaravelPagespeed\Middleware;

class CollapseWhitespace extends LaravelPageSpeed
{
    public function apply($buffer)
    {
        $replace = [
            "/\n([\S])/" => '$1',
            "/\r/" => '',
            "/\n/" => '',
            "/\t/" => '',
            "/ +/" => ' ',
            "/> +</" => '><',
        ];

        return $this->replace($replace, $buffer);
    }
}
