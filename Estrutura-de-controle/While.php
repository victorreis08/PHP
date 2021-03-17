<?php
$condicao = true;


while ($condicao){
    
    $numero = rand(1,10);
    
    if($numero === 3){
        $condicao = false;
    }
    
    echo $numero ." ";
    
}

?>

