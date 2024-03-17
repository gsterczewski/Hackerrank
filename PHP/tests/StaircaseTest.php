<?php declare(strict_types=1); 

namespace Hackerrank\PHP\solutions;

use PHPUnit\Framework\TestCase;

final class StaircaseTest extends TestCase {
    
    public function testSolution(){
        $problem = new Staircase();
        $result = $problem->Solution(4);
        $expected = "\x20\x20\x20#\n\x20\x20##\n\x20###\n####";
        $this->assertEquals($expected,$result);
    }
}

