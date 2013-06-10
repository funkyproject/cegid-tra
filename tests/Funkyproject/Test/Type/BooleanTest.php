<?php

namespace Funkyproject\Test\Type;

use \Funkyproject\Cegid\Type\Boolean;

class BooleanTest extends \PHPUnit_Framework_TestCase
{
    public function testBooleanTypeTestShouldBeTrue()
    {
        $type = new Boolean();
        $type->set(true);

        $this->assertTrue($type->test());
    }

    public function testBooleanTypeTestShouldBeFalse()
    {
        $type = new Boolean();
        $type->set('oh');

        $this->assertFalse($type->test());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testBooleanTypeStringThrowException()
    {
        $type = new Boolean(10);

        $type->set('10102010');

        $type->__toString();
    }

    public function testBooleanTrueTypeString()
    {
        $type = new Boolean(10);        
        $type->set(true);

        $this->assertEquals('X', (string) $type);
    }

    public function testBooleanFalseTypeString()
    {
        $type = new Boolean(10);
        $type->set(false);

        $this->assertEquals(' ', (string) $type);
    }
}
