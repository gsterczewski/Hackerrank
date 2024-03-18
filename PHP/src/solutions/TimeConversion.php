<?php

declare(strict_types=1);

namespace Hackerrank\PHP\solutions;

/**
 * Problem URL:  https://www.hackerrank.com/challenges/time-conversion/problem
 * Difficulty: Easy
 * Status: PASS
 */


class TimeConversion
{
    public static function Solution(string $time): string
    {

        $hour = substr($time, 0, 2);
        $suffix = substr($time, -2);
        $minutesAndSeconds = substr($time, 2, 6);

        if ($suffix === 'AM') {
            if ($hour === '12') {
                $hour = '00';
            }
            return "{$hour}{$minutesAndSeconds}";
        }

        $updatedHour = ((int) $hour % 12) + 12;
        return  "{$updatedHour}{$minutesAndSeconds}";
    }
}
