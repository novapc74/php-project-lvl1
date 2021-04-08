<?php

    namespace Brain\Games\Engine;

    use function cli\line;
    use function cli\prompt;

    const NUMBER_ROUNDS = 3;

function sayHello()
{
    line('Welcome to the Brain Games!');
    $nameUser = prompt('May I have your name?');
    line("Hello, %s!", $nameUser);
    return ($nameUser);
}

function dataGenerator()
{
    $randFirstNum = rand(1, 99);
    $randSecondNum = rand(1, 99);
    $randOperand = rand(1, 3); //   <<<--- заложено для calc.php, генерировать операнды
    $arrData = [$randFirstNum, $randSecondNum, $randOperand];
    return($arrData);
}

function returnResult($arr)
{
    if ($arr[0] === 1) {
            return(line('Correct!'));
    } elseif (count($arr) === 3) {
            $firstAnswer = line("'%s' is wrong answer ;(. Correct answer was '%s'.", $arr[1], $arr[2]);
            $secondAnswer = line("Let's try again, %s!", $arr[0]);
            $answer = [$firstAnswer, $secondAnswer];
            return($answer);
    }
        return(line('Congratulations, %s!', $arr[0]));
}
