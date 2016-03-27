<?php
$servername = "us-cdbr-azure-east-c.cloudapp.net";
$username = "b03f513cd3abfb";
$password = "dfb3ee77";
$dbname = "SmartDeskDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}else{
	echo "pass";
}
?>