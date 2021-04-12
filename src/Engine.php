<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

const NUMBER_ROUNDS = 3;

function sayHello(): string //приветствие, имя пользователя.
{
    line('Welcome to the Brain Games!');
    $nameUser = prompt('May I have your name?');
    line("Hello, %s!", $nameUser);
    return ($nameUser);
}

function dataGenerator(): array //генератор случайных данных
{
    $randFirstNum = rand(2, 10);
    $randSecondNum = rand(1, 10);
    $randOperand = rand(1, 3); // генератор операндов
    $randArray = [];
    $randArray[0] = $randSecondNum; // задаем начало массива
    //ниже ограничил длинну массива для простоты расчета правильных ответов
    for ($i = 0; $i < 9; $i++) {
        $randArray[] = $randFirstNum + $randArray[$i];
    }
    $arrData = [$randFirstNum, $randSecondNum, $randOperand, $randArray];
    return($arrData);
}

function task($mainQuestion, array $data): void
{
    $nameUser = sayHello();
    line($mainQuestion);
    foreach ($data as $value) {
        line($value[0]);
        $answerUser = prompt('Your answer');
        if ($value[1] === $answerUser) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answerUser, $value[1]);
            line("Let's try again, %s!", $nameUser);
            exit;
        }
    }
    line('Congratulations, %s!', $nameUser);
}
