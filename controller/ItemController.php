<?php
include('../Entity/Items.php');
include('../Entity/Catagory.php');
$target_dir = "uploads/Item/";
$target_file = $target_dir . basename($_FILES["itemPicture"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if (move_uploaded_file($_FILES["itemPicture"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["itemPicture"]["name"])). " has been uploaded.";
  //  echo '<img src="'.$target_file.'"'.'width="500" height="600" alt="no image found" >';
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$itemName=$_POST['itemName'];
$itemDiscription=$_POST['itemDiscription'];
$itemPrice=$_POST['itemPrice'];
$itemCatagoryName=$_POST['catagoryName'];
$newItem=new Items($itemName,$itemDiscription,$itemPrice,$target_file);
$newCatagory=new Catagory($itemCatagoryName,$newItem);
$newItem->addCatagory($newCatagory);
$newCatagory->setItem($newItem);
header('Location: ../views/index.php');
}


?>