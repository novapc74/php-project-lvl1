<?php

namespace Brain\Games\Calc;

use function Brain\Games\Engine\runGame;

use const Brain\Games\Engine\NUMBER_ROUNDS;

function isCalc(int $firstNum, string $operand, int $secondNum): int
{
    switch ($operand) {
        case '+':
            return ($firstNum + $secondNum);
        case '-':
            return ($firstNum - $secondNum);
        case '*':
            return ($firstNum * $secondNum);
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
