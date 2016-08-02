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

namespace Calculator;

use Calculator\Operator\OperatorInterface;

/**
* The main calculator class.
*
* This class handles all operators which implements the operator interface.
*/
class Calculator
{
    /**
     * The current operator.
     * @var OperatorInterface
     */
    protected $operator;

    /**
     * The current calculated result.
     * @var int|float
     */
    protected $result;

    /**
     * Set starting point.
     * @param integer $result Makes it possible to define a default starting point.
     */
    public function __construct($result = 0)
    {
        $this->result = $result;
    }

    /**
     * Set the operator wanted for the next calculation.
     * @param OperatorInterface $operator An operator implementing the operator interface.
     */
    public function setOperator(OperatorInterface $operator)
    {
        $this->operator = $operator;
    }

    /**
     * This uses the operator and the numbers provided.
     * @param  array $n Numbers to use when calculating the result.
     * @return void
     */
    public function calculate(array $n)
    {
        foreach ($n as $x) {
            $this->result = $this->operator->run($x, $this->result);
        }
    }

    /**
     * This method returns the calculated result.
     * @return int|float The calculated result.
     */
    public function getResult()
    {
        return $this->result;
    }
}
