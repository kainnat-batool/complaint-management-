<?php
$servername = "localhost";
$username = "root";
$password1 = "";
$dbname = "db";
$conn = mysqli_connect($servername, $username, $password1, $dbname);
if(isset($_POST['save']))
{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$complain=$_POST['complain'];
	$type=$_POST['type'];
$sql="UPDATE complain SET username='$username',complain='$complain',type='$type' WHERE email='$email'";
$res=mysqli_query($conn,$sql) or die("could not update".mysqli_error());
}
?>
<!DOCTYPE>
<html>
<head>
	<title> edit  </title>
	<link rel="stylesheet"  type="text/css" href="style5.css"> 
</head> 	
<body>
	<div class= "wrapper">
		<img src="logo.jpg" class="logo">
<ul>
	<li><a href="one more11.html"> HOME</a></li>
	<li><a href="process4.php"> REGISTRATION</a></li>
	<li><a href="process2.php"> LOGIN</a></li>
	<li><a href="cv.php"> VIEW </a></li>
	<li><a href="aboute.html"> CONTACT</a></li>
	
</ul>
<br>
</div>
	<div class="loginbox">
		<br>
		<image src="kkkk.PNG" class= "kkkk">
<h1>edit </h1>
<form action="http://localhost/project/usedit.php" method="POST">

	<p>USER NAME</p>
	<input type="text" name ="username" placeholder="Enter username">
	<br>
	<p> EMAIL</p>
	<input type="text" name ="email" placeholder="Enter email">
<br>
	<p>complain</p>
	<input type="text" name ="complain" placeholder="Enter complain">
<br>
<br>
	<p>type</p>
	<input type="text" name ="type" placeholder="Enter type">
<br>

		<input type="submit" name="save" value="save"><br>			
</form>
</div>
</body>
</html>