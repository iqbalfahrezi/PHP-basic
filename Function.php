<?php

function sayHello()
{
    echo "Hello Function" . PHP_EOL;
}

sayHello();
sayHello();
echo "\n";

// dengan if statement //

$buat = true;

if ($buat) {
    function sayHai()
    {
        echo "Hai Function" . PHP_EOL;
    }
}

sayHai();
sayHai();