<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Name: " . $_POST['postname'] . PHP_EOL;

    echo "IP is: " . $_SERVER['SERVER_NAME'] . PHP_EOL;
}