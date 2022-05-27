<?php
    session_start();
    require_once "../config.php";
    
    $id_user = $_SESSION["user_id"];

    if($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["del"])){//Inserimento like
        header("Access-Control-Allow-Methods: POST");
            $id_user = $_POST["id_user"];
            $id_genre = $_POST["id_genre"];
            $conn -> begin_transaction();
            try{
            $sql = "INSERT INTO likes (id_usr, id_genre) VALUES (?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('ii', $id_user, $id_genre);
            $stmt->execute();
            $result = $stmt->get_result();
            $conn -> commit();
            http_response_code(200);
            response("",200, "Like Added");
            return;
            }catch(mysqli_sql_exception $exception){
            	$mysqli -> rollback();
                throw $exception;
            }
    }
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["del"])){//Eliminazione like
        header("Access-Control-Allow-Methods: POST");
            $id_user = $_POST["id_user"];
            $id_genre = $_POST["id_genre"];
            $sql = "DELETE FROM likes WHERE id_usr = ? AND id_genre = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('ii', $id_user, $id_genre);
            $stmt->execute();
            $result = $stmt->get_result();
            http_response_code(200);
            response("",200, "Like Deleted");
            return;
    }
    if($_SERVER["REQUEST_METHOD"] == "GET"){//Ottenimento likes 
        header("Access-Control-Allow-Methods: GET");
            $id_user = $_GET["id_user"];
            $sql = "SELECT id, id_genre FROM likes WHERE id_usr = ".$id_user ;;
            $result = $conn->query($sql);
            if (mysqli_num_rows($result)>0){
                $ret = "{";
                while($row = $result->fetch_assoc()) {
                    $ret = $ret."\"" . $row["id_genre"] . "\" :  " . $row["id"] . ",";
                }
            }else{
                http_response_code(200);
                responseGenre(200, "null");
                return;
            }
            $id_like = $row["id"];
            $id_genre = $row["id_genre"];
            $ret = substr($ret, 0, -1) . "}";
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
