<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Welcome to GiveMeMusic!</title>
  <link rel="stylesheet" href="./frontEnd/assets/cssFolder/style.css">
</head>
	<body>
		<!DOCTYPE html>
		<html>
		<head>
			<title>GiveMeMusic!</title>
			<link rel="stylesheet" type="text/css" href="slide navbar style.css">
		<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
		</head>
			<body>
				<div class="main">  
					<input type="checkbox" id="chk" aria-hidden="true">
						<div class="signup">
							<form name="reg" method="POST" action="./backEnd/login_register.php">
								<label for="chk" aria-hidden="true">Sign up</label>
								<input type="email" name="mail" placeholder="Email">
								<input type="password" name="Rpassword" placeholder="Password">
								<button method="POST" name="sButton">Sign up</button>
							</form>
						</div>
						<div class="login">
						<form name="log" method="POST" action="./backEnd/login_register.php">
								<label for="chk" aria-hidden="true">Login</label>
								<input type="email" name="mail" placeholder="Email">
								<input type="password" name="password" placeholder="Password">
								<button>Login</button>
						</form>	
									<form name="logG"method="POST" action="./backEnd/OAuth2/index.php">
									<div>
										<button method="POST" name="gB"><?php 
										include('./backEnd/OAuth2/config.php');
										$login_button = '';
										if(isset($_POST['gB'])){
											$login_button = $_POST["gB"];
										}
										if(isset($_GET["code"]))
										{
											$token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
											if(!isset($token['error']))
											{
												$google_client->setAccessToken($token['access_token']); 
												$_SESSION['access_token'] = $token['access_token'];
												$google_service = new Google_Service_Oauth2($google_client); 
												$data = $google_service->userinfo->get(); 
										
											if(!empty($data['given_name'])){$_SESSION['user_first_name'] = $data['given_name'];}
										
											if(!empty($data['family_name'])){$_SESSION['user_last_name'] = $data['family_name'];}
										
											if(!empty($data['email'])){$_SESSION['user_email_address'] = $data['email'];}
										
											if(!empty($data['gender'])){$_SESSION['user_gender'] = $data['gender'];}
										
											if(!empty($data['picture'])){$_SESSION['user_image'] = $data['picture'];}
											}
										}
										if(!isset($_SESSION['access_token'])){
											$login_button = '<a href="'.$google_client->createAuthUrl().'" style="color:white;">Login With Google</a>';
										}
										if($login_button == '')
										{
										echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
										echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
										echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
										echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
										echo '<h3><a href="logout.php">Logout</h3></div>';
										}else{
										echo '<div>'.$login_button . '</div>';
										}
										?></button>
									</div>
								</form>
						</div>
				</div>
			</body>
		</html>
	</body>
</html>