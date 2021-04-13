<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Even\even;
use function Brain\Games\Calc\calc;
use function Brain\Games\Gcd\gcd;
use function Brain\Games\Prime\prime;
use function Brain\Games\Progression\progression;

const NUMBER_ROUNDS = 3;

function sayHello()
{
    line('Welcome to the Brain Games!');
    $nameUser = prompt('May I have your name?');
    line("Hello, %s!", $nameUser);
    return ($nameUser);
}

function runGame($games)
{
    $nameUser = sayHello();
    switch ($games) {
        case 'calc':
            $data = calc();
            break;
        case 'even':
            $data = even();
            break;
        case 'gcd':
            $data = gcd();
            break;
        case 'prime':
            $data = prime();
            break;
        case 'progression':
            $data = progression();
            break;
    }
    $mainQuestion = $data[0];
    line($mainQuestion);
    for ($i = 0; $i < NUMBER_ROUNDS; $i++) {
        foreach ($data as $value) {
            switch ($games) {
                case 'calc':
                    $data = calc();
                    break;
                case 'even':
                    $data = even();
                    break;
                case 'gcd':
                    $data = gcd();
                    break;
                case 'prime':
                    $data = prime();
                    break;
                case 'progression':
                    $data = progression();
                    break;
            }
            line($data[1]);
            $answerUser = prompt('Your answer');
            if ($data[2] === $answerUser) {
                line('Correct!');
                break;
            } else {
                line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answerUser, $data[2]);
                line("Let's try again, %s!", $nameUser);
                exit;
            }
        }
    }
    line('Congratulations, %s!', $nameUser);
}
