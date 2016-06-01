<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 01-06-2016
 * Time: 22:20
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/equalexperts/FizzBuzz.php';

use EqualExperts\FizzBuzz;

$fizzBuzz = new FizzBuzz();

for ($x=1;$x<=20;$x++) {
    print_r($fizzBuzz->fizzBuzz($x) . "&nbsp;");
}