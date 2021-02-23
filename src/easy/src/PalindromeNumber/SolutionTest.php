<?php

namespace Easy\PalindromeNumber;

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    /** @test */
    public function it_should_return_true_on_polindrome_number(): void
    {
        $sut = new Solution();

        $this->assertTrue($sut->isPalindrome(121));
        $this->assertTrue($sut->isPalindrome(101));
        $this->assertTrue($sut->isPalindrome(124421));
    }

    /** @test */
    public function it_should_return_false_on_not_polindrome_numbers(): void
    {
        $sut = new Solution();

        $this->assertFalse($sut->isPalindrome(10));
        $this->assertFalse($sut->isPalindrome(-121));
        $this->assertFalse($sut->isPalindrome(-101));
    }
}
