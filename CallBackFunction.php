<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Iqbal", function ($name) {return strtoupper($name); });
sayHello("Iqbal", fn($name) => strtoupper($name));
sayHello("Iqbal", "strtoupper");
sayHello("Iqbal", "strtolower");