<?php
    // require_once 'backEnd/OAuth2/google/vendor/autoload.php';
    // session_start();
    // $clientID = '440831399970-k5vj91pqnpvev88t793k4oemqsapsbcm.apps.googleusercontent.com';
    // $clientSecret = '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';
    // $redirectUri = 'http://papopep.altervista.org/GiveMeMusic-main/webApp/main.php'; 
    // $client = new Google_Client();
    // $client->setClientId($clientID);
    // $client->setClientSecret($clientSecret);
    // $client->setRedirectUri($redirectUri);
    // $client->addScope("email");
    // $client->addScope("profile");
    // if(isset($_GET['code'])) {
    //     $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    //     $client->setAccessToken($token['access_token']);
    //     $google_oauth = new Google_Service_Oauth2($client);
    //     $google_account_info = $google_oauth->userinfo->get();
    //     $user =  $google_account_info->name;
    //     $mail =  $google_account_info->email;
    // }else{
    //     $user =  $_SESSION['usr'];
    //     $mail = $_SESSION['mail'];
    // }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Explore new releases</title>
    <link rel="stylesheet" href="frontEnd/assets/cssFolder/main.css">
    <link rel="stylesheet" href="frontEnd/assets/cssFolder/sCards.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="backEnd/requests/spotifyAPI.js"></script>

   </head>
<body onload="getNewReleases()">
  <div class="sidebar">
    <div class="logo-details">
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
    <div id="searchBox">  
        <li>
            <i class='bx bx-search' onclick="test()"></i>
          <input id="searchValue" type="text" placeholder="Search...">
          <span class="tooltip">Search</span>
        </li>
      </div>
    <li>
        <a href="explore.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Explore</span>
        </a>
         <span class="tooltip">Explore</span>
      </li>

    <li>
       <a href="preferences.php">
         <i class='bx bx-heart' ></i>
         <span class="links_name">Preferences</span>
       </a>
       <span class="tooltip">Preferences</span>
     </li>

     <li>
         <a href="user.php">
          <i class='bx bx-user' ></i>
           <span class="links_name">User</span>
         </a>
         <span class="tooltip">User</span>
     </li>

     <li>
       <a href="settings.php">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Settings</span>
       </a>
       <span class="tooltip">Settings</span>
     </li>

     <li class="profile">
         <div class="profile-details">
            <div class="name_job" style="color:white;">GiveMeMusic &#8482;</div>
         </div>
            <form action="logOut.php" method="POST">
                <button class='bx bx-log-out' id="log_out" style="color: white;"></button>
            </form>
     </li>
    </ul>
  </div>
  <section class="home-section">
    <!-- <button onclick="test()">!TEST!</button> -->
  <div class="text">New Realeased Songs!<br>
  <div class="imgGallery" id="imgGallery"></div>
</section>
  <script src="frontEnd/assets/jsFolder/script.js"></script>
</body>
</html>