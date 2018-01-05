<?php

namespace Kopernikus\FizzBuzz;

/**
 * FizzBuzz
 **/
class FizzBuzz
{
    /**
     * @param int $n
     * @return String
     */
    public function fizzBuzz(int $n): String
    {
        $isFizz = $n % 3 === 0;
        $isBuzz = $n % 5 === 0;

        if ($isFizz && !$isBuzz) {
            return "Fizz";
        }

        if (!$isFizz && $isBuzz) {
            return "Buzz";
        }

        if ($isFizz && $isBuzz) {
            return "FizzBuzz";
        }

        return (string)$n;
    }
}
