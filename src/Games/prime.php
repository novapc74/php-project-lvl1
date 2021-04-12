<?php

namespace Brain\Games\Prime;

use function Brain\Games\Engine\dataGenerator;
use function Brain\Games\Engine\task;

use const Brain\Games\Engine\NUMBER_ROUNDS;

function runGamePrime(): void
{
    $data = [];
    $mainQuestion = 'Answer "yes" if given number is prime. Otherwise answer "no"';
    for ($i = 0; $i < NUMBER_ROUNDS; $i++) {
        $randNum = dataGenerator();
        $question = "Question: $randNum[0]";
        $test = $randNum[0];
        $q = 0;
        for ($k = 1; $k < $test + 1; $k++) {
            if ($test % $k === 0) {
                $q++;
            }
        }
        $q > 2 ? $correctAnswer = 'no' : $correctAnswer = 'yes';
        $data[] = [$question, $correctAnswer];
    }
    task($mainQuestion, $data);
}
