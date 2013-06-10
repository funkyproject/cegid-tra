<?php

namespace Funkyproject\Cegid;

abstract class Type
{
    const PAD_LEFT=0;
    const PAD_RIGHT=1;

    protected $direction;
    protected $value;
    protected $length;
    protected $assert;

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
        return call_user_func($this->assert(), $this->value);
    }

    public function __toString()
    {
        $this->throwInvalidArgument();

        return str_pad($this->value, $this->length, ' ', $this->direction);
    }

    abstract protected function assert();

    protected function throwInvalidArgument()
    {
        if (!$this->test()) {
            throw new \InvalidArgumentException(
                sprintf('Type %s isn\'t a %S valid type', $this->value, get_class($this))
            );
        }
    }
}
