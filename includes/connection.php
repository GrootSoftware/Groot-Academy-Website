<?php 
$servername = "localhost";
$username = "root";
$password = "";
$my_db = 'groot_academy';

// Create connection
$conn = new mysqli($servername, $username, $password,$my_db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>