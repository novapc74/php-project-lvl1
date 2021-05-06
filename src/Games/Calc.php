<?php

namespace Brain\Games\Calc;

use function Brain\Games\Engine\runGame;

use const Brain\Games\Engine\NUMBER_ROUNDS;

function getResultCalc(int $firstNum, string $operations, int $secondNum): int
{
    $resultCalc = '';
    switch ($operations) {
        case '+':
            $resultCalc = ($firstNum + $secondNum);
            break;
        case '-':
            $resultCalc = ($firstNum - $secondNum);
            break;
        case '*':
            $resultCalc = ($firstNum * $secondNum);
            break;
    }
    return $resultCalc;
}

function runGameCalc(): void
{
    $makeDataGame = function (): array {
        $randFirstNum = rand(0, 10);
        $randSecondNum = rand(0, 10);
        $operations = ['+', '-', '*'];
        $randomOperation = array_rand($operations);
        $question = "$randFirstNum $operations[$randomOperation] $randSecondNum";
        $answer = strval(getResultCalc($randFirstNum, $operations[$randomOperation], $randSecondNum));
        $dataGame = [$question, $answer];
        return $dataGame;
    };
    $task = 'What is the result of the expression?';
    runGame($makeDataGame, $task);
}
