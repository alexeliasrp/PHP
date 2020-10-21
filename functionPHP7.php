<?php

//o prm é um array de inteiros
//declaração de tipos escalares
// : [tipo] determina o tipo do retorno da function
function soma(float ...$valores):string{
	return "A soma é : " . array_sum($valores);
};

echo soma(2,2);
echo "<br>";
echo soma(2,2.5);
echo "<br>";

?>