<?php
$servername = "localhost";
$username = "root";
$password1 = "";
$dbname = "db";
$conn = mysqli_connect($servername, $username, $password1, $dbname);
if (!$conn) {
	die("connection failed:" . mysqli_connect());
} else {
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password1 = $_POST['password1'];
		$sql ="SELECT * FROM admin WHERE userName='$username' AND password='$password1' ";
		$result = $conn->query($sql);
        if ($result->num_rows > 0){
			header("Location: complaintview.php");
		}
		else
		{
			echo"not login";
		}
	}
}

?>


<!DOCTYPE>
<html>
<head>
	<title> LOGIN </title>
	<link rel="stylesheet"  type="text/css" href="style10.css"> 
</head> 	
<body>
	
	<div class="wrapper">
       <img src="logo.jpg" class="logo">
		
<ul>
	<li><a <ul>
	<li><a href="one more11.html"> HOME</a></li>
	<li><a href="process4.php"> REGISTRATION</a></li>
	<li><a href="process3.php" > LOGIN</a></li>
	<li><a href="cv.php"> VIEW</a></li>
	<li><a href="aboute.html"> CONTACT</a></li>
</div>

	<div class="loginbox">
		<br>
		<image src="kkkk.PNG" class= "kkkk">
<h1>LOGIN </h1>
<form action="http://localhost/project/process3.php" method="POST">
	<p>USER NAME</p>
	<input type="text" name ="username" placeholder="Enter username">
	<p>PASSWORD</p>
	<input type="PASSWORD" name="password1" placeholder="Enter password"><br>
	<input type="submit" name="submit" value="Login"><br>
	<br>
	<a href="#">Don't have an account</a>
</form>
	</div>
</body>

</html>