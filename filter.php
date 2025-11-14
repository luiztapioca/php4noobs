<?php

$email = "test@email.com";
$false_email = "aaaaaaaa";

if(filter_var($false_email, FILTER_VALIDATE_EMAIL)) {
    echo "email is correct" . PHP_EOL;
} else {
    echo "email is incorrect" . PHP_EOL;
}

?>