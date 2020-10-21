<?php


$file = fopen("log.txt", "a+");
fwrite($file, "hoje : " . date("Y-m-d H:i:s") . "\r\n");
fclose($file);
//\R
//\L
//\T

echo "arquivo criado";

?>