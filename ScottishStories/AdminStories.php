<?php
include("connection.php"); // Establishing connection with database

if (isset($_GET['approvalID']))
{
	$storyID = $_GET['approvalID'];

	$sqlApproval="Update stories set status = 'Approved' WHERE storyid = $storyID";
	//echo "entered sql";
	$result=mysqli_query($conn,$sqlApproval);

}

   
if (isset($_GET['rejectID']))
{
	$storyID = $_GET['rejectID'];
	$sqlReject="Update stories set status = 'Rejected' WHERE storyid = $storyID";
	//echo "entered sql";
	$result=mysqli_query($conn,$sqlReject);
	
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Assets/CSS/stylesheet.css">
    <script src="script.js" defer></script>
	<title>Admin Stories Approval</title>
</head>
<body>
	<!--Header Starts-->
		<header>
			<div class="container">
				<img alt="Scottish logo", class="icon", href="#", src="Assets/Images/scotlandlogo.png", width="100" height="100">
				<h1 class="heading">SCOTTISH STORIES</h1>
			</div>
	
			<div class="menu">
				<div class="navbar">
					<div class="menu" id="menu1">
						<a href="Home.php">Home</a>
						<a href="AdminStories.php">Admin Stories</a>
						<a href="Home.php">Stories</a>
						<a href="Signupform.php">Story Teller SignUp</a>
						<a href="Loginform.php">Login</a>
					</div>
				</div>
			</div>
		</header>
		<!--Header Ends-->

	<main>
		<!--Approval Form Starts-->
		<h1>Stories Pending Approval</h1>	
		<table>
				<tr>
					<td>Title</td>
					<td>Author</td>
					<td>location</td>
					<td>Category</td>
					<td>Narration</td>
					<td>image</td>
				</tr>
				<?php

					$sql="select * FROM stories WHERE status='Pending'";
					//echo "entered sql";
					$result=mysqli_query($conn,$sql);

					if (mysqli_num_rows($result) > 0) {
						// output data of each row
						while($row = $result->fetch_assoc())
						{
				?>
				<tr>
				<td><?php echo $row['title']; ?></td>
				<td><?php echo $row['author']; ?></td>
				<td><?php echo $row['location']; ?></td>
				<td><?php echo $row['category']; ?></td>
				<td><?php echo $row['naration']; ?></td>
				<td>
					<img src="<?php echo $row['imagePath']; ?>" alt="" height="200px" width="200px">
				</td>
				<td>
					<a href="AdminStories.php?approvalID=<?php echo $row['storyid']; ?>">Approve</a>
				</td>
				<td>
					<a href="AdminStories.php?rejectID=<?php echo $row['storyid']; ?>">Reject</a>
				</td>
				</tr>
				<?php
				}
			} 
				?>
		</table>

		<!--Approval Form Ends-->
	</main>

	    <!--Footer Starts-->
		<footer class="footer">
			<div class="col-container">
				<div class="col">
					<h2>Contact Us</h2>
					<p>Scottish Tourism</p>
					<p>23, Gartide Road,</p>
					<p>AB25 6TB</p>
					<p>Scotland</p>
				</div>
	
				<div class="col">
					<h2>Login</h2>
					<a href="Signupform.php">Story Tellers Login</a>
					<br>
					<br>
					<a href="Loginform.php">Login</a>
				</div>
	
				<div class="col">
				<h2>Social Media Handles</h2>
					<ul class="socials">
						<a href="http://www.facebook.com"><img src="Assets/images/facebookicon.png" alt="facebook"></a></li>
						<a href="http//www.twitter.com"><img src="Assets/images/twittericon.png" alt="twitter"></a></li>
						<a href="http//www.instagram.com"><img src="Assets/images/instagramicon.png" alt="instagram"></a></li>
						<a href="http//www.youtube.com"><img src="Assets/images/youtubeicon.png" alt="youtube"></a></li>
					</ul>
				</div>
			</div>
				<a href="mailto:scottish.stories.uk.com">scottish.stories.uk.com</a></p>
				<p>&copy; 2022 Scottish Stories</p>
		</footer>
		<!--Footer Ends-->
<?php

mysqli_close($conn);

?>
</body>
</html>