<?php

class Usuario {

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    public function getIdusuario() {

        return $this->idusuario;
    }

    public function setIdusuario($value) {

        $this->idusuario = $value;
    }

    public function getDeslogin() {

        return $this->deslogin;
    }

    public function setDeslogin($value) {

        $this->deslogin = $value;
    }

    public function getDessenha() {

        return $this->dessenha;
    }

    public function setDessenha($value) {

        $this->dessenha = $value;
    }

    public function getDtcadastro() {

        return $this->dtcadastro;
    }

    public function setDtcadastro($value) {

        $this->dtcadastro = $value;
    }

    //carregar registro a partir do ID
    public function loadById($id) {

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
            ":ID" => $id
        ));

        if (count($results) > 0) {

            $this->setData($results[0]);
        }
    }

    //listar registros
    public static function getList() {

        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");
    }

    //pesquisa
    public static function search($login) {

        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
                    ':SEARCH' => "%" . $login . "%"
        ));
    }

    //realizar login
    public function login($login, $password) {

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
            ":LOGIN" => $login,
            ":PASSWORD" => $password,
        ));

        if (count($results) > 0) {

            $this->setData($results[0]);
        } else {

            throw new Exception("Login e/ou senha inválidos.");
        }
    }

    //método para chamar todos os campos
    public function setData($data) {

        $this->setIdusuario($data['idusuario']);
        $this->setDeslogin($data['deslogin']);
        $this->setDessenha($data['dessenha']);
        $this->setDtcadastro(new DateTime($data['dtcadastro']));
    }

    //cadastro
    public function insert() {

        $sql = new Sql();

        $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
            ':LOGIN' => $this->getDeslogin(),
            ':PASSWORD' => $this->getDessenha()
        ));

        if (count($results) > 0) {

            $this->setData($results[0]);
        }
    }

    //alterar
    public function update($login, $password) {
        $this->setDeslogin($login);
        $this->setDessenha($password);

        $sql = new Sql();

        $sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID", array(
            ":LOGIN" => $this->getDeslogin(),
            ":PASSWORD" => $this->getDessenha(),
            ":ID" => $this->getIdusuario()
        ));
    }

    //deletar
    public function delete() {
        $sql = new Sql();

        $sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID", array(
            ":ID" => $this->getIdusuario()
        ));

        //zerar objetos após exclusão
        $this->getIdusuario(0);
        $this->getDeslogin("");
        $this->getDessenha("");
        $this->getDessenha("");
        $this->getdtcadastro(null);
    }

    /* método contrutor para pegar informações do cadastro */

    public function __construct($login = "", $password = "") {

        $this->setDeslogin($login);
        $this->setDessenha($password);
    }

    //método mágico, quando for chamado retornar o json
    public function __toString() {

        
        return json_encode(array(
            "idusuario" => $this->getIdusuario(),
            "deslogin" => $this->getDeslogin(),
            "dessenha" => $this->getDessenha(),
            "dtcadastro" => $this->getDtcadastro()
        ));

    }

}

?>