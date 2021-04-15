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

function runGame($arrQwest, $mainQuestion): void
{
    $nameUser = sayHello();
    line($mainQuestion);
    foreach ($arrQwest as $value) {
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
