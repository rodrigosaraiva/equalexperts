<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 01-06-2016
 * Time: 21:01
 */

namespace EqualExperts;


class FizzBuzz
{
    /**
     * @var int
     */
    private $countFizz = 0;
    /**
     * @var int
     */
    private $countBuzz = 0;
    /**
     * @var int
     */
    private $countLucky = 0;
    /**
     * @var int
     */
    private $countInteger = 0;

    /**
     * @return int
     */
    public function getCountFizz()
    {
        return $this->countFizz;
    }

    /**
     * @param int $countFizz
     */
    public function setCountFizz($countFizz)
    {
        $this->countFizz = $countFizz;
    }

    /**
     * @return int
     */
    public function getCountBuzz()
    {
        return $this->countBuzz;
    }

    /**
     * @param int $countBuzz
     */
    public function setCountBuzz($countBuzz)
    {
        $this->countBuzz = $countBuzz;
    }

    /**
     * @return int
     */
    public function getCountLucky()
    {
        return $this->countLucky;
    }

    /**
     * @param int $countLucky
     */
    public function setCountLucky($countLucky)
    {
        $this->countLucky = $countLucky;
    }

    /**
     * @return int
     */
    public function getCountInteger()
    {
        return $this->countInteger;
    }

    /**
     * @param int $countInteger
     */
    public function setCountInteger($countInteger)
    {
        $this->countInteger = $countInteger;
    }
    /**
     * fizzBuzz
     *
     * @param integer $value
     * @return string
     */
    public static function fizzBuzz($value)
    {
        if (strpos($value, '3') === false) {
            if ($value % 15 === 0)
                return 'FizzBuzz';
            if ($value % 3 === 0)
                return 'Fizz';
            if ($value % 5 === 0)
                return 'Buzz';
        } else
            return 'Lucky';

        return (string) $value;
    }
}