
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Song Lyrics">
    <meta name="keywords" content="web design, newbie design, for assignment">
    <meta name="author" content="Secret Recipe CMPF123(1A)">
    
    <title>Youth Archery Tournament Event</title>
    <link rel="stylesheet" href="./myStyle.css">
    <script src="./javascript/script.js"></script>
</head>
<body>
<header>
    <div class="container">
        <div id="branding">
            <h1><span class="highlight" style="text-align:center;margin-left:350px;">Youth Archery Tournament</span> Event</h1>
        </div>
    </div>
</header>
        <section id="showcase">
			<div class="container">
				<!--<a href = "playerLogin.html"><button type="submit" class="button_1">Sign Up</button></a>-->
                <center>
<?php
session_start( );
if (isset($_SESSION["username"])) //userid replace with according to variable $_SESSION[xxx] at login page
{
session_destroy( );
echo "<h1>You have successfully logged out.<h1>";
}
else
echo "<h1>No session exists or session is expired. Please log in again<h1>";
?>
</div>
<a href="index.html" class= "yellow"><button type="submit" class="button_1">Home Page</button></a>
<center>
</div>
		</section>
 
</body><html>