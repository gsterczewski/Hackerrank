<?php
namespace Hackerrank\PHP\solutions;

/**
 * Problem URL: https://www.hackerrank.com/challenges/array-left-rotation/problem
 * Difficulty: Easy
 * Status: PASS
 */

class ArrayLeftRotation {
    
    public function Solution(int $d, array $arr):array{
        $arrSize = sizeof($arr);
        $rotationsToPerform = $d % $arrSize;
        if($rotationsToPerform === 0) {
            return $arr;
        }
        $rotatedArray = array_merge(array_slice($arr,$d),array_slice($arr,0,$d));
    
        return $rotatedArray;
    }
}