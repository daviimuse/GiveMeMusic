<?php
include('config.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(checktbl($conn)){
        echo "La tabella esiste o é stata creata";
    }

    function checktbl($conn){
        $query = "CREATE TABLE IF NOT EXISTS users (
            id int not null auto_increment,
            email text not null,
            psw text not null,
            primary key (id)
        );";
        if($conn->query($query)){
            return true;   
        }else{
            echo "Error";
            return false;
        }
        //var_dump($result);
    }
}
?>


