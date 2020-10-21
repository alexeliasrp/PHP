<?php

require_once("config.php");

$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuario;");

//print_r($usuarios);

$headers = array();

foreach ($usuarios[0] as $usu => $value) {
	array_push($headers, ucfirst($usu)); // 1a maiúscula
}

$file = fopen("usuario.csv", "w+");

//colunas cabeçalho
fwrite($file, implode(",", $headers) . "\r\n");

//conteúdo do arquivo
foreach ($usuarios as $row) { // linhas
	$data = array();
	
	foreach ($row as $key => $value) { //colunas
		array_push($data, $value);
	}

	fwrite($file, implode(",",$data) . "\r\n");
}

fclose($file);

//print_r($headers);
//echo implode(",", $headers); // mostrar array separado por ","


?>