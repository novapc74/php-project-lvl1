<?php

namespace Brain\Games\Even;

function even(): array
{
    $mainQuestion = 'Answer "yes" if the number is even, otherwise answer "no".';
    $randFirstNum = rand(0, 99);
    $question = "Question: {$randFirstNum}";
    $randFirstNum % 2 === 0 ? $correctAnswer = "yes" : $correctAnswer = "no";
    $data = [$mainQuestion, $question, $correctAnswer];
    return($data);
}
