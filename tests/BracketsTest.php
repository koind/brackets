<?php

namespace Tests;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Koind\Brackets;

class BracketsTest extends TestCase
{
    public function testEmptyString()
    {
        $bracket = new Brackets();
        $this->expectException(InvalidArgumentException::class);
        $bracket->checkString('');
    }

    public function testUnacceptableSymbols()
    {
        $bracket = new Brackets();
        $this->expectException(InvalidArgumentException::class);
        $bracket->checkString('()()()sdf()9)()()()(_)()=()().');
    }

    public function testIncorrectString()
    {
        $bracket = new Brackets();
        $this->assertEquals(
            false,
            $bracket->checkString('()()()()()()()((()()(())()())))()()()()()()()()()')
        );
    }

    public function testCorrectString()
    {
        $bracket = new Brackets();
        $this->assertEquals(
            true,
            $bracket->checkString('()()()((((()))()()(((()())))))()()(()()())()()()()')
        );
    }
}