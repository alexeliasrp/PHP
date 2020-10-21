<?php

session_start();

echo $_SESSION["nome"];
echo "<br><br>";
echo session_id();

// gerar nova sessao
session_regenerate_id();
echo "<br><br>";
echo session_id();
echo "<br><br>";
var_dump($_SESSION);


?>