<?php

namespace Easy\NumberOf1Bits;

class Solution {
    private $cachedWeight = [];

    /**
     * @param Integer $n
     * @return Integer
     */
    function hammingWeight($n) {
        if (isset($this->cachedWeight[ $n ])) {
            return $this->cachedWeight[ $n ];
        }

        $this->cachedWeight[ $n ] = 0;

        $mask = 1;
        for ($position = 1; $position <= 32; $position++) {
            if (($n & $mask) > 0) {
                $this->cachedWeight[ $n ]++;
            }

            $mask *= 2;
            if ($mask > $n) {
                break;
            }
        }

        return $this->cachedWeight[ $n ];
    }
}