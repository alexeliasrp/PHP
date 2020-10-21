<?php

class Usuario{

	private $idusuario;
	private $login;
	private $senha;
	private $dtcadastro;

	public function getIdUsuario(){return $this->idusuario;}
	public function setIdUsuario($value){$this->idusuario = $value;}

	public function getLogin(){return $this->login;}
	public function setLogin($value){$this->login = $value;}

	public function getSenha(){return $this->senha;}
	public function setSenha($value){$this->senha = $value;}

	public function getDtCadastro(){return $this->dtcadastro;}
	public function setDtCadastro($value){$this->dtcadastro = $value;}

	public function loadById($id){

		$sql = new Sql();
		$result = $sql->select("SELECT * FROM tb_usuario WHERE idusuario = :ID", array(":ID"=>$id));

		$this->setDados($result[0]);
	}

	public static function getList(){
		$sql = new Sql();
		return $sql->select("SELECT * FROM tb_usuario ORDER BY idusuario;");
	}

	public static function search($login){
		$sql = new Sql();
		return $sql->select("SELECT * FROM tb_usuario WHERE login LIKE :LOGIN ORDER BY idusuario;", array(":LOGIN"=>"%".$login."%"));
	}

	public function login($login, $senha){
		$sql = new Sql();
		$result = $sql->select("SELECT * FROM tb_usuario WHERE login = :LOGIN AND senha = :SENHA;", 
			array(
				":LOGIN"=>$login, 
				":SENHA"=>$senha)
			);

		//if(isset$results[0])
		if(count($result) > 0){
			$this->setDados($result[0]);
		}
		else{
			throw new Exception("Login e/ou senha inválidos.");
		}
	}

	public function setDados($dados){
		$this->setIdUsuario($dados['idusuario']);
		$this->setLogin($dados['login']);
		$this->setSenha($dados['senha']);
		$this->setDtCadastro(new DateTime($dados['datacadastro']));
	}

	public function insert(){
		$sql = new Sql();
		$result = $sql->select("CALL sp_UsuarioInsert(:LOGIN, :SENHA)", array(
				":LOGIN"=>$this->getLogin(),
				":SENHA"=>$this->getSenha()
			)
		);

		if(count($result) > 0){
			$this->setDados($result[0]);
		}
	}

	public function update($login, $senha){
		$this->setLogin($login);
		$this->setSenha($senha);

		$sql = new Sql();
		$sql->query("UPDATE tb_usuario SET login = :LOGIN, senha = :SENHA WHERE idusuario = :ID;",
			array(
				":LOGIN"=>$this->getLogin(),
				":SENHA"=>$this->getSenha(),
				":ID"=>$this->getIdUsuario()
			));
	}

	public function delete(){
		$sql = new Sql();
		$sql->query(
				"DELETE FROM tb_usuario WHERE idusuario = :ID;",
				array(":ID"=>$this->getIdUsuario())
			);
		/*$datetime = new DateTime();
		$dados = array(
				"idusuario"=>"",
				"login"=>"",
				"senha"=>"",
				"datacadastro"=>$datetime
			);
echo "<br><br>";
		var_dump($dados);
echo "<br><br>";
		$this->setDados($dados);
*/
		$this->setIdUsuario(0);
		$this->setLogin("");
		$this->setSenha("");
		$this->setDtCadastro(new DateTime());
	}

	public function __construct($login = "", $senha = ""){
		$this->setLogin($login);
		$this->setSenha($senha);
	}

	public function __toString(){
		return json_encode(array(
			"idusuario"=>$this->getIdUsuario(),
			"login"=>$this->getLogin(),
			"senha"=>$this->getSenha(),
			"dtCadastro"=>$this->getDtCadastro()//->format("d/m/Y H:i:s")
		));
	}
}


?>