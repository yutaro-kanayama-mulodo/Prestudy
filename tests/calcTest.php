<?php

namespace SaigonTest\Ci;

require_once('calc.php');

class CalcTest extends \PHPUnit_Framework_TestCase
{
    // target object for this test.
    private $target = null;

    // Mock for prepared statememt
    private $statement = null;

    // Mock for mysqli
    private $connection = null;

    /**
     * setup methods which are executed before each test methods.
     */
    public function setUp()
    {
        $this->target = new Calc();
    }

    /**
     * testXxxxx()
     * assert({expected}, (actual})
     */
    public function testInstance()
    {
        $this->assertInstanceOf('\SaigonTest\Ci\Calc', $this->target);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testAddNull()
    {
        $this->target->add(null);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testAddEmptyString()
    {
        $this->target->add('');
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testAddString()
    {
        $this->target->add('');
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testAddArray()
    {
        $this->target->add(array());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testAddObject()
    {
        $this->target->add((object)array('tableName' => 'tbl1'));
    }

}
