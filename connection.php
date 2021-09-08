<?php
$servername = "localhost";
$username = "id14005791_1";
$password = "001Aryan@@@@";
$dbname = "id14005791_0";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



?>