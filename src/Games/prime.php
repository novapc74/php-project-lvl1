<?php

namespace Brain\Games\Prime;

use const Brain\Games\Engine\NUMBER_ROUNDS;

function prime(): array
{
    $data = [];
    $mainQuestion = 'Answer "yes" if given number is prime. Otherwise answer "no"';
    $randFirstNum = rand(2, 100);
    $question = "Question: $randFirstNum";
    $test = $randFirstNum;
    $q = 0;
    for ($k = 1; $k < $test + 1; $k++) {
        if ($test % $k === 0) {
            $q++;
        }
    }
    $q > 2 ? $correctAnswer = 'no' : $correctAnswer = 'yes';
    $data = [$mainQuestion, $question, $correctAnswer];
    return($data);
}
