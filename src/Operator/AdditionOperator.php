<?php

/**
 * This file is part of the Surftown test suit.
 *
 * @package Calculator
 * @version 1.0.0
 * @since 1.0.0
 * @author Christoffer Brøndum <cb@surftown.com>
 * @copyright 2015 Surftown A/S
 */

namespace Calculator\Operator;

/**
 * This class enables the user of a addition operator.
 */
class AdditionOperator implements OperatorInterface
{
    /**
     * Executes the calculation.
     * @param  int|float $x The number to calculate with.
     * @param  int|float $y The current result.
     * @return int|float    The result of the calculation.
     */
    public function run($x, $y)
    {
        return $x + $y;
    }
}
