<?php

$name = "Muhammad Iqbal Fahrezi";

echo "Nama : " . $name . PHP_EOL;
echo "Nilai : " . 100 . "\n";

$valueString = (string)100;
var_dump($valueString);
echo "\n";

$valueInt = (int)"100";
var_dump($valueInt);
echo "\n";

$valueFloat = (float)"100.11";
var_dump($valueFloat);
echo "\n";

$name = "iqbal";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
echo $name[4] . PHP_EOL;
echo "\n";

$name = "Iqbal";
$char = "Ganteng";
echo "Hello $name $char, Selamat Belajar". PHP_EOL;
echo "\n";

$var = "Iqbal";
echo "This is {$var}s" . PHP_EOL;