<?php

namespace Brain\Games\Gcd;

use const Brain\Games\Engine\NUMBER_ROUNDS;

function gcd(): array
{
    $mainQuestion = 'Find the greatest common divisor of given numbers.';
    $randFirstNum = rand(1, 10);
    $randSecondNum = rand(1, 10);
    $question = "Question: $randFirstNum $randSecondNum";
    $randFirstNum >= $randSecondNum ? $count = $randSecondNum : $count = $randFirstNum;
    $correctAnswer = '';
    for ($i = 1; $i < $count + 1; $i++) {
        if (($randFirstNum % $i) === 0 && ($randSecondNum % $i === 0)) {
            $correctAnswer = strval($i);
        }
    }
    $data = [$mainQuestion, $question, $correctAnswer];
    return($data);
}
