<?php

include("connection.php"); // Establishing connection with database

$title = $_POST['title1'];
$location = $_POST['location1'];
$author = $_POST['author1'];
$category = $_POST['category1'];
$naration = $_POST['naration1'];

$sql = "INSERT INTO stories (title, location, author, category, naration) VALUES ('$title', '$location', '$author', '$category', '$naration')";

if (mysqli_query($conn, $sql)) {
    echo "uploaded";
  header("location:uploadphoto.php?form=success");   //Redirect to another page
  
} else 
{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
