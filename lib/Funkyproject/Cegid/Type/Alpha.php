<?php

namespace Funkyproject\Cegid\Type;

use \Funkyproject\Cegid\Type as BaseType;

class Alpha extends BaseType
{
    protected function assert()
    {
        return function($value) {
            return ctype_alnum($value);
        };
    }
}