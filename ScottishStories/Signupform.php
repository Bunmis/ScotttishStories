<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/CSS/stylesheet.css">
    <script src="script.js" defer></script>
    <title>StoryTeller Signup</title>
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
                        <a href="Home.html">Home</a>
                        <a href="Home.html">Stories</a>
                        <a href="signup.html">Story Teller SignUp</a>
                        <a href="#">Login</a>
                    </div>
                </div>
            </div>
    
        </header>
        <!--Header Ends-->

<!--Signup Form Starts -->
<main>
    <form method="post" action="Signupformhandler.php" style="border:1px solid #ccc">
        <div class="form1">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <br>
            
            <label for="email"><b>Username</b></label>
            <input type="text" placeholder="Enter Email" name="username" required>
            <br>
      
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pwd" required>
            <br>

            <div class="button1">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
        </div>
        </div>
    </form>

</main>
<!--Signup Form Ends -->

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