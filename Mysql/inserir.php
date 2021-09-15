<?php
require_once 'conexao.php';

//inserir
    $stmt = $conn->prepare("INSERT INTO tb_usuarios (login, senha) VALUES(?, ?)");
    
    //tipos de valores
    $stmt->bind_param("ss", $login, $pass);
    
    $login = "victor";
    $pass = "12345";
    
    $stmt->execute();
?>
