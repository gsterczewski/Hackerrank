<?php declare(strict_types=1);

namespace Hackerrank\PHP\solutions;

/**
 * Problem URL:  https://www.hackerrank.com/challenges/staircase/problem
 * Difficulty: Easy
 * Status: PASS
 */

class Staircase {
    
    public function Solution(int $n) {
        $result = "";
        for ($i = 0; $i < $n; $i++){
            $hashes = 1 + $i;
            $spaces = $n - $hashes;
            $result .= str_repeat("\x20",$spaces);
            $result .= str_repeat("#",$hashes);
            if($i < $n-1) {
                $result .= "\n";
            } 
        }
        
       return $result;
    }
}
 