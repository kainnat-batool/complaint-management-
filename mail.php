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
if(isset($_POST['send']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $mail=$_POST['mail'];
    $sql="INSERT INTO mail(username,email,mail) VALUES('$username','$email','$mail')";
    if($db->query($sql)===TRUE)
    {
        echo"mail is sent";
    }
    else
    {
        echo"not sent".$db->error;
    }
}
$db->close();
?>

<!DOCTYPE>
<html>
<head>
  <title> mail  </title>
  <link rel="stylesheet"  type="text/css" href="style3.css"> 
</head>   
<body>
  <div class= "wrapper">
    <img src="logo.jpg" class="logo">
</div>
  <div class="loginbox">
    <br>
    <image src="kkkk.PNG" class= "kkkk">
<h1>mail </h1>
<form action="http://localhost/project/mail.php" method="POST">
  <p>USER NAME</p>
  <input type="text" name ="username" placeholder="Enter username">
  <p>email</p>
  <input type="text" name="email" placeholder="Enter email"><br>
  <p>mail</p>
  <input type="text" name ="mail" placeholder="Enter mail">
  <br>
  <br>
  <input type="submit" name="send" value="send"><br>
</form>
  </div>
</body>

</html>