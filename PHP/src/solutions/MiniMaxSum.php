<?php

declare(strict_types=1);

namespace Hackerrank\PHP\solutions;

/**
 * Problem URL:  https://www.hackerrank.com/challenges/mini-max-sum/problem
 * Difficulty: easy
 * Status: PASS
 */

class MiniMaxSum
{
    public static function Solution($arr)
    {
        $min = INF;
        $max = 0;
        $sum = 0;

        foreach ($arr as $val) {
            if ($val > $max) {
                $max = $val;
            }
            if ($val < $min) {
                $min = $val;
            }
            $sum += $val;
        }
        echo "($sum - $max) ($sum - $min)";
        return ['min' => $sum - $max, 'max' => $sum - $min];
    }
}
