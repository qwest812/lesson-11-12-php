<?php
$value="test";
setcookie("MyTest", $value, time()+3600);  /* срок действия 1 час */
echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";