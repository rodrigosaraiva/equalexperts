<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 01-06-2016
 * Time: 20:46
 */

namespace Tests;

use EqualExperts\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test test_if_fizz_buzz_is_string
     */
    public function test_if_fizz_buzz_is_string() 
    {
        $this->assertEquals('Fizz', FizzBuzz::fizzBuzz(1));
    }
}
