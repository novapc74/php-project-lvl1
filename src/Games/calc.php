<?php

namespace Brain\Games\Calc;

use function Brain\Games\Engine\dataGenerator;
use function Brain\Games\Engine\task;
use const Brain\Games\Engine\NUMBER_ROUNDS;

function runGameCalc():void
{
    $mainQuestion = 'What is the result of the expression?';
    for ($i = 0; $i < NUMBER_ROUNDS; $i++) {
        $randNum = dataGenerator();
        if ($randNum[2] === 1) {
            $operand = '+';
        } elseif ($randNum[2] === 2) {
            $operand = '-';
        } else {
            $operand = '*';
        }
            $question = "Question: $randNum[0] $operand $randNum[1]";
        if ($operand === '+') {
            $correctAnswer = strval($randNum[0] + $randNum[1]);
        } elseif ($operand === '-') {
            $correctAnswer = strval($randNum[0] - $randNum[1]);
        } else {
            $correctAnswer = strval($randNum[0] * $randNum[1]);
        }
            $data[]= [$question, $correctAnswer];
    }
    task($mainQuestion, $data);
}
