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
    $randFirstNum = rand(1, 10);
    $randSecondNum = rand(1, 10);
    $randOperand = rand(1, 3); //   <<<--- заложено для calc.php, генерировать операнды
    $randArray = [];
    $randArray[0] = $randSecondNum;
    for ($i = 0; $i < 9; $i++) {
        $randArray[] = $randFirstNum + $randArray[$i];
    }
    $arrData = [$randFirstNum, $randSecondNum, $randOperand, $randArray];
    return($arrData);
}
// function returnResult($arr)
// {
//     if ($arr[0] === 1) {
//             return(line('Correct!'));
//     } elseif (count($arr) === 3) {
//             $firstAnswer = line("'%s' is wrong answer ;(. Correct answer was '%s'.", $arr[1], $arr[2]);
//             $secondAnswer = line("Let's try again, %s!", $arr[0]);
//             $answer = [$firstAnswer, $secondAnswer];
//             return($answer);
//     }
//         return(line('Congratulations, %s!', $arr[0]));
// }

function returnResult($nameUser, $correctAnswer, $answerUser)
{
    if ($correctAnswer != $answerUser) {
        line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answerUser, $correctAnswer);
        line("Let's try again, %s!", $nameUser);
            return(exit);
    } elseif ($correctAnswer === $answerUser) {
        return(line('Correct!'));
    }
}
