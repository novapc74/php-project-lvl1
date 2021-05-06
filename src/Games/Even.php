<?php

namespace Brain\Games\Even;

use function Brain\Games\Engine\runGame;

use const Brain\Games\Engine\NUMBER_ROUNDS;

function isEven(int $randomNumber): bool
{
    return $randomNumber % 2 === 0;
}

function runGameEven(): void
{
    $makeDataGame = function (): array {
        $randomNumber = rand(0, 99);
        $question = "$randomNumber";
        $answer = isEven($randomNumber) ? 'yes' : 'no';
        $dataGame = [$question, $answer];
        return $dataGame;
    };
    $task = 'Answer "yes" if the number is even, otherwise answer "no".';
    runGame($makeDataGame, $task);
}
