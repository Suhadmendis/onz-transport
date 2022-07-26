<?php

$servername = 'localhost';
$username = 'onesjyks_akila';
$password = 'SaGaRa4000';




// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>