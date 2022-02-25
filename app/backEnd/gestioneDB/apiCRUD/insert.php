<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $data = json_decode(file_get_contents("php://input"), true);
    $mail = $data["rMail"];
    $psw = $data["rPsw"];
    if(!empty($email) && !empty($pass)){
        require_once "../config.php";
        $query = "SELECT id FROM users WHERE mail='".$mail."'";
        $result = mysqli_query($conn, $query) or die("Insert query failed");
        if(mysqli_num_rows($result) > 0){
            echo json_encode(array("message" => "User already exist", "status" => false));
        }else{
            $query = "INSERT INTO users(mail, masterp) VALUES('".$mail."','".$psw."')";
            if(mysqli_query($conn, $query) or die("Insert query failed")){
                echo json_encode(array("message" => "User inserted successfully", "status" => true));
            }else{
                echo json_encode(array("message" => "Failed to insert user", "status" => false));
            }
        }
    }else{
        $mail = $data["rMail"];
        $psw = $data["rPsw"];
        if(!empty($email) && !empty($pass)){
          require_once "../config.php";
          $query = "SELECT id FROM users WHERE mail='".$mail."'";
            $result = mysqli_query($conn, $query) or die("Insert query failed");
            if(mysqli_num_rows($result) > 0){
                echo json_encode(array("message" => "User already exist", "status" => false));
            }else{
            $query = "INSERT INTO users(mail, masterp) VALUES('".$mail."','".$psw."')";
            if(mysqli_query($conn, $query) or die("Insert query failed")){
                echo json_encode(array("message" => "User inserted successfully", "status" => true));
            }else{
                echo json_encode(array("message" => "Failed to insert user", "status" => false));
            }
        }
    	}else{
          echo json_encode(array("message" => "Error sending data", "status" => false));
        }
    }
    
}
?>