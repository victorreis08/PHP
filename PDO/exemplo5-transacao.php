<?php

$conn = new PDO("mysql:dbname=bd_teste;host=localhost", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE codigo = ?");

$id = 4;

$stmt->execute(array($id));


//rollback voltar
//$conn->rollBack();


//commit deu certo
$conn->commit();

echo "DELETADO!";

?>

