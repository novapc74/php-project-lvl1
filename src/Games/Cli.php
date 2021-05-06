<?php

namespace Brain\Games\Cli;

use function cli\line;
use function cli\prompt;

function runBrainGames(): void
{
    line('Welcome to the Brain Games!');
    $nameUser = prompt('May I have your name?');
    line("Hello, %s!", $nameUser);
}
