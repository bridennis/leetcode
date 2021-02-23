<?php

namespace Easy\PlusOne;

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    /** @test */
    public function it_should_return_reverse_numbers(): void
    {
        $sut = new Solution();

        $this->assertEquals([ 1, 0 ], $sut->plusOne([ 9 ]));
        $this->assertEquals([ 1, 2, 4 ], $sut->plusOne([ 1, 2, 3 ]));
        $this->assertEquals([ 1 ], $sut->plusOne([ 0 ]));
        $this->assertEquals([ 4, 3, 2, 2 ], $sut->plusOne([ 4, 3, 2, 1 ]));
    }
}
