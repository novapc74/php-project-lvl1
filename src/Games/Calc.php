<?php

namespace Brain\Games\Calc;

use function Brain\Games\Engine\runGame;

use const Brain\Games\Engine\NUMBER_ROUNDS;

function calc(): array
{
    $arrOperand = ['+', '-', '*'];
    $randFirstNum = rand(0, 10);
    $randSecondNum = rand(0, 10);
    $randOperand = rand(0, 2);
    $question = "Question: $randFirstNum $arrOperand[$randOperand] $randSecondNum";
    switch ($arrOperand[$randOperand]) {
        case '+':
            $correctAnswer = strval($randFirstNum + $randSecondNum);
            break;
        case '-':
            $correctAnswer = strval($randFirstNum - $randSecondNum);
            break;
        case '*':
            $correctAnswer = strval($randFirstNum * $randSecondNum);
            break;
    }
    $data = [$question, $correctAnswer];
    return $data;
}

function runGameCalc(): void
{
    $mainQuestion = 'What is the result of the expression?';
    $arrQwest = [];
    for ($i = 0; $i < NUMBER_ROUNDS; $i++) {
        $arrQwest[] = calc();
    }
    runGame($arrQwest, $mainQuestion);
}
