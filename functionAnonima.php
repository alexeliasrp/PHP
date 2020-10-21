<?php

//function dentro do parâmetro
function anonima($callback){
	// Processo lento
	// ...
	$callback();
}

anonima(
		function(){
			echo "Terminou";
		}
);

echo "<br><br>";

//function dentro da var
$fn = function($a){
	var_dump($a);
};

$fn("oi");

?>