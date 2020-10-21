<?php

$nome = "alex elias";
echo strtoupper($nome);
echo "<br>";
echo strtolower($nome);
echo "<br>";
echo ucwords($nome); // muda 1a de cada palavra
echo "<br>";
echo ucfirst($nome); // muda 1a da string
echo "<br>";


$nome = "Alex Elias";
echo str_replace("Alex", "Nome", $nome);
echo "<br>";


$frase = "repetição é mãe da retenção";
$q = strpos($frase, "mãe");
var_dump($q);
echo "<br>";

$primtexto = substr($frase, 0, $q);
echo $primtexto;
echo "<br>";
$segtexto = substr($frase, $q+3);
echo $segtexto;
?>