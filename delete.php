<?php
$servername = "localhost";
$username = "root";
$password1 = "";
$dbname = "db";
$conn = mysqli_connect($servername, $username, $password1, $dbname);
if(isset($_GET['edit']))
{
	$id=$_GET['edit'];
	$res=mysqli_query("SELECT * FROM complain");
	$row=mysqli_fetch_array($res);
}
if(isset($_POST['delete']))
{
	$email=$_POST['email'];
$sql="DELETE FROM complain WHERE email='$email'";
$res=mysqli_query($conn,$sql);
}
?> 

<!DOCTYPE>
<html>
<head>
	<title> DELETE  </title>
	<link rel="stylesheet"  type="text/css" href="com.css"> 
</head> 	
<body>
	
	<div class="wrapper">
       <img src="logo.jpg" class="logo">
		
<ul>
	<li><a href="one more11.html"> HOME</a></li>
	<li><a href="process4.php"> REGISTRATION</a></li>
	<li><a href="process2.php" > LOGIN</a></li>
	<li><a href="cv.php"> VIEW</a></li>
	<li><a href="aboute.html"> CONTACT</a></li>
</ul>
</div>

	<div class="loginbox">
		<br>
		<image src="kkkk.PNG" class= "kkkk">
<h1>DELETE </h1>
<form action="http://localhost/project/delete.php" method="POST">
	<p>email</p>
	<input type="EMAIL" name="email" placeholder="Enter email" ><br>
	
	<input type="submit" name="delete" value="delete"><br>
	<br>
	</form>
	</div>
</body>

</html>

