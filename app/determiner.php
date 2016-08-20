<?php

/**
 * Class Determiner
 * It operates with users information (check the input and return result).
 *
 * @author wildautumnwind
 * @package PI Digits
 * @version 1.0
 */
class Determiner
{
    /**
     * Number of digits from user
     * @var integer
     */
    private $number;

    /**
     * Result for user
     * @var integer
     */
    public $result;

    /**
     * Determiner constructor.
     */
    function __construct()
    {

    }

    /**
     * Takes user input and operates with it
     * @param $number
     */
    public function setDigits($number)
    {
        $this->number = $number;
        $this->result = round(pi(), $this->number);
    }
}