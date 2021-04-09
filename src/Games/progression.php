<?php

    namespace Brain\Games\Progression;

    use function cli\line;
    use function cli\prompt;
    use function Brain\Games\Engine\sayHello;
    use function Brain\Games\Engine\dataGenerator;
    use function Brain\Games\Engine\returnResult;

    use const Brain\Games\Engine\NUMBER_ROUNDS;

function runGameProgression()
{
    $nameUser = sayHello();

    line('What number is missing in the progression?');

    for ($i = 0; $i < NUMBER_ROUNDS; $i++) {
        $randNum = dataGenerator();
        $test = $randNum[3];
        $correctAnswer = strval($test[$randNum[0]]);
        $test[$randNum[0]] = '..' ;
        $strArr = '';
        foreach ($test as $value) {
            $strArr = $strArr . " ". $value;
        }
        line('Question: %s', $strArr);
        $answerUser = prompt('Your answer');
        if ($correctAnswer === $answerUser) {
            returnResult([1]);
        } else {
            return(returnResult([$nameUser, $answerUser, $correctAnswer]));
        }
    }
    return(returnResult([$nameUser, '', '', '']));
}
