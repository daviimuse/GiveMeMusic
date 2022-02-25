<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $req = $_POST["req"];
    $id = $_POST["id"];
    require_once "../config.php";
    switch($req){
        case 1:{
            $mail = $_POST["rMail"];
            $query = "UPDATE users SET mail='".$mail."' WHERE id='".$id."';";
            if(mysqli_query($conn, $query) or die("Update query failed")){
                echo json_encode(array("message" => "User updated successfully", "status" => true));
            }else{
                echo json_encode(array("message" => "Failed users not updated", "status" => false));
            }
            break;
        }
        case 2:{
            $psw = $_POST["rPsw"];
            $query = "UPDATE users SET masterp='".$psw."' WHERE id='".$id."';";
            if(mysqli_query($conn, $query) or die("Update query failed")){
                echo json_encode(array("message" => "User updated successfully", "status" => true));
            }else{
                echo json_encode(array("message" => "Failed users not updated", "status" => false));
            }
            break;
        }
    }
}
?>