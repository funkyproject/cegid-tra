<?php

namespace Funkyproject\Cegid\Type;

use \Funkyproject\Cegid\Type as BaseType;

class Boolean extends BaseType
{
    public function __construct()
    {
        parent::__construct($length = 1);
    }
   
    protected function assert()
    {
        return function($value) {
            return is_bool($value);
        };
    }

    public function __toString()
    {
        $this->throwInvalidArgument();

        return $this->value ? 'X' : ' ';
    }
}