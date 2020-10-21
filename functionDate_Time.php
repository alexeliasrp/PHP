<?php

echo date("d/m/y h:i:s");
echo date("d/m/y h:i:s", 1599763289); //com timestamp fixado

//obter timestamp
//qtd de segundos desde 1/1/70
echo "<br><br>";
echo time();

echo "<br><br>";
echo strtotime("2020-09-10");

echo "<br><br>";
echo strtotime(date("l, d/m/y h:i:s"));

echo "<br><br>";
echo strtotime("now");

echo "<br><br>";
$ts = strtotime("+1 week");
echo date("l, d/m/y", $ts);

echo "<br><br>";
echo strtotime("2020-09-10");
echo "<br>";
echo date("l, d/m/y H:m:s", strtotime("2020-09-10 15:00:59.9999"));

?>