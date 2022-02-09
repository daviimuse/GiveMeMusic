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
				<!-- <label for="chk" aria-hidden="true">Welcome to GiveMeMusic!</label>	 -->
					<input type="checkbox" id="chk" aria-hidden="true">
						<div class="signup">
							<form method="POST" action="./backEnd/gestioneDB/config.php">
								<label for="chk" aria-hidden="true">Sign up</label>
								<input type="email" name="mail" placeholder="Email" required="">
								<input type="password" name="Rpassword" placeholder="Password" required="">
								<button method="POST" name="sButton">Sign up</button>
							</form>
						</div>
						<?php
		include("./backEnd/gestioneDB/config.php");

			if(array_key_exists('sButton', $_POST)){
				writeDataDB();
			}
	?>
						<div class="login">
							<form method="POST" action="./backEnd/login_register.php">
								<label for="chk" aria-hidden="true">Login</label>
								<input type="email" name="mail" placeholder="Email" required="">
								<input type="password" name="password" placeholder="Password" required="">
								<button>Login</button>
							</form>
						</div>
				</div>
			</body>
		</html>
	</body>
</html>



