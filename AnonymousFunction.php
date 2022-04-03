<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Iqbal");
$sayHello("Fahrezi");
echo "\n";

//  anonymous function as argumnet //
function sayGoodBye (string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodBye("Iqbal", function (string $name) {
    return strtoupper ($name);
});
echo "\n";

// accessesing outside variable //
$firstName = "Iqbal";
$lastName = "Fahrezi";

$sayHelloIqbal = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloIqbal();