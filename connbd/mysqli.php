<?php

$server = "localhost";
$login = "root";
$senha = "123456";
$banco = "dbphp7";

$conn = new MySQLi($server, $login, $senha,$banco);


if($conn->connect_error){
	echo "Erro : " . $conn->connect_error;
}


//INSERT, com prepare
$cmd = "insert into tb_usuario(login, senha) values(?,?);";
$stmt = $conn->prepare($cmd);
$stmt->bind_param("ss", $login, $senha);
	//s = string; i = inteiro; d = double; blob = b
$stmt->execute();

//SELECT, sem prepare
$rs = $conn->query("SELECT * FROM tb_usuario");
$data = array();

//while ($row = $rs->fetch_array(MYSQLI_ASSOC)) { //MYSQLI_ASSOC oculta o índice do array
while ($row = $rs->fetch_assoc()) { //MYSQLI_ASSOC oculta o 
	array_push($data, $row);
	//var_dump($row);
};
echo json_encode($data);

?>