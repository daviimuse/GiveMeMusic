<?php
    header("Content-Type: application/json");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization");
    require_once "../config.php";
// if($_SERVER["REQUEST_METHOD"] == "POST"){   //
//     header("Access-Control-Allow-Methods: POST");
//     $data = json_decode(file_get_contents("php://input"), true);
//     if($data!=null){
//         $id = $data["id"];
//         $change = $data["change"];
//         $value = $data["value"];
//     }
//     if(empty($id) || empty($change) || empty($value)){
//         $id = $_POST["id"];
//         $change = $_POST["change"];
//         $value = $_POST["value"];
//         if(empty($id) || empty($change) || empty($value)){
//             response("Error sending data", false, "");
//         }
//     }
//     require_once "../config.php";
//     if(checkexist($conn, $id)){   
//         switch($change){
//             case 'team_id':{
//                 $stmt = $conn->prepare('UPDATE detusers SET team_id=? WHERE user_id=?');
//                 $stmt->bind_param('ii', $value, $id); 
//                 $stmt->execute();
//                 $result = $stmt->get_result();
//                 response("Data updated", true, "");
//                 break;
//             }
//             default:{
//                 response("Error change value", false, "");
//             }
//         }
//     }else{
//         response("No user found", false, "");
//     }
// }elseif($_SERVER["REQUEST_METHOD"] == "GET"){  //read id or details of user
//     header("Access-Control-Allow-Methods: GET");
//     require_once "../config.php";
//     $request = $_SERVER['REQUEST_URI'];
//     $ex = explode("/",explode("user.php", $request)[1]);
//     error_reporting(E_ERROR | E_PARSE);
//     if(strpos($ex[1], '?') !=false ){   //Se la richiesta é una get prendo il la stringa prima della get
//         $ex = explode("?", $ex[1]);
//         $ex[1] = $ex[0];
//     }
//     switch (strtolower($ex[1])) {
//         case '/':
//         case '':{   
//             response("Invalid request", false, "");
//             break;
//         }
//         case 'id':{
//             req_id($conn);
//             break;
//         }
//         case 'team_id':{
//             req_teamid($conn);
//             break;
//         }
//         case 'user_id':{
//             req_userid($conn);
//             break;
//         }
//         case 'privilege':{
//             req_privilege($conn);
//             break;
//         }
//         case 'google':{
//             req_google($conn);
//             break;
//         }
//         case '2fa':{
//             req_2fa($conn);
//             break;
//         }
//     }
// }else

    if($_SERVER["REQUEST_METHOD"] == "PUT"){  //Insert
        header("Access-Control-Allow-Methods: PUT");
        $data = json_decode(file_get_contents("php://input"), true);
        if($data!=null){
            $rMail = $data["mail"];
            $rPsw = $data["psw"];
        }else{
            $rMail = $_PUT["mail"];
            $rPsw = $_PUT["psw"];
        }
        if(empty($rMail) || empty($rPsw)){
            response("Error sending data", false, "Empty values");
        }
        if(checknotexist($conn, $rMail)){//L'utente può registrarsi
            $stmt = $conn->prepare('INSERT INTO users(mail, psw) VALUES(?,?)');
            $stmt->bind_param('ss', $rMail, $rPsw); 
            $stmt->execute();
            $result = $stmt->get_result();
        }else{//L'utente giá esiste
            response("User already exist", false, "");
        }
    }

// elseif($_SERVER["REQUEST_METHOD"] == "DELETE"){  //Delete
//     header("Access-Control-Allow-Methods: DELETE");
//     response("No user can be deleted", false, "");
// }

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
    
    function response($message, $status, $response){
        echo json_encode(array("message" => $message, "status" => $status, "response" => $response));
        exit();
    }
?>