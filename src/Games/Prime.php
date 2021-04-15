<?php

namespace Brain\Games\Prime;

use function Brain\Games\Engine\runGame;

use const Brain\Games\Engine\NUMBER_ROUNDS;

function prime(): array
{
    $data = [];
    $randNum = rand(2, 100);
    $question = "Question: $randNum";
    $q = 0;
    for ($i = 1; $i < $randNum + 1; $i++) {
        if ($randNum % $i === 0) {
            $q++;
        }
    }
    $q > 2 ? $correctAnswer = 'no' : $correctAnswer = 'yes';
    $data = [$question, $correctAnswer];
    return $data;
}

function runGamePrime(): void
{
    $mainQuestion = 'Answer "yes" if given number is prime. Otherwise answer "no"';
    $arrQwest = [];
    for ($i = 0; $i < NUMBER_ROUNDS; $i++) {
        $arrQwest[] = prime();
    }
    runGame($arrQwest, $mainQuestion);
}
