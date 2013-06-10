<?php

namespace Funkyproject\Test\Type;

use \Funkyproject\Cegid\Type;
use \Funkyproject\Cegid\Type\Alpha;

class AlphaTest extends \PHPUnit_Framework_TestCase
{
    public function testAlphaTypeTestShouldBeTrue()
    {
        $type = new Alpha(20, Type::PAD_LEFT);
        $type->set('Alpha1');

        $this->assertTrue($type->test());
    }

    public function testAlphaTypeTestShouldBeFalse()
    {
        $type = new Alpha(20, Type::PAD_LEFT);
        $type->set('./:');

        $this->assertFalse($type->test());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testAlphaThrowException()
    {
        $type = new Alpha(10, Type::PAD_LEFT);
        $type->set('./');

        $type->__toString();
    }

    public function testAlphaTypeShouldBePaddedToLeft()
    {
        $type = new Alpha(10, Type::PAD_LEFT);
        $type->set('alpha');

        $this->assertEquals('     alpha', (string) $type);
    }

    public function testAlphaTypeShouldBePaddedToRight()
    {
        $type = new Alpha(8, Type::PAD_RIGHT);
        $type->set('alpha');

        $this->assertEquals('alpha   ', (string) $type);
    }

}
