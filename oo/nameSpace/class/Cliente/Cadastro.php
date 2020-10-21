<?php

namespace Cliente;

//Cadastro do cliente
class Cadastro extends \Cadastro{

	public function registrarVenda(){
		echo "Venda registrada." . $this->getNome();
	}
}

?>