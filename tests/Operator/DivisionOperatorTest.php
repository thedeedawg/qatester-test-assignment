<?php

namespace Calculator\Operator;

use PHPUnit_Framework_TestCase;

class DivisionOperatorTest extends PHPUnit_Framework_TestCase
{
    protected $operator;

    protected function setUp()
    {
        $this->operator = new DivisionOperator();
    }

    public function divisionOperator()
    {
        return [
            [4, 2, 2],
            [6.9, 2.3, 3],
            [-8, -2, 4],
            [-8, 2, -4],
        ];
    }

    /**
     * @dataProvider divisionOperator
     */
    public function testCanDivide($current, $x, $expected)
    {
        $this->assertEquals($expected, $this->operator->run($x, $current));
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Division by zero.
     */
    public function testExceptionIsRaisedForDivisionByZero()
    {
        $this->operator->run(0, 2);
    }
}
