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

$con=mysqli_connect("localhost", "root", "", "webprog_youtharchery"); //Host, User, Password, Database

//To check connection
if(mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error(); //if you cannot connect to MySQL
}
	$id = $_POST["id"];
	$username=$_POST["username"];
	$password=$_POST["password"];
	$fullname=$_POST["fullname"];
	$phoneno=$_POST["phoneno"];
	$gender=$_POST["gender"];
    $email=$_POST["email"];

$insert_sql = "INSERT INTO admin VALUE('$id', '$username', '$password', '$fullname', '$phoneno', '$gender', '$email')";	
//$sql = "INSERT INTO user(id, username, password, fname, lname, phoneno, gender, age , email , category) VALUE ('$id', '$username', '$password', '$fname', '$lname', '$phoneno', '$gender', '$age', '$email', '$category')"; //INSERT query
$sql_result =mysqli_query($con,$insert_sql)or die("Error in inserting data due to".mysqli_connect_errno()); 

if($sql_result)
	echo "<h2>New record created successfully <br>Registration Successful. Thank you<br></h2>";
else
	echo"<h2>Error in inserting data<h2>";


/*if($con->query($sql) === TRUE)
{
	echo "<h3>New record created successfully <br><br></h3>"; //If query triggered successfully
}
else
{
	//echo "Error: " .sql. "<br>" .$conn->error; //If query fails
}
	echo "Registration Successful. Thank you";*/
?>
	<h2><a href="adminLogin.html" class="yellow">Login Here</a><h2>
	</div>
		</section>
 
</body><html>