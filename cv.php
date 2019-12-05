<?php
$dbHost="localhost";
$dbUsername='root';
$dbPassword='';
$dbName='db';
$db=mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);
if($db->connect_error)
{
    die("unable to connect database:".$db->connect_error);
}
if(isset($_POST['view']))
{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$query="SELECT * FROM complain WHERE username='$username' AND email='$email'";
$result=$db->query($query);
}
if(isset($_POST['edit']))
{
header("Location: usedit.php");
}
?>
<!DOCTYPE>
<html>
<head>
	<title> VIEW   </title>
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
<h1>VIEW </h1>
<form action="http://localhost/project/cv.php" method="POST">

	<p>USER NAME</p>
	<input type="text" name ="username" placeholder="Enter username">
	<br>
	<br>
	<br>
	<p> EMAIL</p>
	<input type="text" name ="email" placeholder="Enter email">
<br>
<br>
<br>
<br>
<br>

<input type="submit" name="edit" value="edit"><br>	
		<input type="submit" name="view" value="view"><br>		
		<?php
		while ($row= mysqli_fetch_assoc($result)) {
			?>
		<?php echo"<tr>";?>
			<?php echo "<td>";?>
				<?php echo $row['complain'];?>
				<?php
		}
		?>	
			
</form>
</div>
</body>
</html>
