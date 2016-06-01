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
     * @test test_if_print_correctly_fizz_buzz
     */
    public function test_if_print_correctly_fizz_buzz()
    {
        $this->assertEquals('Fizz', FizzBuzz::fizzBuzz(3));
        $this->assertEquals('Buzz', FizzBuzz::fizzBuzz(5));
        $this->assertEquals('FizzBuzz', FizzBuzz::fizzBuzz(15));
        $this->assertEquals('4', FizzBuzz::fizzBuzz(4));
    }
}
