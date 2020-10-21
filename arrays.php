<?php

$frutas = array("morango", "manga", "abacaxi", "melancia", "maçã");

print_r($frutas);

echo "<br><br>";

//formato antigo
$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Ônix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Ka";
$carros[1][2] = "Fiesta";
$carros[1][3] = "Fusion";

echo $carros[0][3];
echo "<br>";
echo end($carros[1]);

// funções array
echo "<br><br>";
$pessoas = array();
array_push(
		$pessoas, 
		array(
				'nome'=>'João', 'idade'=>20, 
				'nome'=>'Glaucio', 'idade'=>25
			)
	);
array_push(
		$pessoas, 
		array(
				'nome'=>'Glaucio', 'idade'=>25
			)
	);
print_r($pessoas);

?>