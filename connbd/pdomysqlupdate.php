<?php

$dbname = "dbphp7";
$host = "localhost";
$user="root";
$pwd="123456";

$conn = new PDO("mysql:dbname=$dbname;host=$host", $user, $pwd);

$stmt = $conn->prepare("UPDATE tb_usuario SET login = :LOGIN, senha = :PASSWORD WHERE idusuario = :ID");

$insLogin = "login1";
$insPwd = "34";
$id = 1;

$stmt->bindParam(":LOGIN", $insLogin);
$stmt->bindParam(":PASSWORD", $insPwd);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "DADOS ALTERADOS";

?>