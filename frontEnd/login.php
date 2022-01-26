<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["Rpassword"])){//Registrazione
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $psw = $_POST["Rpassword"];
    //Controllare che utente non esista già
    $car = "/gestioneDB/accounts/" .hash(md5, $mail)  . "/";
    chmod("/gestioneDB/accounts/", 0755);
    if(!file_exists($car)){
        mkdir($car);
        $file = fopen($car . "psw.txt", "w") or die("Unable to open file!");
        fwrite($file, hash(md5, $psw));
        fclose($file);
        echo "Utente registrato";
    }else{
        echo "Utente già registrato";
    }
}elseif($_SERVER['REQUEST_METHOD'] == 'POST'){//Login
    $mail = $_POST["mail"];
    $psw = $_POST["password"];
    $car = "/gestioneDB/accounts/" . hash(md5, $mail)  . "/";
    if(file_exists($car)){
        $file = fopen($car . "psw.txt", "r") or die("Unable to open file!");
        $hashpsw=fread($file,filesize($car . "psw.txt"));
        fclose($file);
        if(hash(md5, $psw) == $hashpsw){
            // echo "Password corretta";
            // echo "Login effettuato";
            upload();
        }else{
            echo "Password sbagliata";
        }
    }else{
        echo "Utente non presente. Effettuare la registrazione.";
    }
}
?>
<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <div class="container-fluid form-container">
      <div class="container login-container">
          <div class="row">
              <div class="col-md-5 content-part">
                  <h4 class="logo">Login!</h4>
              </div>
              <div class="col-md-7 form-part">
                <div class="row">
                   <p class="signinlink">Don't have an account <a href="../index.html">Sign Up</a></p>
                   <form method="POST" action="../backEnd/login_register.php">    
                  <div class="col-lg-8 col-md-11 login formcol mx-auto">
                       <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" name="mail">
                        <label for="floatingInput">Email</label>
                      </div>
                      <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" name="password">
                        <label for="floatingPassword">Password</label>
                      </div>
                      <div class="form-floating">
                       <button type="submit" class="btn btn-primary">Login</button>
                      </div>
                  </div>
                </form>
                </div>
              </div>
          </div>
      </div>
    </div> 
  </body>
</html>