<?php

class Carro{
	private $modelo;
	private $motor;
	private $ano;

	public function getModelo(){
		return $this->modelo;
	}
	
	public function setModelo($modelo){
		$this->modelo = $modelo;
	}
	
	public function getMotor():float{
		return $this->motor;
	}
	
	public function setMotor($motor){
		$this->motor = $motor;
	}
	
	public function getAno():int{
		return $this->ano;
	}

	public function setAno($ano){
		$this->ano = $ano;
	}

	public function exibir(){
		return array(
			"Modelo"=>$this->getModelo(),
			"Motor"=>$this->getMotor(),
			"Ano"=>$this->getAno()
		);
	}
}

$clio = new Carro();
$clio->setModelo("Clio");
$clio->setMotor("1.0");
$clio->setAno(2014);



var_dump($clio->getModelo());
echo "<br>";
var_dump($clio->getMotor());
echo "<br>";
var_dump($clio->getAno());

echo "<br><br>";

$mod = $clio->getModelo();
$mot = $clio->getMotor();
$ano = $clio->getAno();
$DescCarro = 
	"Modelo  $mod <br>
	Motor $mot <br>
	Ano  $ano <br>";
echo $DescCarro;

echo "<br><br>";

print_r($clio->exibir());

?>
