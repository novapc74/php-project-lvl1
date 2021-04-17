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
    $mainQuestion = 'Answer "yes" if the number is even, otherwise answer "no".';
    $arrQwest = [];
    for ($i = 0; $i < NUMBER_ROUNDS; $i++) {
        $randNum = rand(0, 99);
        $question = "Question: {$randNum}";
        $correctAnswer = isEven($randNum) ? 'yes' : 'no';
        $arrQwest[] = [$question, $correctAnswer];
    }
    runGame($arrQwest, $mainQuestion);
}
