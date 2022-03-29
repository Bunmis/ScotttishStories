<?php

include("connection.php"); // Establishing connection with database

$username = $_POST['username'];
$password = $_POST['pwd'];

$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

if (mysqli_query($conn, $sql)) {
  //echo "Your profile has been created successfully";
  header("location:Loginform.php?signup=success");   //Redirect to another page
  
} else 
{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>