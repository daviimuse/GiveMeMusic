<?php
session_start();

require_once 'vendor/autoload.php';//Include Google Client Library for PHP autoload file

$google_client = new Google_Client();

$google_client->setClientId('259230819724-stdqra0rpbqrsih6upusf32si86jvis5.apps.googleusercontent.com');//OAuth Client ID

$google_client->setClientSecret('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');//OAuth Client Secret key

$google_client->setRedirectUri('http://localhost/Gmm/index.php');//OAuth Redirect URI

$google_client->addScope('email');

$google_client->addScope('profile');

?>