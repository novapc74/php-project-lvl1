<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

const NUMBER_ROUNDS = 3;

function runGame(callable $gameData, string $task): void
{
    line('Welcome to the Brain Games!');
    $nameUser = prompt('May I have your name?');
    line("Hello, %s!", $nameUser);
    line($task);
    for ($i = 0; $i < NUMBER_ROUNDS; $i++) {
        [$question, $answer] = $gameData();
            line("Question: $question");
            $answerUser = prompt('Your answer');
        if ($answer === $answerUser) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answerUser, $answer);
            line("Let's try again, %s!", $nameUser);
            exit;
        }
    }
    line('Congratulations, %s!', $nameUser);
}
