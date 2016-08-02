<?php

namespace Calculator\Operator;

use PHPUnit_Framework_TestCase;

class ExponentiationOperatorTest extends PHPUnit_Framework_TestCase
{
    protected $operator;

    protected function setUp()
    {
        $this->operator = new ExponentiationOperator();
    }

    public function exponentiationProvider()
    {
        return [
            [0, 0, 1],
            [2, 0, 1],
            [0, 2, 0],
            [2, 2, 4],
            [2.3, 2.3, 6.7916300752478769],
            [-2, -2, 0.25],
        ];
    }

    /**
     * @dataProvider exponentiationProvider
     */
    public function testCanExponentiate($current, $x, $expected)
    {
        $this->assertEquals($expected, $this->operator->run($x, $current));
    }
}
