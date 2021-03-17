<?php


//classe
class Pessoa{
    public $nome;// atributo
    
    //método função dentro de uma classe
    public function falar(){
        return "O meu nome é ".$this->nome;//instaciando atributo
    }
}

//craindo objeto
$glaucio = new Pessoa;

$glaucio->nome="Glaucio Daniel";

echo $glaucio->falar();

$victor =new Pessoa();

$victor->nome="Victor";

echo $victor->falar();