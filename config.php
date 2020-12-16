<?php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';
//Make object of Google API Client for call Google API
$google_client = new Google_Client();
//Set the OAuth 2.0 Client ID
$google_client->setClientId('208261906066-m918e69n3nkn7f8a6h0g7nbf0m193pip.apps.googleusercontent.com');
//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('AMI2vZHOOn7HnIzp7v0xj-OA');
//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('https://localhost/client_pabo/index.php');

$google_client->addScope('email');
$google_client->addScope('profile');

session_start();

?>