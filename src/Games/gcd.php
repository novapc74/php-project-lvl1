<?php

namespace Brain\Games\Gcd;

use function Brain\Games\Engine\dataGenerator;
use function Brain\Games\Engine\task;

use const Brain\Games\Engine\NUMBER_ROUNDS;

function runGameGcd(): void
{
    $data = [];
    $mainQuestion = 'Find the greatest common divisor of given numbers.';
    for ($k = 0; $k < NUMBER_ROUNDS; $k++) {
        $randNum = dataGenerator();
        $question = "Question: $randNum[0] $randNum[1]";
        $randNum[0] >= $randNum[1] ? $count = $randNum[1] : $count = $randNum[0];
        $correctAnswer = '';
        for ($i = 1; $i < $count + 1; $i++) {
            if (($randNum[0] % $i) === 0 && ($randNum[1] % $i === 0)) {
                $correctAnswer = strval($i);
            }
        }
        $data[] = [$question, $correctAnswer];
    }
    task($mainQuestion, $data);
}
