<?php

namespace Calculator;

use Calculator\Operator\AdditionOperator;
use PHPUnit_Framework_TestCase;

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    public function testCanBeConstructedFromNothing()
    {
        $c = new Calculator();
        $this->assertInstanceOf(Calculator::class, $c);

        return $c;
    }

    public function testCanBeConstructedFromInteger()
    {
        $c = new Calculator(23);
        $this->assertInstanceOf(Calculator::class, $c);

        return $c;
    }

    public function testCanBeConstructedFromFloat()
    {
        $c = new Calculator(2.3);
        $this->assertInstanceOf(Calculator::class, $c);
    }

    /**
     * @depends testCanBeConstructedFromNothing
     */
    public function testDefaultResultIsZero(Calculator $c)
    {
        $this->assertEquals(0, $c->getResult());
    }

    /**
     * @depends testCanBeConstructedFromInteger
     */
    public function testResultIsSetToInitialValue(Calculator $c)
    {
        $this->assertEquals(23, $c->getResult());
    }

    /**
     * @depends testCanBeConstructedFromNothing
     * @expectedException PHPUnit_Framework_Error
     */
    public function testErrorIsRaisedForInvalidOperatorArgument(Calculator $c)
    {
        $c->setOperator('+');
    }

    /**
     * @depends testCanBeConstructedFromNothing
     */
    public function testCanSetOperator(Calculator $c)
    {
        $c->setOperator(new AdditionOperator());

        return $c;
    }

    /**
     * @depends testCanSetOperator
     */
    public function testCanCalculate(Calculator $c)
    {
        $c->calculate([2, 2]);
        $this->assertEquals(4, $c->getResult());

        return $c;
    }

    /**
     * @depends testCanCalculate
     */
    public function testCanCalculateInChain(Calculator $c)
    {
        $c->calculate([2, 2, 2]);
        $this->assertEquals(10, $c->getResult());
    }
}
