<?php

declare(strict_types=1);

namespace Hackerrank\PHP\solutions;

use PHPUnit\Framework\TestCase;

final class BirthdayCakeCandlesTest extends TestCase
{
    private $testCases = [
        ['input' => [4, 4, 2, 2], 'expected' => 2],
        ['input' => [3, 2, 1, 3], 'expected' => 2],
        ['input' => [2, 2, 2, 2], 'expected' => 4],
        ['input' => [2, 2, 2, 3], 'expected' => 1],
        ['input' => [1, 12, 2, 13], 'expected' => 1],
    ];
    public function testSolution()
    {
        foreach ($this->testCases as $case) {

            $result = BirthdayCakeCandles::Solution($case['input']);
            $this->assertEquals($case['expected'], $result);
        }
    }
}
