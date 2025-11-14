<?php

function greet($name) {
    return "Hello $name!";
}

function fib($num = 5) {
    if($num < 2) {
        return $num;
    }
    return fib($num - 1) + fib($num - 2);
}

echo fib(3);
echo fib();

function namedArgument($param, $param2) {
    return $param . $param2;
}

echo namedArgument(param: "test", param2: "test2");