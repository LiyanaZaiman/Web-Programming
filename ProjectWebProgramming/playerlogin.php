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
<?php
	$con=mysqli_connect("localhost", "root", "","webprog_youtharchery") or die("Cannot connect to server");
	$username=@$_POST["username"];
	$password=@$_POST["password"];
	$sql="Select * from user where username='$username'";
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)== 0)
echo "<h2>Username does not exist</h2>";
else
{
$row=mysqli_fetch_array($result,MYSQLI_BOTH);
if($row["password"] ==$password)
{
session_start();
$_SESSION["username"]= $username;
//go to player page
header("Location:playerMainMenu.html");
}
else
echo "<h2>Password wrong</h2>";
}
?>	
</div>
<h2>Unsuccessful login. Please try again by clicking the link below</h2>
<h1><a href="playerlogin.html" class="yellow">Back to login page</a><h1>
</section>

</body><html>