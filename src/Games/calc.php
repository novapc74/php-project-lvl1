<?php

namespace Brain\Games\Calc;

function calc(): array
{
    $mainQuestion = 'What is the result of the expression?';
    $randFirstNum = rand(0, 10);
    $randSecondNum = rand(0, 10);
    $randOperand = rand(1, 3);
    if ($randOperand === 1) {
        $operand = '+';
    } elseif ($randOperand === 2) {
        $operand = '-';
    } else {
        $operand = '*';
    }
    $question = "Question: $randFirstNum $operand $randSecondNum";
    if ($operand === '+') {
        $correctAnswer = strval($randFirstNum + $randSecondNum);
    } elseif ($operand === '-') {
        $correctAnswer = strval($randFirstNum - $randSecondNum);
    } else {
        $correctAnswer = strval($randFirstNum * $randSecondNum);
    }
    $data = [$mainQuestion, $question, $correctAnswer];
    return($data);
}
