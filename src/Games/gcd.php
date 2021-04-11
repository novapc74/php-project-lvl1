<?php

namespace Brain\Games\Gcd;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Engine\sayHello;
use function Brain\Games\Engine\dataGenerator;
use function Brain\Games\Engine\returnResult;

use const Brain\Games\Engine\NUMBER_ROUNDS;

function runGameGcd(): void
{
    $nameUser = sayHello();

    line('Find the greatest common divisor of given numbers.');

    for ($k = 0; $k < NUMBER_ROUNDS; $k++) {
        $randNum = dataGenerator();
        line('Question: %s %s', $randNum[0], $randNum[1]);
        $randNum[0] >= $randNum[1] ? $count = $randNum[1] : $count = $randNum[0];
        $correctAnswer = '';
        for ($i = 1; $i < $count + 1; $i++) {
            if (($randNum[0] % $i) === 0 && ($randNum[1] % $i === 0)) {
                $correctAnswer = strval($i);
            }
        }
        $answerUser = prompt('Your answer');
        returnResult($nameUser, $correctAnswer, $answerUser);
        if ($k === NUMBER_ROUNDS - 1) {
            line('Congratulations, %s!', $nameUser);
        }
    }
}
