<?php

require_once("config.php");

use Cliente\Cadastro;


$cad = new Cadastro();

$cad->setNome("Alex");
$cad->setEmail("alex@alex");
$cad->setSenha("123456");

$cad->registrarVenda();
echo $cad;

?>