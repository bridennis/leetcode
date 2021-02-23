<?php

namespace Easy\ReverseInteger;

use function intval;

final class Solution
{
    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        if ($x > -10 && $x < 10) {
            return $x;
        }

        $reverseX = 0;
        do {
            $reverseX = $reverseX * 10 + $x % 10;
        } while (($x = intval($x / 10)) != 0);

        return $reverseX > 2147483648 || $reverseX <= -2147483648 ? 0 : $reverseX;
    }
}
