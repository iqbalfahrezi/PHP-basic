<?php

$values = array (1,2,3,4);
var_dump($values);
echo "\n";

$names = ["Muhammad", "Iqbal", "Fahrezi"];
var_dump($names);
echo "\n";

var_dump ($names[2]);
echo "\n";

$names[0] = "Wildan";
var_dump($names);
echo "\n";

unset ($names[1]);
var_dump($names);
echo "\n";

$names[] = "Joko";
var_dump ($names);
echo "\n";

var_dump(count($names));
echo "\n";

$iqbal = array(
    "id" => "ibal",
    "name" => "Muhammad Iqbal Fahrezi",
    "gender" => "Male",
    "age" => 22,
    "address" => [
        "city" => "Pekanbaru",
        "country" => "Indonesia"
    ]
);

var_dump($iqbal);
echo "\n";

$wildan = [
    "id" => "idan",
    "name" => "Muhammad Wildan Pahlevi",
    "gender" => "Male",
    "age" => 20
];
var_dump($wildan);
echo "\n";