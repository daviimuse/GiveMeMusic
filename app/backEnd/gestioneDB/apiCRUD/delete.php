<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $data = json_decode(file_get_contents("php://input"), true);
    $id=$data["id"];
    require_once "../config.php";
    $query = "DELETE FROM users WHERE id='".$id."';";
    if(mysqli_query($conn, $query) or die("Delete query failed")){
        if(mysqli_affected_rows($conn)>0){
            echo json_encode(array("message" => "User deleted successfully", "status" => true));
        }else{
            echo json_encode(array("message" => "No users to delete", "status" => false));
        }
    }else{
        echo json_encode(array("message" => "Delete failed", "status" => false));
    }
}
?>