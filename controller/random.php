<?php

  include('../Entity/Review.php');
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  

    $dataJson = file_get_contents('php://input');
    $data = json_decode($dataJson);
    
 $review=new Review($data->reviwer,$data->itemId,$data->review,$data->rank,$data->reviewDate);

  }

?>