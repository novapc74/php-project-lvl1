<?php

namespace Brain\Games\Even;

use function Brain\Games\Engine\dataGenerator;
use function Brain\Games\Engine\task;

use const Brain\Games\Engine\NUMBER_ROUNDS;

function runGameEven(): void
{
    $mainQuestion = 'Answer "yes" if the number is even, otherwise answer "no".';
    for ($i = 0; $i < NUMBER_ROUNDS; $i++) {
        $randNum = dataGenerator();
        $question = "Question: $randNum[0]";
        $randNum[0] % 2 === 0 ? $correctAnswer = 'yes' : $correctAnswer = 'no';
        $data[] = [$question, $correctAnswer];
    }
    task($mainQuestion, $data);
}
