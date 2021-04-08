<?php

    namespace Brain\Games\Engine;

    use function cli\line;
    use function cli\prompt;

function sayHello()
{
    line('Welcome to the Brain Games!');
    $nameUser = prompt('May I have your name?');
    line("Hello, %s!", $nameUser);
    return ($nameUser);
}