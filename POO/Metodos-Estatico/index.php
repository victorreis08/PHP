<?php

Class Documento {

    private $numero;

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
       $resultado = Documento::validarCPF($numero);
       
       if($resultado == false){
           throw new Exception("CPF informado não é válido", 1);
       }
       
        $this->numero = $numero;
    }

    public static function validarCPF($cpf): bool {
        //validar cpf
        //validar cpf foi informado
        if (empty($cpf))
            return false;


        //elimina possivel mascara
        $cpf = preg_replace('[^0-9]', '', $cpf);
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

        //verifica se o numero de digitos infromados é igual a 11
        if (strlen($cpf) != 11) {
            return false;
        } else if ($cpf == '00000000000' ||
                $cpf == '11111111111' ||
                $cpf == '22222222222' ||
                $cpf == '33333333333' ||
                $cpf == '44444444444' ||
                $cpf == '55555555555' ||
                $cpf == '66666666666' ||
                $cpf == '77777777777' ||
                $cpf == '88888888888' ||
                $cpf == '99999999999') {
            return false;
        } else {
            for ($t = 9; $t < 11; $t++) {
                for ($d = 0, $e = 0; $e < $t; $e++) {
                    $d += $cpf{$e} * (($t + 1) - $e);
                }
            }
            $d = ((10 + $d) % 11) % 10;
            if ($cpf{$e} != $d) {
                return false;
            }
        }

        return true;
    }

}

$cpf = new Documento();

$cpf->setNumero("48764155870");

var_dump($cpf->getNumero());
?>

