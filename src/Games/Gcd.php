<?php

namespace Brain\Games\Gcd;

use function Brain\Games\Engine\runGame;

use const Brain\Games\Engine\NUMBER_ROUNDS;

function isGcd(int $firstNum, int $secondNum): int
{
    $result = 1;
    $firstNum >= $secondNum ? $count = $secondNum : $count = $firstNum;
    for ($result = $count; $result >= 1; $result--) {
        if ($firstNum % $result === 0 && $secondNum % $result === 0) {
            break;
        }
    }
        return $result;
}

function runGameGcd(): void
{
    $func = function (): array {
        $randFirstNum = rand(1, 10);
        $randSecondNum = rand(1, 10);
        $question = "Question: $randFirstNum $randSecondNum";
        $correctAnswer = strval(isGcd($randFirstNum, $randSecondNum));
        $arrQuestion = [$question, $correctAnswer];
        return $arrQuestion;
    };
    $mainQuestion = 'Find the greatest common divisor of given numbers.';
    runGame($func, $mainQuestion);
}
