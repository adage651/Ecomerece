<?php
include('../Entity/User.php');

$func=$_REQUEST['func'];
$func();
function addUser(){
include('../Entity/Account.php');
$target_dir = "uploads/People/";
$target_file = $target_dir . basename($_FILES["profilePicture"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if (move_uploaded_file($_FILES["profilePicture"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["profilePicture"]["name"])). " has been uploaded.";
  //  echo '<img src="'.$target_file.'"'.'width="500" height="600" alt="no image found" >';
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
$username=$password=$gender=$address=$email=$profilePicture="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username=$_POST['username'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $profilePicture=$target_file;

 $newUser=new User($username,$gender,$address,$email,$profilePicture);
$newAccount=new Account($newUser,$password);
$newUser->setAccount($newAccount);
$newAccount->setUsername($newUser);
header('Location: ../views/login.php');
}
}
// function addReview(){
//   include('../Entity/Review.php');
//   if ($_SERVER["REQUEST_METHOD"] == "POST") {
  

//     $dataJson = file_get_contents('php://input');
//     $data = json_decode($dataJson);
    
//  $review=new Review($data->reviwer,$data->itemId,$data->review,$data->rank,$data->reviewDate);

// }
// }
function addReview($reviwer, $itemId, $review, $rank, $reviewDate) {
  include('../Entity/Review.php');
  $review = new Review($reviwer, $itemId, $review, $rank, $reviewDate);
  //$review->addReviewToDatabase();
}


















?>