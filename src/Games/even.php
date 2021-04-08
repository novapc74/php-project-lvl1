<?php

    namespace Brain\Games\Even;

    use function cli\line;
    use function cli\prompt;
    use function Brain\Games\Engine\sayHello;

function runGameEven()
{
    $nameUser = sayHello();

    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 0; $i < 3; $i++) {
        line('Question: %s', $randomNumber = rand(1, 99));
        $result = $randomNumber % 2;
        $result === 0 ? $correctAnswer = 'yes' : $correctAnswer = 'no';
        $answerUser = prompt('Your answer');
        if (($result != 0 && $answerUser === 'no') || ($result === 0 && $answerUser === 'yes')) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answerUser, $correctAnswer);
            return(line("Let's try again, %s!", $nameUser));
        }
    }
    return(line('Congratulations, %s!', $nameUser));
}
