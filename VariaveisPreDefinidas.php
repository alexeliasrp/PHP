<?php

//VARIÁVEIS PRÉ DEFINIDAS

// parâmetro de url
$parametro = $_GET["a"];
	// forçar int : (int)$_GET["a"]; 
echo($parametro);

//VARIÁVEIS REMOTAS, DO USUÁRIO
echo("<br><br>");
$ip = $_SERVER["REMOTE_ADDR"];
echo($ip);

echo("<br><br>");
$estearquivo = $_SERVER["SCRIPT_NAME"];
echo($estearquivo);

?>