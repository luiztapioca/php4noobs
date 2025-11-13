<?php

$status = 400;

$msg = match ($status) {
    200,300 => 'OK',
    400 => 'Error',
    default => 'Unknown'
};

echo $msg;