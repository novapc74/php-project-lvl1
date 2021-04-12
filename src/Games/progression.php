<?php

namespace Brain\Games\Progression;

use function Brain\Games\Engine\dataGenerator;
use function Brain\Games\Engine\task;

use const Brain\Games\Engine\NUMBER_ROUNDS;

function runGameProgression(): void
{
    $mainQuestion = 'What number is missing in the progression?';
    for ($i = 0; $i < NUMBER_ROUNDS; $i++) {
        $randNum = dataGenerator();
        $test = $randNum[3];
        $correctAnswer = strval($test[$randNum[0] - 1]);
        $test[$randNum[0] - 1] = '..' ;
        $strArr = '';
        foreach ($test as $value) {
            $strArr = $strArr . " " . $value;
        }
        $strArr = trim($strArr);
        $question = "Question: $strArr";
        $data[] = [$question, $correctAnswer];
    }
    task($mainQuestion, $data);
}
