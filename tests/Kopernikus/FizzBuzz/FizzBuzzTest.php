<?php

namespace Kopernikus\FizzBuzz;

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @dataProvider fizzBuzzProvider
     * @param int $input
     * @param string $expected
     */
    public function testFizzBuzz(int $input, string $expected)
    {
        $fizzBuzz = new FizzBuzz();
        $actual = $fizzBuzz->fizzBuzz($input);
        $this->assertEquals($expected, $actual, "The input ${input} should be converted to the proper string ${expected}");
    }

    public function fizzBuzzProvider(): array
    {
        return [
            [2, '2'],
            [13, '13'],
            [3, 'Fizz'],
            [6, 'Fizz'],
            [5, 'Buzz'],
            [10, 'Buzz'],
            [15, 'FizzBuzz'],
            [30, 'FizzBuzz'],
        ];
    }

}
