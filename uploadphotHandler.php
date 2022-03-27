<?php

include("connection.php"); // Establishing connection with database

// $target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }

// This is the file we're going to add it in the database
$MY_FILE = $_FILES['file']['tmp_name'];
 
// To open the file and store its contents in $file_contents
$file = fopen($MY_FILE, 'r');
$file_contents = fread($file, filesize($MY_FILE));
fclose($file);
/* We need to escape some stcharacters that might appear in  file_contents,so do that now, before we begin the query.*/
 
$file_contents = addslashes($file_contents);
 
// To add the file in the database
//mysql_connect('localhost', 'root', '') or die("Unable to connect to database.");
mysql_select_db('photos') or die("Unable to select the DB.");
mysql_query("INSERT INTO files SET file_data='$file_data'") or die("MySQL Query Error: " . mysql_error() . "<br><br>". "The SQL was: $SQL<br><br>");
mysql_close();
echo "File INSERTED into files table successfully.";

?>
