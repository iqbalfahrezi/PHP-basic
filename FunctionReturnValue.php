<?php

function sum(int $first, int $second): int
{
    return $first + $second;
}

$total = sum(10, 10);
var_dump($total);
echo "\n";

$total = sum(20, 20);
var_dump($total);

// Function Retur Value (2) //
function getFinalValue (int $value): string
{
    if ($value >=80) {
        return "A";
    }
    
    else if ($value >=70) {
        return "B";
    }

    else if ($value >=60) {
        return "C";
    }

    else if ($value >=50) {
        return "D";
    } else {
        return "E";
    }
}

$score = getFinalValue(80);
var_dump($score);

$score = getFinalValue(70);
var_dump($score);

$score = getFinalValue(60);
var_dump($score);