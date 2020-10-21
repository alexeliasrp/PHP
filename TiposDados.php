<?php

echo("TIPOS DE DADOS<BR>");

//BÁSICOS
$nome = "Alex Elias";
$site = "www.meusite.com.br";
$ano = 1979;
$salario = 7000.50;
$bloqueado = false;

//ARRAY E OBJETO
echo("<br>");
echo("<br>");
$frutas = array("abacaxi", "laranja", "manga","maçã", "banana");
echo($frutas[3]);
echo("<br>");
$nascimento = new DateTime();
var_dump($nascimento);

//ESPECIAIS
echo("<br>");
echo("<br>");
$arquivo = fopen("variaveis/variaveis.php", "r");
var_dump($arquivo);

//NULO
echo("<br>");
echo("<br>");
$NULO = null;
echo("NULL : " . $NULO);
?>