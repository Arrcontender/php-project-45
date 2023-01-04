<?php

namespace BrainGames\Calc;

use function cli\line;
use function cli\prompt;

function calc()
{
    line('What is the result of the expression?');
    $count = 0;
    while ($count < 3) {
        $firstNum = rand(0, 10);
        $secondNum = rand(0, 10);
        $operators = ['+', '-', '*'];
        $randOperator = $operators[array_rand($operators)];
        $randomExp = $firstNum . " {$randOperator} " . $secondNum;
        switch ($randOperator) {
            case '+':
                $correctAnswer = (int)$firstNum + (int)$secondNum;
                break;
            case '-':
                $correctAnswer = (int)$firstNum - (int)$secondNum;
                break;
            case '*':
                $correctAnswer = (int)$firstNum * (int)$secondNum;
                break;
        }
        line("Question: {$randomExp}");
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
