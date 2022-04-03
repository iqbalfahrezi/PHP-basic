<?php

goto a;
echo "Hello World" . PHP_EOL;

a:
echo "Hello A" . PHP_EOL;

b:
echo "Hello B" . PHP_EOL;

c:
echo "Hello C" . PHP_EOL;
echo "\n";

$counter = 1;

while (true) {
    echo "Hello Break : " . $counter . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        goto end;
    }
}

end:
echo "End Loop";