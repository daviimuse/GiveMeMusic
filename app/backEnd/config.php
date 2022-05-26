<?php
  $host = "localhost";
  $username = "papopep";
  $password = '';
  $database = "my_papopep";

  $conn = new mysqli($host, $username, $password, $database);
  if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }
    $query = "CREATE TABLE IF NOT EXISTS users(
        id int NOT NULL AUTO_INCREMENT,
        mail varchar(50) NOT NULL,
        psw varchar(30) NOT NULL,
        PRIMARY KEY (id)
       );";

    if(mysqli_query($conn, $query)){
       return 1;
    } else{
        echo "ERROR: gen tables";
        return 0;
    }
?>