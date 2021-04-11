<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

const NUMBER_ROUNDS = 3;

function sayHello(): string
{
    line('Welcome to the Brain Games!');
    $nameUser = prompt('May I have your name?');
    line("Hello, %s!", $nameUser);
    return ($nameUser);
}

function dataGenerator(): array
{
    $randFirstNum = rand(2, 10);
    $randSecondNum = rand(1, 10);
    $randOperand = rand(1, 3); //   <<<--- заложено для calc.php, генерировать операнды
    $randArray = [];
    $randArray[0] = $randSecondNum;
    for ($i = 0; $i < 9; $i++) {
        $randArray[] = $randFirstNum + $randArray[$i];
    }
    $arrData = [$randFirstNum, $randSecondNum, $randOperand, $randArray];
    return($arrData);
}

function returnResult(string $nameUser, string $correctAnswer, string $answerUser): void
{
    if ($correctAnswer != $answerUser) {
        line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answerUser, $correctAnswer);
        line("Let's try again, %s!", $nameUser);
            exit;
    } elseif ($correctAnswer === $answerUser) {
        line('Correct!');
    }
}
