<?php

function sayHello($name, $lastname)
{
    echo "Hello $name $lastname" . PHP_EOL;
}

sayHello("Iqbal", "Fahrezi");
sayHello("Wildan", "Pahlevi");
echo "\n";

// default argument value //
function sayHai($name = "Anonymous", $lastname = "Anonymous")
{
    echo "Hai $name $lastname" . PHP_EOL;
}

sayHai("Iqbal", "Fahrezi");
sayHai("Wildan", "Pahlevi");
sayHai();
echo "\n";

// type declaration //
function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum("100", "100");
sum(100, 100);
sum(true, false);


// varaible-length argument list //
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(" + ", $values) . " = $total" . PHP_EOL;
}

sumAll(10, 20, 30, 40);
sumAll(...[10, 20, 30, 40]);
