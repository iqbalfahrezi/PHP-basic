<?php

$gender = "WANITA";

$hi = null;

if ($gender == "PRIA") {
    $hi = "Hi bro";
} else {
    $hi = "Hi nona";
}

echo $hi . PHP_EOL;

// Termary Operator //
$gender = "PRIA";
$hi = $gender == "PRIA" ? "Hi bro" : "Hi nona";
echo $hi . PHP_EOL;