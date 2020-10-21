<?php

//include "include.php";
	// tenta executar msm qd não tem arquivo ou está com erro;
	// busca include no diretório padrão de includes do php
	// include dinâmico
require "include.php"; 
	// é obrigatório existir o arquivo e estar funcionando corretamente

require_once "include.php"; 
include_once "include.php"; 
	//considera somente uma chamada ao arquivo
	//útil em caso de include em cascata

$resultado = somar(1,1);
echo $resultado;

?>