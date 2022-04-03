<?php

$name = "Iqbal";
$name = null;

$age = 22;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "Is Name Null?? : ";
echo is_null($name);
echo "\n";

echo "Is Age Null?? : ";
echo is_null($age);
echo "\n";

echo "Is Name Null?? : ";
var_dump (is_null($name));
echo "\n";

echo "Is Age Null?? : ";
var_dump (is_null($age));
echo "\n";

$contoh = "Iqbal";
unset($contoh);

$contoh = "Fahrezi";
$contoh = null;

var_dump (isset($contoh));