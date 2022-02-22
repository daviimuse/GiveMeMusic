<?php
include("../../index.php");
  $host = "localhost";
  $username = "";
  $password = '';
  $database = "";

  $conn = new mysqli($host, $username, $password, $database);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

  function writeDataDB(){
    $mail = $_POST["mail"];
    $psw = $_POST["Rpassword"];
    // Attempt insert query execution
    $sql= "INSERT INTO `loginInfo` (`ID`, `mail`, `psw`) VALUES ('1', 'mail1@gmail.com', 'psw1');";
    if(mysqli_query($link, $sql)){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    // Close connection
    mysqli_close($link);
  }
?>