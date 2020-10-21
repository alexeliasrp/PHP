<?php

interface Veiculo{

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);

}

class Civic implements Veiculo{
	public function acelerar($velocidade){
		echo "Acelerou até " . $velocidade . "km/h.<br>";
	}
	public function frenar($velocidade){
		echo "Frenou até " . $velocidade . "km/h.<br>";
	}
	public function trocarMarcha($marcha){
		echo "Mudou para marcha " . $marcha . "<br>";
	}
}

$carro = new Civic();
$carro->trocarMarcha(1);
$carro->acelerar(20);
$carro->trocarMarcha(2);
$carro->acelerar(40);
$carro->trocarMarcha(1);
$carro->acelerar(0);

?>