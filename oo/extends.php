<?php

class Pessoa{

	public $nome = "Rasmus Lerdof";
	protected $idade = 48;
	private $senha = "123456";

	public function verDados(){
		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}
}

class Programador extends Pessoa{

	public function verDados(){
		echo get_class($this);
		echo "<br>";
		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		//echo $this->senha . "<br>";
		// Não herda propriedades e métodos privados
	}
}


$obj = new Programador();

//echo $obj->nome;
//echo $obj->idade;
//echo $obj->senha;

$obj->verDados();

?>