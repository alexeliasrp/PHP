<?php

interface Veiculo{

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo{
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


class DelRey extends Automovel{
	public function empurrar(){

	}

}

$carro = new Automovel();
$carro->acelerar(200);

?>