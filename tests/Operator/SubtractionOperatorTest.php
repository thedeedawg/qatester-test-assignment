<?php

namespace Calculator\Operator;

use PHPUnit_Framework_TestCase;

class SubtractionOperatorTest extends PHPUnit_Framework_TestCase
{
    protected $operator;

    protected function setUp()
    {
        $this->operator = new SubtractionOperator();
    }

    public function subtractionProvider()
    {
        return [
            [0, 0, 0],
            [2, 0, 2],
            [0, 2, -2],
            [2, 2, 0],
            [2.3, 2.3, 0],
            [-2, -2, 0],
        ];
    }

    /**
     * @dataProvider subtractionProvider
     */
    public function testCanSubtract($current, $x, $expected)
    {
        $this->assertEquals($expected, $this->operator->run($x, $current));
    }
}
