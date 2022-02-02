<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["Rpassword"])){//Registrazione
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $psw = $_POST["Rpassword"];
    $car = "/gestioneDB/accounts/" .hash(md5, $mail)  . "/";//Controllo utente
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
    $car = "/gestioneDB/accounts" . hash(md5, $mail)  . "/";
    if(file_exists($car)){
        $file = fopen($car . "psw.txt", "r") or die("Unable to open file!");
        $hashpsw=fread($file,filesize($car . "psw.txt"));
        fclose($file);
        if(hash(md5, $psw) == $hashpsw){
            upload();
        }else{
            echo "Password sbagliata";
        }
    }else{
        echo "Utente non presente. Effettuare la registrazione.";
    }
}
?>
