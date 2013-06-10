<?php

namespace Funkyproject\Cegid\Type;

use \Funkyproject\Cegid\Type as BaseType;

class Date extends BaseType
{
    public function __construct()
    {
        parent::__construct($length = 8);
    }
   
    protected function assert()
    {
        return function($value) {
            return $value instanceof \DateTime;
        };
    }

    public function __toString()
    {
        $this->throwInvalidArgument();

        return $this->value->format('dmY');
    }
}