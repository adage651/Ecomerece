<?php
require_once('../composer/vendor/autoload.php');
use Google\Service\Oauth2;
use Google\Service\Script\Content;
include('gconfig.php');

//include('Database.php');

if (isset($_GET['code'])) {
  $token = $google_client->fetchAccessTokenWithAuthCode($_GET['code']);
  
  $google_client->setAccessToken($token);
  $user = new Google_Service_Oauth2($google_client);
  $infoUser = $user->userinfo->get();

  $username = $infoUser->name;
  $_SESSION['username']=$username;
  $email = $infouser->email;

  $profilePicture = $infouser->picture;
  $_SESSION['profilePicture']=$profilePicture;

  $people = new Google_Service_PeopleService($google_client);
  $personFields = 'genders,addresses';
  $person = $people->people->get('people/me', array('personFields' => $personFields));
  $gender = $person->getGenders();
  $_SESSION['gender']=$gender;
  $address = $person->getAddresses();
  $_SESSION['address']=$address;



  $database=Database::getInstance();
  if ($database->AuthenticateGoogleUser($email)) {

  } else {
    $newUser=new User($username,$gender,$address,$email,$profilePicture);
    $newAccount=new Account($newUser,$password);
    $newUser->setAccount($newAccount);
    $newAccount->setUsername($newUser);
   
  }
}
?>