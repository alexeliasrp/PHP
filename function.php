<?php

function argumentosdinamicos(){
	$args = func_get_args();
	return 	$args;
	
}

var_dump(argumentosdinamicos("prm1","prm2","prm3"));

// para passagem por referência, usar &$prm no parâmetro da função
//function valor(&$a){...}

?>