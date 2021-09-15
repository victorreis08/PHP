<?php
$conn = new PDO("mysql:dbname=bd_teste;host=localhost", "root", "");
  
  $stmt = $conn->prepare("INSERT INTO tb_usuarios (login, senha) VALUES(:LOGIN, :PASSWORD)");
  
  $login = "jose";
  $password = "123";
  
  $stmt->bindParam(":LOGIN", $login);
  $stmt->bindParam(":PASSWORD", $password);
  
  
  $stmt->execute();
  
  echo "Inserido";

  
  
?>




