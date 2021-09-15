<?php

$conn = new PDO("mysql:dbname=bd_teste;host=localhost", "root", "");

//SQL
//$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPool=0", "sa", "root");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE codigo = :ID");

$id = 3;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "DELETADO!";

?>

