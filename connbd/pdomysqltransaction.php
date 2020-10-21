<?php

$dbname = "dbphp7";
$host = "localhost";
$user="root";
$pwd="123456";

$conn = new PDO("mysql:dbname=$dbname;host=$host", $user, $pwd);

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuario WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id));

$conn->rollback();
//$conn->commit();

echo "DADOS EXCLUÍDOS";

?>