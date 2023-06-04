<?php
require_once '../composer/vendor/autoload.php';
require_once('Database.php');

$google_client = new Google_Client();

$google_client->setClientId('174289144070-ldnm8d5uplduvj5l1jeos38jf2lab48d.apps.googleusercontent.com');
$google_client->setClientSecret('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');
$google_client->setRedirectUri('http://localhost/Ecomerece/views/index.php');
 
// $google_client->addScope('email');
 
// $google_client->addScope('profile');
$scopes=array('email','profile');
$google_client->setScopes($scopes); // Use this line instead

//print_r($google_client); 
// if(isset($_GET['code'])){
// $token=$google_client->fetchAccessTokenWithAuthCode($_GET['code']);
// $google_client->setAccessToken($token['access_token']);
// $user=new Google_Service_Oauth2($google_client);
// $infoUser=$user->userinfo->get();

// $username = $infoUser->name;
// $_SESSION['username']=$username;
// $email = $infouser->email;

// $profilePicture = $infouser->picture;
// $_SESSION['profilePicture']=$profilePicture;

// $people = new Google_Service_PeopleService($google_client);
// $personFields = 'genders,addresses';
// $person = $people->people->get('people/me', array('personFields' => $personFields));
// $gender = $person->getGenders();
// $_SESSION['gender']=$gender;
// $address = $person->getAddresses();
// $_SESSION['address']=$address;



// $database = Database::getInstance();
// if ($database->AuthenticateGoogleUser($email)) {

// } else {
//   $newUser=new User($username,$gender,$address,$email,$profilePicture);
//   $newAccount=new Account($newUser,$password);
//   $newUser->setAccount($newAccount);
//   $newAccount->setUsername($newUser);
 
// }
// }
// else {
// echo "<a href='".$google_client->createAuthUrl()."'>login</a>";
// }
//start session on web page
session_start();
 
?>