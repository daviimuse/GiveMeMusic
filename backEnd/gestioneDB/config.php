<?php
$host = "localhost";
$username = "id18427891_daviimuse";
$password = '23r+ET"G-xaO';
$database = "id18427891_usersdata";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>