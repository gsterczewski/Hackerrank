<?php

declare(strict_types=1);

namespace Hackerrank\PHP\solutions;

use PHPUnit\Framework\TestCase;

final class MiniMaxSumTest extends TestCase
{
    private $testCases = [
        ['input' => [1, 2, 3, 4, 5], 'expected' => ['min' => 10, 'max' => 14]],
        ['input' => [1, 3, 5, 7, 9], 'expected' => ['min' => 16, 'max' => 24]],
    ];
    public function testSolution()
    {
        foreach ($this->testCases as $case) {

            $this->assertEquals($case['expected'], MiniMaxSum::Solution($case['input']));
        }
    }
}
