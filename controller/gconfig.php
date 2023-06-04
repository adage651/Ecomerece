<?php
 
//Include Google Client Library for PHP autoload file
require_once '../composer/vendor/autoload.php';
 
//Make object of Google API Client for call Google API
$google_client = new Google_Client();
 
//Set the OAuth 2.0 Client ID
$google_client->setClientId('174289144070-ldnm8d5uplduvj5l1jeos38jf2lab48d.apps.googleusercontent.com');
 
//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');
 
//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/Ecomerece/views/index.php');
 
//
$google_client->addScope('email');
 
$google_client->addScope('profile');


// if(isset($_GET['code'])){
// $token=$google_client->fetchAccessTokenWithAuthCode($_GET['code']);
// $google_client->setAccessToken($token['access_token']);
// $user=Google_Service_Oauth2($client);
// $infoUser=$user->userinfo->get();
// echo "user name".$infoUser->name."<br>";
// echo "user name".$infoUser->email."<br>";
// echo "<img href='".$infoUser->picture."'><br>";
// }else {
// echo "<a href='".$google_client->createAuthUrl()."'>login</a>";
// }
//start session on web page
session_start();
 
?>