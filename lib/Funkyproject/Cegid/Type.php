<?php

namespace Funkyproject\Cegid;

abstract class Type
{
    const PAD_LEFT='left';
    const PAD_RIGHT='right';

    protected $direction;
    protected $value;
    protected $length;

    public function __construct($length, $direction = self::PAD_RIGHT)
    {
        $this->length = $length;
        $this->direction = $direction;
    }

    public function set($value)
    {
        $this->value = $value;
    }

    public function test()
    {
        return preg_match($this->assert, $this->value);
    }

    public function __toString()
    {
        return str_pad($this->value, $this->length, $this->direction);
    }

    abstract function setup();
}