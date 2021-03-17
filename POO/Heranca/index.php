<?php
class Documento{
    private $numero;
    
    public function getNumero() {
        return $this->numero;
    }
    
    public function setNumero($n){
        $this->numero = $n;
    }
}

//herança
class Cpf extends Documento{
    public function validar():bool{
        
        $numeroCpf = $this->getNumero();
        
       
        
        return true;
        
    }
    
}

$doc = new Cpf();

$doc->setNumero("123.123.123-10");

$doc->validar();

echo $doc->getNumero();
echo "<br/>";
var_dump($doc->validar());
?>