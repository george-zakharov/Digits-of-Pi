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
     * Result for user
     * @var integer
     */
    public $result;

    /**
     * Status of the result
     * @var bool
     */
    private $status;

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
        if (is_numeric($number)) {
            $this->result = round(pi(), $number, PHP_ROUND_HALF_DOWN);
            $this->status = true;
        } else {
            $this->status = false;
        }
    }

    /**
     * Return result of operation.
     * If input is number, it correctly returns PI.
     * Else - special messages echoes.
     *
     * @return int, string
     */
    public function getResult()
    {
        if ($this->status === true) {
            echo $this->result;
        } elseif ($this->status === false) {
            echo 'Enter digits, not special symbols or letters.';
        } else {
            echo 'Ooops! Something went wrong. Type your number again.';
        }
    }
}