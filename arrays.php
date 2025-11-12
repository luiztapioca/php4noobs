<?php

$user = [
    "name" => "John Doe",
    "age" => 3000
];
/*
$user2 = [
    "name" => "Jane Doe",
    "age" => 3001
];
*/
$user2 = [
    "name" => "John Doe",
    "age" => '3000'
];

$house = [
    "location" => "Mars",
    "price" => 1231213.23
];

$union = $user + $house;

print_r($union);

var_dump($user == $user2);