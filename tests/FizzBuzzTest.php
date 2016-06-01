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
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals('Fizz', $fizzBuzz->fizzBuzz(21));
        $this->assertEquals('Buzz', $fizzBuzz->fizzBuzz(5));
        $this->assertEquals('FizzBuzz', $fizzBuzz->fizzBuzz(15));
        $this->assertEquals('4', $fizzBuzz->fizzBuzz(4));
    }

    /**
     * @test test_if_number_has_3
     */
    public function test_if_number_has_3()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals('Lucky', $fizzBuzz->fizzBuzz(3));
        $this->assertEquals('Lucky', $fizzBuzz->fizzBuzz(23));
    }

    /**
     * @test test_count_fizz_buzz_lucky_any
     */
    public function test_count_fizz_buzz_lucky_any()
    {
        $fizzBuzz = new FizzBuzz();
        for ($x=1;$x<=50;$x++)
            $fizzBuzz->fizzBuzz($x);
        $this->assertEquals(4, $fizzBuzz->getCountFizz());
        $this->assertEquals(3, $fizzBuzz->getCountBuzz());
        $this->assertEquals(1, $fizzBuzz->getCountBuzz());
        $this->assertEquals(2, $fizzBuzz->getCountLucky());
        $this->assertEquals(10, $fizzBuzz->getCountInteger());
    }
}
