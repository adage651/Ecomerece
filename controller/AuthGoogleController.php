<?php

use Google\Service\Script\Content;

require_once '../composer/vendor/autoload.php';
include('gconfig.php');
include('Database.php');

if (!isset($_SESSION['access_token'])) {

} else {
  $token = $google_client->fetchAccessTokenWithAuthCode($_GET['code']);
  $google_client->setAccessToken($token);
  $user = new Google_Service_Oauth2($google_client);
  $infoUser = $user->userinfo->get();

  $username = $infoUser->name;
  $_SESSION['username']=$username;
  $email = $infouser->email;

  $profilePicture = $infouser->picture;
  $_SESSION['profilePicture']=$profilePicture;



  $profilePicture;
header('Content-Type:image/jpeg');
readfile($profilePicture);


  $people = new Google_Service_PeopleService($google_client);
  $personFields = 'genders,addresses';
  $person = $people->people->get('people/me', array('personFields' => $personFields));
  $gender = $person->getGenders();
  $_SESSION['gender']=$gender;
  $address = $person->getAddresses();
  $_SESSION['address']=$address;
  $database = Database::getInstance();
  if ($database->AuthenticateGoogleUser($username)) {
    header("Location: index.php");
  } else {
    $newUser = new User($username, $gender, $address, $email, $profilePicture);
    $newAccount = new Account($newUser, null);
    $newUser->setAccount($newAccount);
    $newAccount->setUsername($newUser);
  }
  header("Location: index.php");
}
?>