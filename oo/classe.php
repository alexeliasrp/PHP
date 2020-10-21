<?php

class Pessoa{
	public $nome;

	public function falar(){
		return "Meu nome é ".$this->nome;
	}
}

$eu = new Pessoa();
$eu->nome = "Alex";
echo $eu->falar();

?>