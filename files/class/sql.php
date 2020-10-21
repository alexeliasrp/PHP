<?php

class Sql extends PDO{

	private $conn;

	public function __construct(){
		$dbname = "dbphp7";
		$host = "localhost";
		$user="root";
		$pwd="123456";

		$this->conn = new PDO("mysql:dbname=$dbname;host=$host", $user, $pwd);

		//$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "123456");
	}

	private function setParams($statement, $parameters = array()){
		foreach($parameters as $key => $value){
			//$statement->bindParam($key, $value);
			$this->setParam($statement, $key, $value);
			/*var_dump($statement);
			echo "<br>";
			var_dump($key);
			echo "<br>";
			var_dump($value);*/
		}		
	}

	private function setParam($statement, $key, $value){
		$statement->bindParam($key, $value);
	}


	public function query($rawQuery, $params = array()){
		
		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;
	}

	public function select($rawQuery, $params = array()):array{
/*
echo "<br><br><br>";
var_dump($rawQuery);
echo "  -  ";
var_dump($params);
echo "<br><br><br>";
*/
		$stmt = $this->query($rawQuery, $params);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

}

?>