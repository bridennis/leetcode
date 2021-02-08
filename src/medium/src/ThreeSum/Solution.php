<?php

namespace Medium\ThreeSum;

use function array_values;
use function count;
use function implode;
use function sort;

final class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        sort($nums);
        $thirdNumbers = array_flip($nums);
        $res = [];

        $first = 0;
        $countNums = count($nums);
        while ($first + 2 < $countNums) {
            if ($nums[ $first ] > 0) {
                break;
            }

            $second = $first + 1;
            while ($second + 1 < $countNums) {
                $thirdNumber = ($nums[ $first ] + $nums[ $second ]) * -1;
                if (
                    isset($thirdNumbers[ $thirdNumber ])
                    && $thirdNumbers[ $thirdNumber ] > $second
                ) {
                    $triplet = [ $nums[ $first ], $nums[ $second ], $thirdNumber ];
                    $res[ implode('', $triplet) ] = $triplet;
                }
                $second++;
            }
            $first++;
        }

        return array_values($res);
    }
}
