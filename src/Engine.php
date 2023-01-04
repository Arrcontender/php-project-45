<?php

namespace BrainGames\Engine;

use function cli\line;
use function BrainGames\Cli\welcome;
use function BrainGames\Even\even;
use function BrainGames\Calc\calc;
use function BrainGames\Gcd\gcd;
use function BrainGames\Progression\progression;

function game($gameName)
{
    $name = welcome();

    switch ($gameName) {
        case 'brain-even':
            even() ? line("Congratulations, {$name}!") : line("Let's try again, {$name}!");
            break;
        case 'brain-calc':
            calc() ? line("Congratulations, {$name}!") : line("Let's try again, {$name}!");
            break;
        case 'brain-gcd':
            gcd() ? line("Congratulations, {$name}!") : line("Let's try again, {$name}!");
            break;
        case 'brain-progression':
            progression() ? line("Congratulations, {$name}!") : line("Let's try again, {$name}!");
            break;
    }
}
