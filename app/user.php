<?php
    require_once 'backEnd/OAuth2/google/vendor/autoload.php';
    session_start();
    $clientID = '259230819724-stdqra0rpbqrsih6upusf32si86jvis5.apps.googleusercontent.com';
    $clientSecret = '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';
    $redirectUri = 'http://localhost/GiveMeMusic/user.php'; 
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
    }
    else{
        $_SESSION['mail'] = $_POST['mail'];
    }
        if(isset($user) || isset($mail)){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>User infos</title>
    <link rel="stylesheet" type="text/css" href=".././frontEnd/assets/loginFolders/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href=".././frontEnd/assets/loginFolders/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href=".././frontEnd/assets/loginFolders/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href=".././frontEnd/assets/loginFolders/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href=".././frontEnd/assets/loginFolders/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href=".././frontEnd/assets/loginFolders/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href=".././frontEnd/assets/loginFolders/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href=".././frontEnd/assets/loginFolders/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href=".././frontEnd/assets/loginFolders/css/util.css">
    <link rel="stylesheet" type="text/css" href=".././frontEnd/assets/loginFolders/css/main.css">
    <link rel="stylesheet" href="frontEnd/assets/cssFolder/user.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="backEnd/gestioneDB/request.js"></script>
   </head>
    <body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bx-menu' id="btn" ></i>
        </div>
        <ul class="nav-list">

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

            <div class="text">mail: <?php $_SESSION['lMail'] ?></div>

    </section>
<script src="frontEnd/assets/jsFolder/script.js"></script>
</body>
</html>
<?php
        }else{        
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>User infos</title>
    <link rel="stylesheet" type="text/css" href=".././frontEnd/assets/loginFolders/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href=".././frontEnd/assets/loginFolders/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href=".././frontEnd/assets/loginFolders/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href=".././frontEnd/assets/loginFolders/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href=".././frontEnd/assets/loginFolders/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href=".././frontEnd/assets/loginFolders/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href=".././frontEnd/assets/loginFolders/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href=".././frontEnd/assets/loginFolders/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href=".././frontEnd/assets/loginFolders/css/util.css">
    <link rel="stylesheet" type="text/css" href=".././frontEnd/assets/loginFolders/css/main.css">
    <link rel="stylesheet" href="frontEnd/assets/cssFolder/user.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="backEnd/gestioneDB/request.js"></script>
   </head>
    <body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bx-menu' id="btn" ></i>
        </div>
        <ul class="nav-list">

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
            <form action="logOut.php">
                <button class='bx bx-log-out' id="log_out" style="color: white;"></button>
            </form>
     </li>
        </ul>
    </div>
    <section class="home-section">
        <center>
            <form method="POST">
            <div id="logDiv" class="container-login100" style="display:block"><!-- Login  -->
                <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
                    <form class="login100-form validate-form" method="POST">
                        <span class="login100-form-title p-b-37">Sign into <br>Give Me Music!</span>

                        <div class="wrap-input100 validate-input m-b-20" data-validate="Enter your email">
                            <input class="input100" type="email" id="lMail" name="lMail" placeholder="Email">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
                            <input class="input100" type="password" id="lPsw" name="lPsw" placeholder="Password">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" onclick="userLogin();return false;">
                            <?php

                            ?>
                            <a>Sign In</a>
                            </button>
                        </div>

                        <div class="text-center">
                                <a class="txt2 hov1" id="logToReg">  
                                <!-- href="register.php" -->
                                    <br>
                                    Sign Up!
                                    <br>
                                </a>    
                                <script type="text/javascript">
                                    document.getElementById("logToReg").onclick = function(){
                                        document.getElementById("logDiv").style.display = 'none';
                                        document.getElementById("regDiv").style.display = 'block';
                                    }
                                </script>  
                        </div>
                        <div class="text-center">
                                <a id="logToForgot" class="txt2 hov1"><br>
                                <!-- href="newPsw.php"  -->
                                    Forgot password?
                                </a>    
                                <script type="text/javascript">
                                    document.getElementById("logToForgot").onclick = function(){
                                        document.getElementById("logDiv").style.display = 'none';
                                        document.getElementById("forgotDiv").style.display = 'block';
                                    }
                                </script>  
                        </div>
                    </form>
                        <div class="text-center p-t-57 p-b-20">
                            <span class="txt1">Or login with</span>
                            </div>
                                <center>
                                    <button>
                                    <?php
                                        if (isset($_GET['code'])) {
                                            $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
                                            $client->setAccessToken($token['access_token']);
                                            $google_oauth = new Google_Service_Oauth2($client);
                                            $google_account_info = $google_oauth->userinfo->get();
                                            $_SESSION['usr'] = $google_account_info->name;
                                            $_SESSION['mail'] = $google_account_info->email;
                                        }else{
                                            echo "<a class='login100-social-item' href='".$client->createAuthUrl()."' >G</a>";
                                        }
                                    ?>
                                    </button>
                                </center>
                            </div>
                        </form>
                </div>
            </center>
		</div>
        </form>
<center>
<form method="POST">
        <div id="regDiv" class="container-login100" style="display:none"><!--Registrazione -->
			<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
				<form class="login100-form validate-form" method="PUT">
					<span class="login100-form-title p-b-37">Sign up to <br>Give Me Music!</span>

					<div class="wrap-input100 validate-input m-b-20" data-validate="Enter your username">
						<input class="input100" type="text" id="rUsrn" name="rUsrn" placeholder="Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-20" data-validate="Enter your email">
						<input class="input100" type="text" id="rMail" name="rMail" placeholder="Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
						<input class="input100" type="password" id="rPsw" name="rPsw" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="button" id="reg" class="login100-form-btn" onclick="userRegister()">
                            <a>Sign Up</a>
                        </button>
					</div>
                    
					<div class="text-center">
						<a id="regToLog" class="txt2 hov1">
                        <!-- href="index.php" -->
							<br>Already have an account? Sign In!<br>
						</a>
                        <script type="text/javascript">
                                    document.getElementById("regToLog").onclick = function(){
                                        document.getElementById("regDiv").style.display = 'none';
                                        document.getElementById("logDiv").style.display = 'block';
                                    }
                        </script>  
					</div>
				</form>
			</div>
		</div>
        </form>
    </center>

    <center>
    <form method="POST">
        <div id="forgotDiv" class="container-login100" style="display: none;"> <!-- Reset Password -->
                <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
                    <form class="login100-form validate-form" method="PATCH">
                        <span class="login100-form-title p-b-37">Reset your password</span>

                        <div class="wrap-input100 validate-input m-b-20" data-validate="Enter your email">
                            <input class="input100" type="text" id="rMail" name="rMail" placeholder="Email">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter new password">
                            <input class="input100" type="password" id="nPsw" name="rPsw" placeholder="Enter new password">
                            <span class="focus-input100"></span>
                        </div>
                        
                        <div class="wrap-input100 validate-input m-b-25" data-validate = "confirm password">
                            <input class="input100" type="password" id="cnPsw" name="rPsw" placeholder="Confirm password">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="container-login100-form-btn">
                            <button id="reg" class="login100-form-btn" onclick="resetPsw()"> <!-- ;return false -->
                                <a>Reset</a>
                            </button>
                        </div>
                        
                        <div class="text-center">
                            <a id="forToLog" class="txt2 hov1">
                                <br>Sign In!<br>
                                <script type="text/javascript">
                                    document.getElementById("forToLog").onclick = function(){
                                        document.getElementById("forToLog").style.display = 'none';
                                        document.getElementById("logDiv").style.display = 'block';
                                    }
                        </script>  
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            </form>
    </center>

    </section>
    <script src="frontEnd/assets/jsFolder/script.js"></script>
    </body>
</html>
<?php
}
?>