<?php declare(strict_types=1); 
namespace Hackerrank\PHP\solutions;
use PHPUnit\Framework\TestCase;


final class ArrayLeftRotationTest extends TestCase {

   private function createTestCase($rot,$arr,$exp){
    return array("arr" => $arr, "expected" => $exp, "rotations" => $rot);
   }
    public function testSolution(){
        $problem = new ArrayLeftRotation();
        $tcs = [
            $this->createTestCase(5,[1,2,3,4,5],[1,2,3,4,5]),
            $this->createTestCase(10,[1,2,3,4,5],[1,2,3,4,5]),
            $this->createTestCase(3,[1,2,3,4,5],[4,5,1,2,3]),
            $this->createTestCase(1,[1,2,3,4,5],[2,3,4,5,1]),
            $this->createTestCase(4,[1,2,3,4,5],[5,1,2,3,4]),
        ];
        foreach($tcs as $tc) {
            $result = $problem->Solution($tc["rotations"],$tc["arr"]);
            $this->assertEquals($tc["expected"],$result);

        }
    }
}