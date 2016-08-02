<?php

namespace Calculator\Operator;

use PHPUnit_Framework_TestCase;

class AdditionOperatorTest extends PHPUnit_Framework_TestCase
{
    protected $operator;

    protected function setUp()
    {
        $this->operator = new AdditionOperator();
    }

    public function additionProvider()
    {
        return [
            [0, 0, 0],
            [2, 0, 2],
            [0, 2, 2],
            [2, 2, 4],
            [2.3, 2.3, 4.6],
            [-2, -2, -4],
        ];
    }

    /**
     * @dataProvider additionProvider
     */
    public function testCanAdd($current, $x, $expected)
    {
        $this->assertEquals($expected, $this->operator->run($x, $current));
    }
}
