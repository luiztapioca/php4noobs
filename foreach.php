<?php

$arr = [
    "john" => "doe",
    "jane" => "doe"
];

foreach ($arr as $key => $value) {
    echo $key . "=>" . $value . PHP_EOL;
}