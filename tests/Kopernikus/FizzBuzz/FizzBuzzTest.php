<?php

namespace Kopernikus\FizzBuzz;

use Kopernikus\FizzBuzz\Assertions\FizzBuzzAssertionTraits;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    use FizzBuzzAssertionTraits;

    /**
     * @dataProvider retainedNumbersProvider

     */
    public function testRetainNumbers(int $input)
    {
        $fizzBuzz = new FizzBuzz();
        $actual = $fizzBuzz->fizzBuzz($input);
        self::assertEquals((string)$input, $actual);
    }

    /**
     * @dataProvider fizzProvider
     */
    public function testFizz(int $input)
    {
        $fizzBuzz = new FizzBuzz();
        $actual = $fizzBuzz->fizzBuzz($input);
        self::assertFizz($input, $actual);
    }

    /**
     * @dataProvider buzzProvider
     */
    public function testBuzz(int $input)
    {
        $fizzBuzz = new FizzBuzz();
        $actual = $fizzBuzz->fizzBuzz($input);
        self::assertBuzz($input, $actual);
    }

    /**
     * @dataProvider fizzBuzzProvider
     */
    public function testFizzBuzz(int $input)
    {
        $fizzBuzz = new FizzBuzz();
        $actual = $fizzBuzz->fizzBuzz($input);
        self::assertFizzBuzz($input, $actual);
    }

    public function fizzProvider(): \Generator
    {
        yield [3];
        yield [6];
        yield [9];
    }

    public function buzzProvider(): \Generator
    {
        yield [5];
        yield [20];
        yield [35];
    }

    public function fizzBuzzProvider(): \Generator
    {
        yield [15];
        yield [30];
        yield [60];
    }

    public function retainedNumbersProvider()
    {
        yield [1];
        yield [2];
        yield [4];
        yield [16];
        yield [101];
    }
}
