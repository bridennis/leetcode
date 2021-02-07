<?php

namespace Easy\TwoSum;

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    /** @test */
    public function it_should_get_two_sum_results(): void
    {
        $sut = new Solution();
        $nums = [ 2, 7, 11, 15 ];
        $target = 9;

        $expected = [ 0, 1 ];
        $this->assertEquals($expected, $sut->twoSum($nums, $target));
    }
}
