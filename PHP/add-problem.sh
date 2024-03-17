#!/bin/bash

echo "Enter problem name:"
read solutionName
# solutionName="Solution"
echo "Enter difficulty:"
read difficulty
echo "Enter problem URL (last path):"
read URL

SOLUTIONS_PATH=$(pwd)/src/solutions
TESTS_PATH=$(pwd)/tests
solutionBlueprint="<?php declare(strict_types=1);

namespace Hackerrank\PHP\solutions;

/**
 * Problem URL:  https://www.hackerrank.com/challenges/${URL}/problem
 * Difficulty: $difficulty
 */

class $solutionName {
    public function Solution() {
       return 0;
    }
}
 "
testFileBlueprint="<?php declare(strict_types=1); 

namespace Hackerrank\PHP\solutions;

use PHPUnit\Framework\TestCase;

final class ${solutionName}Test extends TestCase {
    
    public function testSolution(){}
}
"
echo "$solutionBlueprint" > "$SOLUTIONS_PATH/$solutionName.php"
echo "Created $SOLUTIONS_PATH/$solutionName.php"

echo "$testFileBlueprint" > "$TESTS_PATH/${solutionName}Test.php"
echo "Created $TESTS_PATH/${solutionName}Test.php"
# echo "$TESTS_PATH/${solutionName}Test.php"