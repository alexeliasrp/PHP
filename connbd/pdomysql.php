<?php

$dbname = "dbphp7";
$host = "localhost";
$user="root";
$pwd="123456";

$conn = new PDO("mysql:dbname=$dbname;host=$host", $user, $pwd);

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