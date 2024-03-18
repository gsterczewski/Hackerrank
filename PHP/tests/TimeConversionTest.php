<?php

declare(strict_types=1);

namespace Hackerrank\PHP\solutions;

use PHPUnit\Framework\TestCase;

final class TimeConversionTest extends TestCase
{
    private $testCases = [
        ['input' => '01:59:59PM', 'expected' => '13:59:59'],
        ['input' => '07:05:45PM', 'expected' => '19:05:45'],
        ['input' => '07:05:45AM', 'expected' => '07:05:45'],
        ['input' => '12:01:00AM', 'expected' => '00:01:00'],
        ['input' => '12:00:00AM', 'expected' => '00:00:00'],
        ['input' => '12:00:00PM', 'expected' => '12:00:00'],
        ['input' => '12:01:00PM', 'expected' => '12:01:00'],
    ];
    public function testSolution()
    {
        foreach ($this->testCases as $case) {
            $this->assertSame($case['expected'], TimeConversion::Solution($case['input']));
        }
    }
}
