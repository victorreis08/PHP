<?php

//escopo global

$nome = "Victor";

function nome() {//escopo
    
    global $nome;
    echo $nome;
}

function nome2(){//escopo
    global $nome;
    echo $nome;
}


nome();

nome2();
?>
