<?php

namespace Kopernikus\FizzBuzz\Assertions;

use PHPUnit\Framework\TestCase;

trait FizzBuzzAssertionTraits
{
    public static function assertFizz(int $input, string $actual)
    {
        static::assertInputMatchesOutput($input, $actual, 'Fizz');
    }

    public static function assertBuzz(int $input, string $actual)
    {
        static::assertInputMatchesOutput($input, $actual, 'Buzz');
    }

    public static function assertFizzBuzz(int $input, string $actual)
    {
        static::assertInputMatchesOutput($input, $actual, 'FizzBuzz');
    }

    private static function assertInputMatchesOutput(string $input, string $actual, string $expected): void
    {
        TestCase::assertEquals($expected, $actual, "The input ${input} should be converted to the proper string ${expected}");
    }
}