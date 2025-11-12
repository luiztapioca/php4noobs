<?php

$employed = true;
$homeOffice = false;

var_dump($employed || $homeOffice);

$employed = false;

var_dump($employed ^ $homeOffice);