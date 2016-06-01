<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 01-06-2016
 * Time: 21:01
 */

namespace EqualExperts;


abstract class FizzBuzz
{
    /**
     * fizzBuzz
     *
     * @param integer $value
     * @return string
     */
    public static function fizzBuzz($value)
    {
        $fizzOrBuzz = '';
        if ($value % 3 === 0)
            $fizzOrBuzz = 'Fizz';
        if ($value % 5 === 0)
            $fizzOrBuzz = 'Buzz';
        if ($value % 15 === 0)
            $fizzOrBuzz = 'FizzBuzz';

        return $fizzOrBuzz;
    }
}