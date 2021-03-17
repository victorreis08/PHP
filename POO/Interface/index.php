<?php
interface Veiculo{
    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($numeroMarcha);
}

class Civic implements Veiculo{
    public function acelerar($velocidade){
        echo "O veiculo acelerou até ".$velocidade;
    }
    
    public function freiar($velocidade){
        echo "O veiculo freiou até ".$velocidade;
    }
    
    public function trocarMarcha($numeroMarcha) {
        echo "O veiculo engatou a marcha ".$numeroMarcha;
    }
}

$carro = new Civic();

$carro->trocarMarcha(1);
?>
