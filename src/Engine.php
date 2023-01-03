<?php

namespace BrainGames\Engine;

use function cli\line;
use function BrainGames\Cli\welcome;
use function BrainGames\Even\even;

function game($gameName)
{
    $name = welcome();

    switch ($gameName) {
        case 'brain-even':
            even() ? line("Congratulations, {$name}!") : line("Let's try again, {$name}!");
            break;
    }
}