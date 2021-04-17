<?php

namespace Brain\Games\Calc;

use function Brain\Games\Engine\runGame;

use const Brain\Games\Engine\NUMBER_ROUNDS;

function isCalc(int $randFirstNum, string $randOperand, int $randSecondNum): int
{
    switch ($randOperand) {
        case '+':
            return ($randFirstNum + $randSecondNum);
            break;
        case '-':
            return ($randFirstNum - $randSecondNum);
            break;
        case '*':
            return ($randFirstNum * $randSecondNum);
            break;
    }
}

function runGameCalc(): void
{
    $mainQuestion = 'What is the result of the expression?';
    $arrQwest = [];
    for ($i = 0; $i < NUMBER_ROUNDS; $i++) {
        $randFirstNum = rand(0, 10);
        $randSecondNum = rand(0, 10);
        $operands = ['+', '-', '*'];
        $randOperand = array_rand($operands);
        $question = "Question: $randFirstNum $operands[$randOperand] $randSecondNum";
        $correctAnswer = strval(isCalc($randFirstNum, $operands[$randOperand], $randSecondNum));
        $arrQwest[] = [$question, $correctAnswer];
    }
    runGame($arrQwest, $mainQuestion);
}
