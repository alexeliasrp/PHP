<?php

$dbname = "dbphp7";
$host = "localhost\sqlexpress";
$user="sa";
$pwd="";

// connectionPooling=0 precisa ser usado no php, mas = 0, manter transação aberta entre php e sql server, usa multithread
$conn = new PDO("sqlsrv:database=$dbname;server=$host;connectionPooling=0", $user, $pwd);

$stmt = $conn->prepare("SELECT * FROM tb_usuario;");
$stmt->execute();
$rs = $stmt->fetchAll(PDO::FETCH_ASSOC); // somente dados, sem index

//var_dump($rs);

foreach ($rs as $row){
	foreach ($row as $key => $value) {
		echo "<strong>$key<strong> : $value<br>";
	}
	echo "<br>------------------------------------------<br>";
}

?>