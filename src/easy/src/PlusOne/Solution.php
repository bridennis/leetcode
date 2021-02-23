<?php

namespace Easy\PlusOne;

use function array_merge;
use function array_push;
use function array_unshift;
use function count;

final class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        for ($i = count($digits) - 1; $i >= 0; $i--) {
            if ($digits[ $i ] === 9) {
                $digits[ $i ] = 0;
            } else {
                $digits[ $i ]++;
                return $digits;
            }
        }

        return array_merge([ 1 ], $digits);
    }
}