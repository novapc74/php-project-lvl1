<?php

namespace Brain\Games\Even;

use function Brain\Games\Engine\runGame;

use const Brain\Games\Engine\NUMBER_ROUNDS;

function even(): array
{
    $randNum = rand(0, 99);
    $question = "Question: {$randNum}";
    $randNum % 2 === 0 ? $correctAnswer = "yes" : $correctAnswer = "no";
    $data = [$question, $correctAnswer];
    return $data;
}

function runGameEven(): void
{
    $mainQuestion = 'Answer "yes" if the number is even, otherwise answer "no".';
    $arrQwest = [];
    for ($i = 0; $i < NUMBER_ROUNDS; $i++) {
        $arrQwest[] = even();
    }
    runGame($arrQwest, $mainQuestion);
}
