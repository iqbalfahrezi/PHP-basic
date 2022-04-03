<?php

$data = [
    'action' => 'create'
];

if (isset($data['action'])) {
    $action = $data['action'];
} else {
    $action = 'nothing';
}

// Null Coalescing Operator //
$action = $data['action'] ?? "nothing";

echo $action . PHP_EOL;