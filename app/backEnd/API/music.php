<?php
    session_start();
    require_once "../config.php";
    
    $id_user = $_SESSION["user_id"];

    if($_SERVER["REQUEST_METHOD"] == "GET" && !isset($_GET["obtLikes"]) && !isset($_GET["obtSeed"])){//Ottenimento generi
        header("Access-Control-Allow-Methods: GET");
            $sql = "SELECT id_genre, seed FROM genres";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){            
                $ret = "[";
                while($row = mysqli_fetch_assoc($result)) {
                    $ret = $ret."{\"id\": " . $row["id_genre"]. ", \"name\":\"" . $row["seed"] . "\"},";
                }
                $id_genre = $row["id_genre"];
                $ret = substr($ret, 0, -1) . "]";
                http_response_code(200);
                responseGenre(200, $ret);
                }
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){//Ottenimento likes 
        header("Access-Control-Allow-Methods: POST");
            $id_user = $_POST["id_user"];
            $sql = "SELECT g.seed FROM likes l INNER JOIN genres g ON l.id_genre=g.id_genre WHERE l.id_usr =".$id_user." LIMIT 3"; //."LIMIT 3"
            $result = $conn->query($sql);
            if (mysqli_num_rows($result)>0){
                $ret = "\"";
                while($row = $result->fetch_assoc()){
                    $ret = $ret.$row["seed"].",";
                }
            }else{
                http_response_code(200);
                responseGenre(200, "null");
                return;
            }
            $ret = substr($ret, 0, -1)."\"";
            http_response_code(200);
            responseGenre(200, $ret);
            return;
    }
    
    function response($message, $status, $response, $data=""){
        echo json_encode(array("message" => $message, "status" => $status, "response" => $response,"data" => $data));
        exit();
    }

    function responseGenre($code, $data){
        echo " { \"code\":$code, \"data\":$data } ";
        exit();
    }
?>