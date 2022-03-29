<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/CSS/stylesheet.css">
    <script src="script.js" defer></script>
    <title>StoryTellersForm</title>
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
					<a href="About.html">About Us</a>
					<a href="Home.php">Stories</a>
					<a href="Signupform.php">Story Teller SignUp</a>
					<a href="Loginform.php">Login</a>
                    </div>
                </div>
            </div>
            <br/>
            <br/>
    
        </header>
        <!--Header Ends-->

        <!--StoryTellerForm Upload Starts-->
        <form action="StoryTellersFormHandler.php" method="post" enctype="multipart/form-data">
            <label for="title">Title of Story:</label><br>
                <input type="text" id="ntitle" name="title1">
                <br>
                <label for="author">Name of Author:</label>
                <br>
                <input type="text" id="nauthor" name="author1">
            <br/>
            <br/>

            <label for="category">Category:</label><br>
            <input type="text" id="ncategory" name="category1">
            <br/>
            <br/>

            <p>Select Story Location</p>
            <label for="location">Location:</label><br>
            <input type="text" id="nlocation" name="location1">
            <br/>
            <br/>


            <label for="text">Story Narration:</label>
            <br>
            <textarea id="text" name="naration1" rows="12" cols="210"></textarea>
            <br/>
            <br/>

            <label for="text">Upload Image:</label>
            <br>
            <input type="file" name="photo" id="photo" />
            <br/>
            <br/>
            <div class="submit2" align="center">
                <input type="hidden" name="uid" value="<?php echo $_SESSION["uid"]; ?>" />
                <input type="submit" value="Submit">
            </div>
            <br/>
            <br/>

          </form>

        <!--StoryTellerForm Upload Ends-->


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

</body>
</html>