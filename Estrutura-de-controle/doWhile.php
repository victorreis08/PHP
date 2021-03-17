<?php
    $total = 100;
    $desconto = 0.9;
    //executa pelo menos uma vez antes de fazer a condição
    do{
        $total *= $desconto;
        
        
    }while($total > 100);
    
    echo $total;
?>

