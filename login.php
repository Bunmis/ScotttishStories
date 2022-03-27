<?php
include("connection.php"); // Establishing connection with database

// $_POST["username"] =  "mary";
// $_POST["password"] = "Mary12";

if(empty($_POST["username"]) || empty($_POST["password"]))
{
    echo "Both fields are required.";
} else
{
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * FROM users WHERE username='$username' and password='$password'";
echo "entered sql";
    $result=mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        echo "found user";
        header("location:home.html");   //Redirect to another page
      } else {
        echo "Incorrect username or password.";
      }

}
mysqli_close($conn);
?>







