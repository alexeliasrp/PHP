<?php

class Endereco{
	private $log;
	private $num;
	private $cid;

	
//padrão para método construtor e destruidor no php 7
	public function __construct($l, $n, $c){
		$this->log = $l;
		$this->num = $n;
		$this->cid = $c;
	}

	public function __destruct(){
		var_dump("<br>Destruir");
	}

	public function __toString(){
		return "<br>" . $this->log . ", " . $this->num . ", " . $this->cid;
	}
};

$meuEndereco = new Endereco("rua", "0", "RP");
var_dump($meuEndereco);
echo "<br>";
echo $meuEndereco;

//echo "<br>";
//unset($meuEndereco);
// set, unset -> define, mata var ou obj

?>