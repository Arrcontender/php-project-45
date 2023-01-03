<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

function even()
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $count = 0;
    while ($count < 3) {
        $randomNum = rand(0, 100);
        $correctAnswer = ($randomNum % 2 === 0) ? 'yes' : 'no';
        line("Question: {$randomNum}");
        $yourAnswer = prompt('Answer');
        if ($correctAnswer === $yourAnswer) {
            line("Correct!");
            $count++;
        } else {
            line("'{$yourAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            return false;
        }
    }
    return true;
}
