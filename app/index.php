<?php
	session_start();
	if (isset($_SESSION["mail"])){
		header("Location: webApp/main.php");
	}else{    
        require_once './backEnd/OAuth2/google/vendor/autoload.php';
        $clientID = '440831399970-k5vj91pqnpvev88t793k4oemqsapsbcm.apps.googleusercontent.com';
        $clientSecret = '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';
        $redirectUri = 'http://papopep.altervista.org/GiveMeMusic-main/webApp/main.php'; 
        $client = new Google_Client();
        $client->setClientId($clientID);
        $client->setClientSecret($clientSecret);
        $client->setRedirectUri($redirectUri);
        $client->addScope("email");
        $client->addScope("profile");
    }
?>
<!DOCTYPE html>
<head>
	<title>Give Me Music!</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./frontEnd/assets/loginFolders/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./frontEnd/assets/loginFolders/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./frontEnd/assets/loginFolders/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="./frontEnd/assets/loginFolders/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="./frontEnd/assets/loginFolders/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="./frontEnd/assets/loginFolders/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="./frontEnd/assets/loginFolders/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="./frontEnd/assets/loginFolders/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="./frontEnd/assets/loginFolders/css/util.css">
	<link rel="stylesheet" type="text/css" href="./frontEnd/assets/loginFolders/css/main.css">
    <script src="./backEnd/gestioneDB/request.js"></script>
</head>
	<body>
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title p-b-37">Sign into <br>Give Me Music!</span>

					<div class="wrap-input100 validate-input m-b-20" data-validate="Enter your email">
						<input class="input100" type="text" id="lMail" name="lMail" placeholder="Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
						<input class="input100" type="password" id="lPsw" name="lPsw" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" onclick="userLogin();return false">
						<a>Sign In</a>
						</button>
					</div>
					
					<div class="text-center">
                            <a href="register.php" class="txt2 hov1">
                                <br>
                                Sign Up!
                                <br>
                            </a>    
					</div>
                    <div class="text-center">
                            <a href="newPsw.php" class="txt2 hov1">
                                <br>
                                Forgot password?
                            </a>    
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
		</div>
	</body>
</html>