<?php

namespace Brain\Games\Progression;

use function Brain\Games\Engine\runGame;

use const Brain\Games\Engine\NUMBER_ROUNDS;

function progression(int $randFirstNum, int $randSecondNum): array
{
    $randArray = [];
    $randArray[0] = $randSecondNum;
    for ($q = 0; $q < 9; $q++) {
        $randArray[] = $randFirstNum + $randArray[$q];
    }
    return $randArray;
}

function runGameProgression(): void
{
    $func = function (): array {
        $randFirstNum = rand(2, 10);
        $randSecondNum = rand(1, 10);
        $arrayQuestion = progression($randFirstNum, $randSecondNum);
        $correctAnswer = strval($arrayQuestion[$randFirstNum - 1]);
        $arrayQuestion[$randFirstNum - 1] = '..' ;
        $strQuestion = '';
        foreach ($arrayQuestion as $memberArray) {
            $strQuestion = $strQuestion . " " . $memberArray;
        }
        $arrQuestion = [trim($strQuestion), $correctAnswer];
        return $arrQuestion;
    };
    $mainQuestion = 'What number is missing in the progression?';
    runGame($func, $mainQuestion);
}
