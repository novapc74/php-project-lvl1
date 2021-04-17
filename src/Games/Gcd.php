<?php

namespace Brain\Games\Gcd;

use function Brain\Games\Engine\runGame;

use const Brain\Games\Engine\NUMBER_ROUNDS;

function isGcd(int $firstNum, int $secondNum): string
{
    $firstNum >= $secondNum ? $count = $secondNum : $count = $firstNum;
    for ($i = $count; $i >= 1; $i--) {
        if ($firstNum % $i === 0 && $secondNum % $i === 0) {
            return (strval($i));
        }
    }
}

function runGameGcd(): void
{
    $mainQuestion = 'Find the greatest common divisor of given numbers.';
    $arrQwest = [];
    for ($i = 0; $i < NUMBER_ROUNDS; $i++) {
        $randFirstNum = rand(1, 10);
        $randSecondNum = rand(1, 10);
        $question = "Question: $randFirstNum $randSecondNum";
        $correctAnswer = isGcd($randFirstNum, $randSecondNum);
        $arrQwest[] = [$question, $correctAnswer];
    }
    runGame($arrQwest, $mainQuestion);
}
