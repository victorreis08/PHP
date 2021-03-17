<?php

  echo "<h1>Exemplo 1</h1>";
    echo date("D/M/Y H:i:s", 1614821796);
    
    echo "<br/>";
    
    echo time();
    
    echo "<h1>Exemplo 2 </h1>";
    
    $ts = strtotime("2001-09-11");
    
    echo date("l, d/m/Y", $ts);
?>

