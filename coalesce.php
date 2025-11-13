<?php


$user = $_GET['user'] ?? "John Doe";

echo $user . PHP_EOL;

$user = $_GET['user'] ?? $_POST['user'] ?? 'John Doe';

echo $user . PHP_EOL;

define("foo", "bar");

const FOO = "bar";

echo foo;

echo FOO;