<?php

namespace Easy\PalindromeNumber;

use function intval;

final class Solution
{
    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if ($x < 0 || ($x % 10 == 0 && $x != 0)) {
            return false;
        }

        if ($x < 10) {
            return true;
        }

        if ($x < 100 && ($x % 10 === intval($x / 10))) {
            return true;
        }

        $reverseX = 0;
        do {
            $reverseX = $reverseX * 10 + $x % 10;
            $x = intval($x / 10);
        } while ($x > $reverseX);

        return $x === $reverseX || $x === intval($reverseX / 10);
    }
}
