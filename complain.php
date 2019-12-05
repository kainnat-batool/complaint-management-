<?php
$dbHost="localhost";
$dbUsername='root';
$dbPassword='';
$dbName='db';
$db=new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
if($db->connect_error)
{
    die("unable to connect database:".$db->connect_error);
}
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $complain=$_POST['complain'];
    $Type=$_POST['type'];
    $sql="INSERT INTO complain(username,email,complain,type) VALUES('$username','$email','$complain','$Type')";
    if($db->query($sql)===TRUE)
    {
        echo"complain is registered";
    }
    else
    {
        echo"not registered".$db->error;
    }
}
    if(isset($_POST['viewmail']))
    {
    	header("Location: viewmail.php");
    }
$db->close();
?>
<!DOCTYPE>
<html>
<head>
	<title> COMPLAINT  </title>
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
<h1>COMPLAINT </h1>
<form action="http://localhost/project/complain.php" method="POST">
	<p>USER NAME</p>
	<input type="text" name ="username" placeholder="Enter username">
	<p>email</p>
	<input type="EMAIL" name="email" placeholder="Enter email"><br>
	<br>
	<p>Complain type</p>
	<select name="type">
	<option value="class cleaness">Class cleaness</option>
			<option value="hostel issues">hostel issues</option>
				<option value="route issues">route issues</option>
					<option value="study issues">Study issues</option>

	</select>
	<br>
	<p>Complaint</p>
	<input type="text" id="complain" name="complain"/>
</p>
	<br>
	
	

	</select>
	<br>
	<input type="submit" name="submit" value="SUBMIT"><br>
	<br>
	<input type="submit" name="viewmail" value="viewmail"><br>
	<br>
	</form>
	</div>
</body>

</html>
