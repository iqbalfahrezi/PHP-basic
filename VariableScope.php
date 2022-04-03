<?php

$name = "Iqbal";

function sayName()
{
    global $name;
    echo $name;
}

sayName();