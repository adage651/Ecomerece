<?php
require_once('Database.php');
$database=Database::getInstance();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dataJson = file_get_contents('php://input');
    $data = json_decode($dataJson,true);
    print_r($data);
    $data=$database->setCartItem($data[0],$data[1]);
  }
if($_SERVER['REQUEST_METHOD']=='DELETE'){
    $dataJson = file_get_contents('php://input');
    print_r($dataJson);
    $data = json_decode($dataJson,true);
    $data=$database->deleteOnCart($data[0],$data[1]);
}





?>