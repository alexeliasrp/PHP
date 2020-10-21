<?php

$file = fopen("teste.txt", "w+");
fwrite($file, "hoje : " . date("Y-m-d H:i:s") . "\r\n");
fclose($file);
//\R
//\N
//\L
//\T

//unlink($file);
unlink("teste.txt");

echo "arquivo criado e apagado";

?>