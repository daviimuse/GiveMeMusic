<?php
require_once './google/vendor/autoload.php';
  
// init configuration
$clientID = '1056870111114-6326c1iijmjgm1md7jtifg4mtrquunlc.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://signorellimattia.altervista.org/';
   
// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");
  
// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']);
   
  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $email =  $google_account_info->email;
  $name =  $google_account_info->name;
  
  // now you can use this profile info to create account in your website and make user logged in.
} else {
  echo "<a href='".$client->createAuthUrl()."'>Google Login</a>";
}
?>