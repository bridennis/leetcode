<?php

namespace Easy\SearchInsertPosition;

final class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        for ($i = 0, $max = count($nums); $i < $max; $i++) {
            if ($nums[ $i ] >= $target) {
                return $i;
            }
        }

        return $i;
    }
}
