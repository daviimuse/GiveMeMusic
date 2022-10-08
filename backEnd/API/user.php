<?php
    session_start();
    require_once "../config.php";
    
    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
      header('Access-Control-Allow-Origin: *');
      header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
      header('Access-Control-Allow-Headers: token, Content-Type');
      header('Access-Control-Max-Age: 1728000');
      header('Content-Length: 0');
      header('Content-Type: text/plain');
      die();
    }
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){//Login 
      header("Access-Control-Allow-Methods: POST");
      $lMail = $_POST["lMail"]; 
      $lPsw = $_POST["lPsw"];
      if(filter_var($lMail, FILTER_VALIDATE_EMAIL)){
        if(empty($lMail) || empty($lPsw)){
            response("Error getting POST", false, "");
            http_response_code(400);
            return;    
        }
        $userID = checkPsw($conn,$lMail,$lPsw);
        if ($userID == null ) {
            response("Login failed",false,"");
            http_response_code(400);
            return;
        }
            //$_SESSION["lMail"] = $lMail;
            $_SESSION["UID"] = $userID;
            getId($conn, $lMail,$id_user);      
            response("Login succefull" ,true, $id_user);
            $_SESSION["id"] = $id_user;
            // echo $_SESSION["id"];
            http_response_code(200);
            return;
    }else{
        response("Email not valid",false,"");
    }
    }elseif($_SERVER["REQUEST_METHOD"] == "PUT"){//Registrazione
        header("Access-Control-Allow-Methods: PUT");
        $data = json_decode(file_get_contents("php://input"), true);
        if($data!=null){
            $rUsrn = $data["usrn"];
            $rMail = $data["mail"];
            $rPsw = $data["psw"];
        }else{
            $rUsrn = $_PUT["usrn"];  
            $rMail = $_PUT["mail"];
            $rPsw = $_PUT["psw"];
        }if(empty($rMail) || empty($rPsw) || empty($rUsrn)){
            response("Error sending data", false, "Empty values");
            http_response_code(400);
            return;
        }
        if(checknotexist($conn, $rMail)){//true allora l'utente non esiste allora puó registrarsi
            $stmt = $conn->prepare('INSERT INTO users(usrn,mail, psw) VALUES(?,?,?)');
            $stmt->bind_param('sss', $rUsrn, $rMail, hash("sha256",$rPsw)); 
            $stmt->execute();
            $result = $stmt->get_result();
            response("User signed up", true, "ok");
            return;
        }else{//false allora l'utente giá esiste
            response("User already exist", false, "");
            return;
        }
    }
    if($_SERVER["REQUEST_METHOD"] == "PATCH"){//Reset password
        header("Access-Control-Allow-Methods: PATCH");
        $data = json_decode(file_get_contents("php://input"), true);
        $rUsrn = $_SESSION["rUsername"];
        if($data!=null){
            //$rUsrn = $data["usrn"];
            $rMail = $data["mail"];
            $nPsw = $data["newpsw"];
        }else{
            //$rUsrn = $_SESSION["usrn"];
            $rMail = $_PATCH["mail"];
            $nPsw = $_PATCH["newpsw"];
        }if(empty($rMail) || empty($nPsw)){
            http_response_code(400);
            response("Error sending data", false, "Empty values");
        }if(!checknotexist($conn, $rMail)){//true allora l'utente non esiste allora puó registrarsi
            $sql = 'UPDATE users SET psw = ? WHERE mail = ?';
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('ss',hash("sha256",$nPsw),$rMail);//
            $stmt->execute();
            // $result = $stmt->get_result();
            response("Everthing is ok!", true, "ok");
        }else{//false allora l'utente già esiste
            response("User already exist", false, "");
        }
    }
    elseif($_SERVER["REQUEST_METHOD"] == "DELETE"){//Eliminazione utente
        header("Access-Control-Allow-Methods: DELETE");
        response("No user can be deleted", false, "");
    }else{
        response("User doesn't exits", false, "");
    }
  
    function getId($conn, $lMail,$id_user){
        $stmt = $conn->prepare('SELECT id FROM users WHERE mail = ?');
        $stmt->bind_param('s', $lMail);
        $stmt->execute();
        $result = $stmt->get_result();
        $id_user = mysqli_fetch_array($result);
        response("ID",true,"ok",$id_user);
    }

    function checkPsw($conn, $rMail,$rPsw){
        $stmt = $conn->prepare('SELECT * FROM users WHERE mail = ?');
        $stmt->bind_param('s', $rMail);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = mysqli_fetch_array($result);
        if ($row["psw"] == hash("sha256",$rPsw)){
            return $row["id"];
        }else {
            return 0;
        }
    }

    function checknotexist($conn, $rMail){
        $stmt = $conn->prepare('SELECT * FROM users WHERE mail = ?');
        $stmt->bind_param('s', $rMail); 
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows === 0){
            return true;
        }else{
            return false;
        }
    }
    
    function response($message, $status, $response, $data=""){
        echo json_encode(array("message" => $message, "status" => $status, "response" => $response,"data" => $data));
        exit();
    }
?>