<?php
    require_once 'vendor/autoload.php';

    $clientID = "69781028132-th5f1s2l31oec586ji06hcrtmiroqn4b.apps.googleusercontent.com";
    $clientSecret = "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";
    $redirectUrl = "https://museexamproj.000webhostapp.com";

    //Creating client request to Google
    $client = new Google_client();
    $client -> setClientid($clientID); 
    $client -> setClientSecret($clientSecret);
    $client -> setRedirectUri($redirectUrl);
    $client -> addScope('profile');
    $client -> addScope('email');

    if(isset($_GET['code'])){
        $token = $client -> fetchAccessTokenWithAuthCode($_GET['code']);
        $client -> setAccessToken($token);

    //Getting user profile
    $gauth = new Google_Service_Oauth2($client);
    $google_info = $gauth -> useroinfo -> get();
    $email = $google_info -> email;
    $name = $google_info -> name;

        echo "Welcome".$name.",using this mail:".$email;
    }else{
        echo "<a href'".$client -> createAuthUrl()."'>Login with Google!</a>";
    }
?>