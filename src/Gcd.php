<?php

namespace BrainGames\Gcd;

use function cli\line;
use function cli\prompt;

function nod(int $n, int $m)
{
    while (true) {
        if ($n == $m) {
            return $m;
        }
        if ($n > $m) {
            $n -= $m;
        } else {
            $m -= $n;
        }
    }
}

function gcd()
{
    line('Find the greatest common divisor of given numbers.');
    $count = 0;
    while ($count < 3) {
        $firstNum = rand(1, 20);
        $secondNum = rand(1, 20);
        $numbers = $firstNum . " " . $secondNum;
        $correctAnswer = nod($firstNum, $secondNum);
        line("Question: {$numbers}");
        $yourAnswer = prompt('Answer');
        if ($correctAnswer == $yourAnswer) {
            line("Correct!");
            $count++;
        } else {
            line("'{$yourAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            return false;
        }
    }
    return true;
}
