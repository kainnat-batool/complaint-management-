<?php
$servername = "localhost";
$username = "root";
$password1 = "";
$dbname = "db";
$conn = mysqli_connect($servername, $username, $password1, $dbname);
$query="SELECT * FROM complain";
$result=$conn->query($query);
if(isset($_POST['mail']))
{
	header("Location: mail.php");
}
?>
<!DOCTYPE>
<html>
<head>
	<title> view complaint</title>
	<link rel="stylesheet"  type="text/css" href="style8.css"> 
</head> 	
<body>
	
	<div class="wrapper">
       <img src="logo.jpg" class="logo">
 <ul>
	<li><a href="one more11.html"> HOME</a></li>
	<li><a href="process4.php"> REGISTRATION</a></li>
	<li><a href="process3.php" > LOGIN</a></li>
	<li><a href="cv.php"> VIEW</a></li>
	<li><a href="aboute.html"> CONTACT</a></li>
</ul>
</div>

	<div class="loginbox">
		<br>
		<image src="kkkk.PNG" class= "kkkk">
<h1>complaint </h1>
<form action="http://localhost/project/complaintview.php" method="POST">
	<table align="left" border="1px" style="width=50%;">
		<tr>
			<th>Id</th>
			<th>username</th>
			<th>email</th>
			<th>complain</th>
			<th>type</th>
		</tr>

		<?php
		while($rows=mysqli_fetch_assoc($result))
		{
			?>
			<tr>
			<td><?php echo $rows['id']?></td>
			<td><?php echo $rows['username']?></td>
			<td><?php echo $rows['email']?></td>
			<td><?php echo $rows['complain']?></td>
			<td><?php echo $rows['type']?></td>
			<td><a href='delete.php'>delete</a></td>
			</tr>
			<?php
		}
		?>
	</table>
	<input type="submit" name="mail" value="mail"><br>
</form>
	</div>
</body>

</html>