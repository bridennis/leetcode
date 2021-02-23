<?php

namespace Easy\ReverseInteger;

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    /** @test */
    public function it_should_return_reverse_numbers(): void
    {
        $sut = new Solution();

        $this->assertEquals(321, $sut->reverse(123));
        $this->assertEquals(-321, $sut->reverse(-123));
        $this->assertEquals(21, $sut->reverse(120));
        $this->assertEquals(0, $sut->reverse(0));
        $this->assertEquals(0, $sut->reverse(1534236469));
    }
}
