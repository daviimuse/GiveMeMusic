<?php
$servername = "ec2-52-208-221-89.eu-west-1.compute.amazonaws.com";
$username = "colbpsouojhqbl";
$password = "0246d8a225c675bd471cdde69e9f28f4992a190626d58dbcaa549a30e09197aa";

$conn = new mysqli($servername,
			$username, $password);

if ($conn->connect_error) {
	die("Connection failure: "
		. $conn->connect_error);
}

$conn->close();
?>
