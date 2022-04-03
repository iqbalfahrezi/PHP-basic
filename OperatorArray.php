<?php

$first = [
    "first_name" => "Iqbal"
];

$last = [
    "last_name" => "Fahrezi"
];

$full = $first + $last;
var_dump($full);
echo "\n";

$a = [
    "first_name" => "Iqbal",
    "last_name" => "Fahrezi"
];

$b = [
    "last_name" => "Fahrezi",
    "first_name" => "Iqbal"
];

var_dump($a == $b);
var_dump($a === $b);