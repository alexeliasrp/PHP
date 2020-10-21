<?php

$dbname = "dbphp7";
$host = "localhost";
$user="root";
$pwd="123456";

$conn = new PDO("mysql:dbname=$dbname;host=$host", $user, $pwd);

$stmt = $conn->prepare("DELETE FROM tb_usuario WHERE idusuario = :ID");

$insLogin = "login1";
$insPwd = "34";
$id = 1;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "DADOS EXCLUÍDOS";

?>