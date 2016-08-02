<?php

namespace Calculator\Operator;

use PHPUnit_Framework_TestCase;

class ModulusOperatorTest extends PHPUnit_Framework_TestCase
{
    protected $operator;

    protected function setUp()
    {
        $this->operator = new ModulusOperator();
    }

    public function modulusProvider()
    {
        return [
            [4, 3, 1],
            [6.9, 4.3, 2],
            [-9, -2, -1],
            [-9, 2, -1],
        ];
    }

    /**
     * @dataProvider modulusProvider
     */
    public function testCanModulo($current, $x, $expected)
    {
        $this->assertEquals($expected, $this->operator->run($x, $current));
    }
}
