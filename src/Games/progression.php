<?php

namespace Brain\Games\Progression;

use const Brain\Games\Engine\NUMBER_ROUNDS;

function progression(): array
{
    $data = [];
    $mainQuestion = 'What number is missing in the progression?';
    $randFirstNum = rand(2, 10);
    $randSecondNum = rand(1, 10);
    $randArray = [];
    $randArray[0] = $randSecondNum; // задаем начало массива
    //ниже ограничил длинну массива для простоты расчета правильных ответов
    for ($q = 0; $q < 9; $q++) {
        $randArray[] = $randFirstNum + $randArray[$q];
    }
    $arrayQuestion = $randArray;
    $correctAnswer = strval($arrayQuestion[$randFirstNum - 1]);
    $arrayQuestion[$randFirstNum - 1] = '..' ;
    $strArr = '';
    foreach ($arrayQuestion as $value) {
        $strArr = $strArr . " " . $value;
    }
    $strArr = trim($strArr);
    $question = "Question: $strArr";
    $data = [$mainQuestion, $question, $correctAnswer];
    return($data);
}
