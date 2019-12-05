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
if(isset($_POST['save']))
{
	$id=$_POST['id'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$complain=$_POST['complain'];
	$type=$_POST['type'];
$sql="UPDATE complain SET username='$username',email='$email',complain='$complain',type='$type' WHERE id='$id'";
$res=mysqli_query($conn,$sql) or die("could not update".mysqli_error());
echo"<meta http-equiv='refresh' content='0; url='complaintview.php'>";
}
?> 

<!DOCTYPE>
<html>
<head>
	<title> EDIT  </title>
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
<h1>edit </h1>
<form action="http://localhost/project/edit.php" method="POST">
	<p>id</p>
	<input type="text" name ="id" >
	<p>USER NAME</p>
	<input type="text" name ="username" placeholder="Enter username">
	<p>email</p>
	<input type="EMAIL" name="email" placeholder="Enter email" ><br>
	<br>
	<p>Complaint</p>
	<input type="text" id="complain" name="complain">
	<br>
	<p>Complain type</p>
	<input type="text" id="type" name="type">
	<br>
	<input type="submit" name="save" value="save"><br>
	<br>
	</form>
	</div>
</body>

</html>

