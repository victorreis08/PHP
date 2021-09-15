<?php

$conn = new PDO("mysql:dbname=bd_teste;host=localhost", "root", "");

//SQL
//$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPool=0", "sa", "root");

$stmt = $conn->prepare("UPDATE tb_usuarios SET login = :LOGIN, senha = :PASSWORD WHERE codigo = :ID");

$login = "João";
$password = "qwerty";
$id = 3;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Alterado OK!";

?>

