<?php

class Pessoa {

    public $nome = "João Vitor";
    protected $idade = 44;
    private $senha = "23423423";

    public function verDados() {
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha;
    }

}

class Programador extends Pessoa {

    public function verDados() {
        echo get_class($this) . "<br/>";
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        //echo $this->senha;
    }

}

$objeto = new Programador();

//echo $objeto->nome;

$objeto->verDados();
?>
