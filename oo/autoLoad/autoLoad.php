<?php

//require_once("DelRey.php");
//require_once("Automovel.php");

//arquivos na mesma pasta
/*function __autoload($nomeClasse){
	var_dump("$nomeClasse.php");
	require_once("$nomeClasse.php");
	
}
*/

function incluirClasses($nomeClasse){
	if(file_exists("$nomeClasse.php")){
		require_once("$nomeClasse.php");
	}
}

//standar php library
spl_autoload_register("incluirClasses");
//incluir pasta abs
spl_autoload_register(function($nomeClasse){
	if(file_exists("absclass" . DIRECTORY_SEPARATOR . "$nomeClasse.php") === true){
		require_once("absclass" . DIRECTORY_SEPARATOR . "$nomeClasse.php");
	}
}
);

$carro	= new DelRey();
echo $carro->acelerar(80);

?>