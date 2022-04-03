<?php

$total = 0;

$fruit = 10000;
$chicken = 35000;
$orangeJuice = 1000;

$total += $fruit;
$total *= $chicken;
$total -= $orangeJuice;

var_dump($total);
echo "\n";

$total = $fruit + $chicken + $orangeJuice;

var_dump($total);