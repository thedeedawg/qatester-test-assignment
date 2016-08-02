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
 * The interface takes a number x and the current result y.
 */
interface OperatorInterface
{
    public function run($x, $y);
}
