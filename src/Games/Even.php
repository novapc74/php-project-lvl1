<?php

namespace Brain\Games\Even;

use function Brain\Games\Engine\runGame;

use const Brain\Games\Engine\NUMBER_ROUNDS;

function isEven(int $randNum): bool
{
    if ($randNum % 2 === 0) {
        return true;
    }
    return false;
}

function runGameEven(): void
{
    $func = function (): array {
        $randNum = rand(0, 99);
        $question = "$randNum";
        $correctAnswer = isEven($randNum) ? 'yes' : 'no';
        $arrQuestion = [$question, $correctAnswer];
        return $arrQuestion;
    };
    $mainQuestion = 'Answer "yes" if the number is even, otherwise answer "no".';
    runGame($func, $mainQuestion);
}
