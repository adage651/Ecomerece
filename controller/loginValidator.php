<?php
session_start();

require_once('Database.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $database=Database::getInstance();
    
    if($database->AuthenticateUser($username,$password)){

header('location: ../views/index.php');



    }else{
        header('Location: ../views/login.php');
    }
}






?>