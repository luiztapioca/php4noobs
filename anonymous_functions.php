<?php

function countdown($num) {
    echo $num;
    if ($num > 1) {
        return countdown($num - 1);
    }
    return $num;
};

echo countdown(10) . PHP_EOL;

function fibonacci($num) {
    if($num < 2) {
        return $num;
    }
    return fibonacci($num - 1) + fibonacci($num - 2);
}

echo fibonacci(10) . PHP_EOL;