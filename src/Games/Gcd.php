<?php

namespace Brain\Games\Gcd;

use function Brain\Games\Engine\runGame;

use const Brain\Games\Engine\NUMBER_ROUNDS;

function getResultGcd(int $firstNum, int $secondNum): int
{
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
    $makeDataGame = function (): array {
        $randFirstNum = rand(1, 10);
        $randSecondNum = rand(1, 10);
        $question = "Question: $randFirstNum $randSecondNum";
        $answer = strval(getResultGcd($randFirstNum, $randSecondNum));
        $dataGame = [$question, $answer];
        return $dataGame;
    };
    $task = 'Find the greatest common divisor of given numbers.';
    runGame($makeDataGame, $task);
}
