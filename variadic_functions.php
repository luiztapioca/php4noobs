<?php

//function sum(...$numbers) {
//    return array_sum($numbers);
//}

$fn = fn(...$numbers) => array_sum($numbers);
echo $fn(10,20,30,40,50,60,70,80,90,100) . PHP_EOL;

