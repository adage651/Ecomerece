<?php
require_once('Database.php');
$database=Database::getInstance();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dataJson = file_get_contents('php://input');
    $data = json_decode($dataJson,true);
    print_r($data);
    $data=$database->userOrder($data[0],$data[1]);
  }
?>