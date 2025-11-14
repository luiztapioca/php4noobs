<?php 

$val = "cookie";

setcookie(name:"test cookie", value:$val, expires_or_options: time() + 3600);

?>