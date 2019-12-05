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
	$query="SELECT * FROM mail WHERE username='$username' AND email='$email'";
$result=$db->query($query);
}
?>
<!DOCTYPE>
<html>
<head>
	<title> VIEW mail </title>
	<link rel="stylesheet"  type="text/css" href="style5.css"> 
</head> 	
<body>
	<div class= "wrapper">
		<img src="logo.jpg" class="logo">
</div>
	<div class="loginbox">
		<br>
		<image src="kkkk.PNG" class= "kkkk">
<h1>VIEWmail </h1>
<form action="http://localhost/project/viewmail.php" method="POST">

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
<br>

		<input type="submit" name="view" value="view"><br>		
		<?php
		while ($row= mysqli_fetch_assoc($result)) {
			?>
		<?php echo"<tr>";?>
			<?php echo "<td>";?>
				<?php echo $row['mail'];?>
				<?php
		}
		?>	
			
</form>
</div>
</body>
</html>