<?php

class Sql extends PDO {

    private $conn;

    public function __construct() {
        $this->conn = new PDO("mysql:host=localhost;dbname=bd_teste", "root", "");
    }

    private function setParams($statment, $parameter = array()) {
        foreach ($parameter as $key => $value) {
            $this->setParam($statment,$key, $value);
        }
    }

    private function setParam($statment, $key, $value) {
        $statment->bindParam($key, $value);
    }

    public function query($RawQuery, $params = array()) {
        $stmt = $this->conn->prepare($RawQuery);
        $this->setParams($stmt, $params);
        $stmt->execute();
        return $stmt;
    }

    public function select($rawQuery, $params = array()): array {
        $stmt = $this->query($rawQuery, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
?>

