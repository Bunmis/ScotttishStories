<?php
    $servername = "localhost";
    $dbname = 'scottish_stories';
    $username = "root";
    $password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check Connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

echo "success"
?>