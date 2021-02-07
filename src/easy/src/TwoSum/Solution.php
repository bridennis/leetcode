<?php

namespace Easy\TwoSum;

class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $firstNumbers = [];
        foreach ($nums as $index => $number) {
            $firstNumber = $target - $number;
            if (isset($firstNumbers[ $firstNumber ])) {
                return [
                    $firstNumbers[ $firstNumber ],
                    $index
                ];
            }

            $firstNumbers[ $number ] = $index;
        }

        return [];
    }
}
