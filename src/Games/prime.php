<?php

    namespace Brain\Games\Prime;

    use function cli\line;
    use function cli\prompt;
    use function Brain\Games\Engine\sayHello;
    use function Brain\Games\Engine\dataGenerator;
    use function Brain\Games\Engine\returnResult;

    use const Brain\Games\Engine\NUMBER_ROUNDS;

function runGamePrime(): void
{
    $nameUser = sayHello();

    line('Answer "yes" if given number is prime. Otherwise answer "no"');

    for ($i = 0; $i < NUMBER_ROUNDS; $i++) {
        $randNum = dataGenerator();
        line('Question: %s', $randNum[0]);
        $test = $randNum[0];
        $q = 0;
        for ($k = 1; $k < $test + 1; $k++) {
            if ($test % $k === 0) {
                $q++;
            }
        }
        $q > 2 ? $correctAnswer = 'no' : $correctAnswer = 'yes';
        $answerUser = prompt('Your answer');
        returnResult($nameUser, $correctAnswer, $answerUser);
        if ($i === NUMBER_ROUNDS - 1) {
            line('Congratulations, %s!', $nameUser);
        }
    }
}
