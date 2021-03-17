<?php

class Funcionario {

    private $nome;
    private $cargo;
    private $senha;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function cadastrar($nome, $cargo, $senha) {
        $cadastro = $this->setNome($nome);
        $cadastro = $this->setCargo($cargo);
        $cadastro = $this->setSenha($senha);
        
    }
    
}








?>

