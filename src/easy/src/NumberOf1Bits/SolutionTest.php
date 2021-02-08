<?php

namespace Easy\NumberOf1Bits;

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    /** @test */
    public function it_should_calc_hamming_weight(): void
    {
        $sut = new Solution();

        $n = 0b00000000000000000000000000001011;
        $actual = $sut->hammingWeight($n);
        $this->assertEquals(3, $actual);

        $n = 0b11111111111111111111111111111101;
        $actual = $sut->hammingWeight($n);
        $this->assertEquals(31, $actual);

        $n = 0b00000000000000000000000010000000;
        $actual = $sut->hammingWeight($n);
        $this->assertEquals(1, $actual);
    }
}
