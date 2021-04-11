<?php

namespace Brain\Games\Even;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Engine\sayHello;
use function Brain\Games\Engine\dataGenerator;
use function Brain\Games\Engine\returnResult;

use const Brain\Games\Engine\NUMBER_ROUNDS;

function runGameEven(): void
{
    $nameUser = sayHello();

    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 0; $i < NUMBER_ROUNDS; $i++) {
        $randNum = dataGenerator();
        line('Question: %s', $randNum[0]);
        $result = $randNum[0] % 2;
        $result === 0 ? $correctAnswer = 'yes' : $correctAnswer = 'no';
        $answerUser = prompt('Your answer');
        returnResult($nameUser, $correctAnswer, $answerUser);
        if ($i === NUMBER_ROUNDS - 1) {
            line('Congratulations, %s!', $nameUser);
        }
    }
}
