<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('69781028132-th5f1s2l31oec586ji06hcrtmiroqn4b.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('https://museexamproj.000webhostapp.com');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> Close your php here  