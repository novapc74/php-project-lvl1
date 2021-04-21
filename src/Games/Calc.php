<?php

namespace Brain\Games\Calc;

use function Brain\Games\Engine\runGame;

use const Brain\Games\Engine\NUMBER_ROUNDS;

function isCalc(int $firstNum, string $operand, int $secondNum): int
{
    $result = 0;
    switch ($operand) {
        case '+':
            $result = ($firstNum + $secondNum);
            break;
        case '-':
            $result = ($firstNum - $secondNum);
            break;
        case '*':
            $result = ($firstNum * $secondNum);
            break;
    }
    return $result;
}

function runGameCalc(): void
{
    $func = function () {
        $randFirstNum = rand(0, 10);
        $randSecondNum = rand(0, 10);
        $operands = ['+', '-', '*'];
        $randOperand = array_rand($operands);
        $question = "$randFirstNum $operands[$randOperand] $randSecondNum";
        $correctAnswer = strval(isCalc($randFirstNum, $operands[$randOperand], $randSecondNum));
        $arrQuestion = [$question, $correctAnswer];
        return $arrQuestion;
    };
    $mainQuestion = 'What is the result of the expression?';
    runGame($func, $mainQuestion);
}
