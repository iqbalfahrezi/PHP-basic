<?php

$names = ["Muhammad", "Iqbal", "Fahrezi"];

for ($i = 0; $i < count($names); $i++) {
    echo "Data ke-$i = $names[$i]" .PHP_EOL;
}
echo "\n";

foreach ($names as $name) {
    echo "Data $name" .PHP_EOL;
}
echo "\n";

$person = [
    "first_name" => "Muhammad",
    "middle_name" => "Iqbal",
    "last_name" => "Fahrezi",
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}