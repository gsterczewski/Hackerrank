<?php

declare(strict_types=1);

namespace Hackerrank\PHP\solutions;

/**
 * Problem URL:  https://www.hackerrank.com/challenges/birthday-cake-candles/problem
 * Difficulty: easy
 * Status: PASS
 */

class BirthdayCakeCandles
{
    public static function Solution(array $candles): int
    {
        $max = 0;
        $result = 0;
        foreach ($candles as $candle) {
            if ($candle > $max) {
                $max = $candle;
                $result = 1;
            } else if ($candle === $max) {
                $result++;
            }
        }
        return $result;
    }
}
