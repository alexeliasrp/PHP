<?php

$dbname = "dbphp7";
$host = "localhost";
$user="root";
$pwd="123456";

$conn = new PDO("mysql:dbname=$dbname;host=$host", $user, $pwd);

$stmt = $conn->prepare("INSERT INTO tb_usuario(login, senha) VALUES(:LOGIN,:PASSWORD)");

$insLogin = "login1";
$insPwd = "12";
$stmt->bindParam(":LOGIN", $insLogin);
$stmt->bindParam(":PASSWORD", $insPwd);

$stmt->execute();

echo "DADOS INSERIDOS";

?>