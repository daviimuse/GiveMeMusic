<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>Explore new releases</title>
      <link rel="stylesheet" href="frontEnd/assets/cssFolder/main.css">
      <link rel="stylesheet" href="frontEnd/assets/cssFolder/sCards.css">
      <link rel="stylesheet" href="frontEnd/assets/cssFolder/modal.css">
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="backEnd/requests/spotifyAPI.js"></script>
   </head>
<?php
    session_start();
    require_once 'backEnd/OAuth2/google/vendor/autoload.php';
    $clientID = '440831399970-k5vj91pqnpvev88t793k4oemqsapsbcm.apps.googleusercontent.com';
    $clientSecret = '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';
    $redirectUri = 'https://papopep.altervista.org/app/user.php'; 
    $client = new Google_Client();
    $client->setClientId($clientID);
    $client->setClientSecret($clientSecret);
    $client->setRedirectUri($redirectUri);
    $client->addScope("email");
    $client->addScope("profile");
    if(isset($_GET['code'])) {
        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
        $client->setAccessToken($token['access_token']);
        $google_oauth = new Google_Service_Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();
        $user =  $google_account_info->name;
        $mail =  $google_account_info->email;
    }else{
        $user =  $_SESSION['usr'];
        $mail = $_SESSION['mail'];
    }
    if(!isset($_SESSION["UID"])){
        header('Location: user.php');
        exit;    
    }
?>
<body onload="getLikedGenres()">
<div class="sidebar">
      <div class="logo-details">
          <i class='bx bx-menu' id="btn" ></i>
      </div>
      <ul class="nav-list">
      <div id="searchBox">  

      <li>
          <a href="home.php">
            <i class='bx bx-home'></i>
            <span class="links_name">Home</span>
          </a>
          <span class="tooltip">Home</span>
        </li>
        
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

      <!-- <li>
        <a href="settings.php">
          <i class='bx bx-cog' ></i>
          <span class="links_name">Settings</span>
        </a>
        <span class="tooltip">Settings</span>
      </li> -->

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
       <div class="text"> Explore songs! </div>
            <center><svg style="display: none">  <!-- SearchBar -->
              <symbol id="magnify" viewBox="0 0 18 18" height="100%" width="100%">
              <path d="M12.5 11h-.8l-.3-.3c1-1.1 1.6-2.6 1.6-4.2C13 2.9 10.1 0 6.5 0S0 2.9 0 6.5 2.9 13 6.5 13c1.6 0 3.1-.6 4.2-1.6l.3.3v.8l5 5 1.5-1.5-5-5zm-6 0C4 11 2 9 2 6.5S4 2 6.5 2 11 4 11 6.5 9 11 6.5 11z" fill="#fff" fill-rule="evenodd"/>
              </symbol>
            </svg>
            <div class="search-bar">
              <input id="searchText" type="text" class="input" placeholder="&nbsp;">
              <span class="label">Search</span>
              <span class="highlight"></span>
                <div class="search-btn">
                    <svg class="icon icon-18" onclick="searchItems()">
                      <use xlink:href="#magnify"></use>
                    </svg>
                </div>
              </div>
            </div></center> <!-- End SearchBar -->
            <div class="imgGallery" id="imgGallery"></div>
  </section>
    <script src="frontEnd/assets/jsFolder/script.js"></script>
</body>
</html>