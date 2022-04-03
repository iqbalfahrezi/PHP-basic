<?php

function factorialLoop (int $value): int
{
    $total = 1;
    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }
    return $total;
}

var_dump(factorialLoop(7));
var_dump(1*2*3*4*5*6*7);
echo "\n";

// factorial recursive //
function factorialRecursive (int $value): int
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
    }
}

var_dump(factorialRecursive (7));

// error stackoverflow //
function loop(int $value)
{
    if ($value == 0) {
        echo "selesai" . PHP_EOL;
    } else {
        echo "loop-$value" .PHP_EOL;
        loop($value - 1);
    }
}

loop(3000000);