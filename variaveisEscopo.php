<?php

$nome = "1-Alex";

function f_Nome(){
	global $nome; // ler var $nome em escopo global
	echo("f1 ");		
	echo($nome);
};

function f_Nome2(){
	echo("f2 ");		
	echo($nome);		
};

f_Nome();
echo("<br><br>");
f_Nome2();
?>