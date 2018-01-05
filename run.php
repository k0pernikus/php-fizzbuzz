<?php

use Kopernikus\FizzBuzz\FizzBuzz;

require_once 'vendor/autoload.php';
$range = range(0, 100, 1);
$fizzBuzz = new FizzBuzz();

$result = array_map(
    function (int $n) use ($fizzBuzz) {
        return $fizzBuzz->fizzBuzz($n);
    },
    $range
);

foreach ($range as $number) {
    $numberDisplay = str_pad($number, 3, " ", STR_PAD_LEFT);
    echo "{$numberDisplay}: ${result[$number]}\n";
}
