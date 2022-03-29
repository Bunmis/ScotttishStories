<?php

include("connection.php"); // Establishing connection with database

$title = $_POST['title1'];
$uid = $_POST['uid'];
$location = $_POST['location1'];
$author = $_POST['author1'];
$category = $_POST['category1'];
$naration = $_POST['naration1'];
$imagePath = "";
$status = "Pending";
$dateCreated = date("Y-m-d");

	if ($_FILES['photo']['name'] != "")
	{
		$file = $_FILES['photo']['name'];
		$path = pathinfo($file);
		$filename = "image_".date("Ymd_hisa");
		$ext = $path['extension'];
		$temp_name = $_FILES['photo']['tmp_name'];
		$path_filename_ext = "imageFiles/".$filename.".".$ext;
		
		$extensionArrays = array("jpg","jpeg","png","gif");
		if (in_array($ext,$extensionArrays)) //checked if expected file type was selected
		{ 
			if (!file_exists($path_filename_ext))
			{
				move_uploaded_file($temp_name, $path_filename_ext);
        $imagePath = $path_filename_ext;
				//echo("File has been uploaded successfully");
				// save the file path to the database
			}
			else
			{
				echo("File already exists in the directory");
			}
		}
		else
		{
			echo("Wrong file type (<strong>".$ext."</strong>): An image file is expected");
		}
	}
	

$sql = "INSERT INTO stories (title, uid, location, author, category, naration, imagePath, status, dateCreated) VALUES ('$title', $uid, '$location', '$author', '$category', '$naration', '$imagePath', '$status', '$dateCreated')";

if (mysqli_query($conn, $sql)) {
    echo "successfully uploaded";
  header("location:StoryTellersForm.php?form=success");   //Redirect to another page
  
} else 
{
  echo "Error uploading: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
