<?php

class Documento{

	private $num;

	public function getNumero(){
		return $this->num;
	}

	public function setNumero($n){
		$this->num = $n;
	}
}

class CPF extends Documento{
	public function validar():bool{
		$numCPF = $this->getNumero();

		//Cole aqui a validação de cpf
		echo "validando...<br>";
		return true;
	}
}

$doc = new CPF();
$doc->setNumero("2222");
$doc->validar();
var_dump($doc->validar());
echo "<br>";
echo $doc->getNumero();
?>