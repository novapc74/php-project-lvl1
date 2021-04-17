<?php

namespace Brain\Games\Prime;

use function Brain\Games\Engine\runGame;

use const Brain\Games\Engine\NUMBER_ROUNDS;

function isPrime(int $randNum): bool
{
    if ($randNum < 2) {
        return false;
    }
    for ($i = 2; $i <= $randNum / 2; $i++) {
        if ($randNum % $i === 0) {
            return false;
        }
    }
    return true;
}

function runGamePrime(): void
{
    $mainQuestion = 'Answer "yes" if given number is prime. Otherwise answer "no"';
    $arrQwest = [];
    for ($i = 0; $i < NUMBER_ROUNDS; $i++) {
        $randNum = rand(0, 100);
        $question = "Question: $randNum";
        $correctAnswer = isPrime($randNum) ? 'yes' : 'no';
        $arrQwest[] = [$question, $correctAnswer];
    }
    runGame($arrQwest, $mainQuestion);
}
