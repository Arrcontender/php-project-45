<?php

namespace BrainGames\Progression;

use function cli\line;
use function cli\prompt;

function progression()
{
    line('What number is missing in the progression?');
    $count = 0;
    while ($count < 3) {
        $startNum = rand(0, 100);
        $progressionSize = rand(5, 10);
        $progressionStep = rand(1, 10);
        $hide = rand(0, $progressionSize - 1);
        $progression = [];
        $counter = $progressionSize;
        while ($counter > 0) {
            $progression[] = $startNum;
            $startNum = $startNum + $progressionStep;
            $counter--;
        }
        $correctAnswer = (string)$progression[$hide];
        $replacement = array($hide => '..');
        $progression = array_replace($progression, $replacement);
        $result = implode(" ", $progression);
        line("Question: {$result}");
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
