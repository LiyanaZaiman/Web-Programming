<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<meta name="description" content="Song Lyrics">
		<meta name="keywords" content="web design, newbie design, for assignment">
		<meta name="author" content="Secret Recipe CMPF123(1A)">
		
		<title> Youth Archery Tournament | Admin</title>
		<link rel="stylesheet" href="./myStyle.css">
	</head>
	<body>
		<header>
			<div class="container">
				<div id="branding">
					<h1><span class="highlight">Youth Archery </span>Tournament</h1>
			</div>
			<nav>
				<ul>
					<li class="current"><a href="adminMainMenu.html">Main Menu</a></li>
					<li><a href=""></a></li>
					<li><a href="logoutsession.php">Log Out</a></li>
				</ul>
			</nav>
			</div>
		</header>
		
		<section>
			<div ></div>
				<div id="rectangle">
<center><?php
 
	echo"";
$con=mysqli_connect("localhost", "root", "","webprog_youtharchery") or die("Cannot connect to
server.".mysqli_error($con));

$username=$_POST["username"];

	$sql="SELECT * FROM user WHERE username LIKE '%$username%'";

 

 if($result=mysqli_query($con,$sql) or die("Cannot execute sql.")){
 while($row=mysqli_fetch_array($result))
 {
 
 echo "<table border= '1'>";
 echo "<tr><td>User ID: </td><td>".$id=$row['id']."</td></tr>";
 echo "<tr><td>Username: </td><td>".$username=$row['username']."</td></tr>";
 echo "<tr><td>Password: </td><td>".$password=$row['password']."</td></tr>";
 echo "<tr><td>First Name:</td><td>".$fname=$row['fname']. "</td></tr>";
 echo "<tr><td>Last Name</td><td>".$lname=$row['lname']."</td></tr>";
 echo "<tr><td>Phone Number:</td><td>".$phoneno=$row['phoneno']."</td></tr>";
 echo "<tr><td>Gender:</td><td>".$gender=$row['gender']."</td></tr>";
 echo "<tr><td>Age:</td><td>".$age=$row['age']."</td></tr>";
 echo "<tr><td>Email:</td><td>".$email=$row['email']."</td></tr>";
 echo "<tr><td>Category:</td><td>".$category=$row['category']."</td></tr>";
 echo "</table>";
 }
}else{
	 echo"Username not found. Please retry again";
 }
?>	
	</div>
</section>
		
	<footer>
		<p>Youth Archery, Copyright &copy; 2020</p>
	</footer>
					
	</body>
</html>