<?php

namespace Funkyproject\Test\Type;

use \Funkyproject\Cegid\Type\Date;

class DateTest extends \PHPUnit_Framework_TestCase
{
    public function testDateTypeTestShouldBeTrue()
    {
        $type = new Date();
        $type->set(new \DateTime());

        $this->assertTrue($type->test());
    }

    public function testDateTypeTestShouldBeFalse()
    {
        $type = new Date();
        $type->set('20 mars 2011');

        $this->assertFalse($type->test());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testDateTypeStringThrowException()
    {
        $type = new Date(10);

        $type->set('10102010');

        $type->__toString();
    }

    public function testDateTypeString()
    {
        $type = new Date(10);
        $date = new \DateTime;

        $type->set($date);

        $this->assertEquals($date->format('dmY'), (string) $type);
    }
}
