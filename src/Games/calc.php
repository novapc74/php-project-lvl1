<?php

    namespace Brain\Games\Calc;

    use function cli\line;
    use function cli\prompt;
    use function Brain\Games\Engine\sayHello;
    use function Brain\Games\Engine\dataGenerator;
    use function Brain\Games\Engine\returnResult;

    use const Brain\Games\Engine\NUMBER_ROUNDS;

function runGameCalc()
{
    $nameUser = sayHello();

    line('What is the result of the expression?');
    for ($i = 0; $i < NUMBER_ROUNDS; $i++) {
        $randNum = dataGenerator();
        if ($randNum[2] === 1) {
            $operand = '+';
        } elseif ($randNum[2] === 2) {
            $operand = '-';
        } else {
            $operand = '*';
        }
        line('Question: %s %s %s', $randNum[0], $operand, $randNum[1]);
        if ($operand ==='+') {
            $result = $randNum[0] + $randNum[1];
        } elseif ($operand === '-') {
            $result = $randNum[0] - $randNum[1];
        } else {
            $result = $randNum[0] * $randNum[1];
        }
        $correctAnswer = $result;
        $answerUser = prompt('Your answer');
        if (strval($result) === $answerUser) {
            returnResult([1]);
        } else {
            return(returnResult([$nameUser, $answerUser, $correctAnswer]));
        }
    }
    return(returnResult([$nameUser, '', '', '']));
}
