<?php

namespace PawprintDigital\LaravelPagespeed\Middleware;

class ElideAttributes extends LaravelPageSpeed
{
    public function apply($buffer)
    {
        $replace = [
            '/ method=("get"|get)/' => '',
            '/ disabled=[^ >]*(.*?)/' => ' disabled',
            '/ selected=[^ >]*(.*?)/' => ' selected',
        ];

        return $this->replace($replace, $buffer);
    }
}
