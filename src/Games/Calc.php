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

function generateQuestion(): array
{
    $arrQuestion = [];
    for ($i = 0; $i < NUMBER_ROUNDS; $i++) {
        $randFirstNum = rand(0, 10);
        $randSecondNum = rand(0, 10);
        $operands = ['+', '-', '*'];
        $randOperand = array_rand($operands);
        $question = "$randFirstNum $operands[$randOperand] $randSecondNum";
        $correctAnswer = strval(isCalc($randFirstNum, $operands[$randOperand], $randSecondNum));
        $arrQuestion[] = [$question, $correctAnswer];
    }
    return $arrQuestion;
}

function runGameCalc(): void
{
    $mainQuestion = 'What is the result of the expression?';
    $arrQuestion = generateQuestion();
    runGame($arrQuestion, $mainQuestion);
}
