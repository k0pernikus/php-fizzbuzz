<?php

use Kopernikus\FizzBuzz\FizzBuzz;

require_once 'vendor/autoload.php';
$range = range(0, 100, 1);
$fizzBuzz = new FizzBuzz();
foreach ($range as $number) {
    echo "{$number}: {$fizzBuzz->fizzBuzz($number)} \n";
}

