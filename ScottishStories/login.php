<?php
session_start();
include("connection.php"); // Establishing connection with database

if(empty($_POST["username"]) || empty($_POST["password"]))
{
    echo "Both fields are required.";
} else
{
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * FROM users WHERE username='$username' and password='$password'";
   //echo "entered sql";
    $result=mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = $result->fetch_assoc())
        {
          $_SESSION["uid"] = $row['uid'];
        }
        echo "found user";
        header("location:StoryTellersForm.php");   //Redirect to another page
      } else {
        echo "Incorrect username or password.";
      }

}
mysqli_close($conn);
?>









