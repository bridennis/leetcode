<?php

namespace Easy\SearchInsertPosition;

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    /** @test */
    public function it_should_return_the_correct_search_insert(): void
    {
        $sut = new Solution();

        $this->assertEquals(2, $sut->searchInsert([ 1, 3, 5, 6 ], 5));
        $this->assertEquals(1, $sut->searchInsert([ 1, 3, 5, 6 ], 2));
        $this->assertEquals(4, $sut->searchInsert([ 1, 3, 5, 6 ], 7));
        $this->assertEquals(0, $sut->searchInsert([ 1 ], 0));
    }
}
