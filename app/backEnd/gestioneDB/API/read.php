<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
require_once "../config.php";
if($_SERVER["REQUEST_METHOD"] == "GET"){
    $req = $_GET["req"];
    switch($req){
        case 1:{
            $query = "SELECT * FROM users;";
            $result = mysqli_query($conn, $query) or die("Read query failed");
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_all($result);
                echo json_encode($row);
            }else{
                echo json_encode(array("message"=>"No users found", "status" =>false));
            }
            break;
        }
        case 2:{
            $mail = $_GET["rMail"];
            $query = "SELECT id FROM users WHERE mail='".$mail."';";
            $result = mysqli_query($conn, $query) or die("Read query failed");
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_all($result);
                echo json_encode($row);
            }else{
                echo json_encode(array("message"=>"No user found", "status" =>false));
            }
            break;
        }
        case 3:{
            $mail = $_GET["rMail"];
            $psw = $_GET["rPsw"];
            $query = "SELECT masterp FROM users WHERE mail='".$mail."';";
            $result = mysqli_query($conn, $query) or die("Read query failed");
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_all($result);
                if(password_verify($psw, $row[0][0])){
                    echo json_encode(array("message"=>"Login", "status" =>true));
                }else{
                    echo json_encode(array("message"=>"Error credentials", "status" =>false));
                }
            }else{
                echo json_encode(array("message"=>"No user found", "status" =>false));
            }
            break;
        }
    }
}
?>