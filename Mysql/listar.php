<?php
require_once "conexao.php";


$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY codigo");

$data = array();

while ($row = $result->fetch_array()){
    var_dump($row);
    
    array_push($data,$row);
}

echo json_encode($data);
?>
