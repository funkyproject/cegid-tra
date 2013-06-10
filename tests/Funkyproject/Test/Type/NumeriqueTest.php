<?php

namespace Funkyproject\Test\Type;

use \Funkyproject\Cegid\Type\Numerique;

class NumeriqueTest extends \PHPUnit_Framework_TestCase
{
    public function testNumeriqueTypeTestShouldBeTrue()
    {
        $type = new Numerique(20);
        $type->set('12');

        $this->assertTrue($type->test());
    }

    public function testNumeriqueTypeTestShouldBeFalse()
    {
        $type = new Numerique(20);
        $type->set('12.2');

        $this->assertFalse($type->test());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testAlphaThrowException()
    {
        $type = new Numerique(10);
        $type->set('alpha');

        $type->__toString();
    }

    public function testNumeriqueTypeShouldBePaddedToLeft()
    {
        $type = new Numerique(10);
        $type->set('10');

        $this->assertEquals('        10', (string) $type);
    }

}
