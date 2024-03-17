<?php declare(strict_types=1); 
namespace Hackerrank\PHP\solutions;
use PHPUnit\Framework\TestCase;

class ArraySumTest extends TestCase {
    public function testSolution(){
        $inputs = [[1,2,3,4,5],[0],[10,100,200],[-1,-5,1,5]];
        $expected = [15,0,310,0];
        $problem = new ArraySum();
        foreach($inputs as $key => $input) {
            $result = $problem->Solution($input);
            $this->assertSame($result,$expected[$key]);
        }
    }
}