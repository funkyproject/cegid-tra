<?php

namespace Funkyproject\Cegid\Type;

use \Funkyproject\Cegid\Type as BaseType;

class Numerique extends BaseType
{
    public function __construct($length)
    {
        parent::__construct($length, self::PAD_LEFT);
    }

    protected function assert()
    {
        return function($value) {
            return ctype_digit($value);
        };
    }
}