<?php

    namespace Brain\Games\Even;

    use function cli\line;
    use function cli\prompt;
    use function Brain\Games\Engine\sayHello;
    use function Brain\Games\Engine\dataGenerator;
    use function Brain\Games\Engine\returnResult;

    use const Brain\Games\Engine\NUMBER_ROUNDS;

function runGameEven()
{
    $nameUser = sayHello();

    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 0; $i < NUMBER_ROUNDS; $i++) {
        $randNum = dataGenerator()[0];
        line('Question: %s', $randNum);
        $result = $randNum % 2;
        $result === 0 ? $correctAnswer = 'yes' : $correctAnswer = 'no';
        $answerUser = prompt('Your answer');
        if (($result != 0 && $answerUser === 'no') || ($result === 0 && $answerUser === 'yes')) {
            returnResult([1]);
        } else {
            return(returnResult([$nameUser, $answerUser, $correctAnswer]));
        }
    }
    return(returnResult([$nameUser, '', '', '']));
}
