<?php

namespace BrainGames\Prime;

use function cli\line;
use function cli\prompt;

function prime()
{
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    $count = 0;
    while ($count < 3) {
        $randomNum = rand(2, 100);
        $flag = false;
        for ($i = 2; $i < $randomNum; $i++) {
            if ($randomNum % $i === 0) {
                $flag = true;
            }
        }
        $correctAnswer = ($flag) ? 'no' : 'yes';
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
