<?php

namespace Brain\Games\Progression;

use function Brain\Games\Engine\runGame;

use const Brain\Games\Engine\NUMBER_ROUNDS;

function getProgression(int $stepProgression, int $startProgression): array
{
    $randProgression = [];
    $randProgression[0] = $startProgression;
    $lengthProgression = 10;
    for ($q = 0; $q < $lengthProgression - 1; $q++) {
        $randProgression[] = $stepProgression + $randProgression[$q];
    }
    return $randProgression;
}

function runGameProgression(): void
{
    $makeDataGame = function (): array {
        $stepProgression = rand(2, 10);
        $startProgression = rand(1, 10);
        $question = getProgression($stepProgression, $startProgression);
        $answer = strval($question[$stepProgression - 1]);
        $question[$stepProgression - 1] = '..' ;
        $strQuestion = '';
        foreach ($question as $itemProgression) {
            $strQuestion = $strQuestion . " " . $itemProgression;
        }
        $dataGame = [trim($strQuestion), $answer];
        return $dataGame;
    };
    $task = 'What number is missing in the progression?';
    runGame($makeDataGame, $task);
}
