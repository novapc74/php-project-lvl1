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
        $correctAnswer = strval($test[$randNum[0] - 1]);
        $test[$randNum[0] - 1] = '..' ;
        $strArr = '';
        foreach ($test as $value) {
            $strArr = $strArr . " " . $value;
        }
        $strArr = trim($strArr);
        line('Question: %s', $strArr);
        $answerUser = prompt('Your answer');
        returnResult($nameUser, $correctAnswer, $answerUser);
        if ($i === NUMBER_ROUNDS - 1) {
            line('Congratulations, %s!', $nameUser);
        }
    }
}
