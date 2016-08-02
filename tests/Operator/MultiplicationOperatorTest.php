<?php

namespace Calculator\Operator;

use PHPUnit_Framework_TestCase;

class MultiplicationOperatorTest extends PHPUnit_Framework_TestCase
{
    protected $operator;

    protected function setUp()
    {
        $this->operator = new MultiplicationOperator();
    }

    public function multiplicationProvider()
    {
        return [
            [0, 0, 0],
            [2, 0, 0],
            [0, 2, 0],
            [2, 2, 4],
            [2.3, 2.3, 5.29],
            [-2, -2, 4],
        ];
    }

    /**
     * @dataProvider multiplicationProvider
     */
    public function testCanMultiply($current, $x, $expected)
    {
        $this->assertEquals($expected, $this->operator->run($x, $current));
    }
}
