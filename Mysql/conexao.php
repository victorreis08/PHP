<?php

    //parametros para conexao
    $conn = new mysqli("localhost", "root", "", "bd_teste");
    
    //erros conexao
    if($conn->connect_error){
        echo "Erros " . $conn->connect_error;
    }
    
    
    
    
    ?>
