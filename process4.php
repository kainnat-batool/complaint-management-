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
    $password1=$_POST['password1'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
   
    $sql="INSERT INTO user(username,password,email,phone,gender) VALUES('$username','$password1','$email','$phone','$gender')";
    if($db->query($sql)===TRUE)
    {
        echo"new person is registered";
    }
    else
    {
        echo"not registered".$db->error;
    }
}
$db->close();
?>

<!DOCTYPE>
<html>
<head>
  <title> SIGN IN  </title>
  <link rel="stylesheet"  type="text/css" href="style3.css"> 
</head>   
<body>
  <div class= "wrapper">
    <img src="logo.jpg" class="logo">
<ul>
  <li><a href="one more11.html"> HOME</a></li>
  <li><a href="process4.php"> REGISTRATION</a></li>
  <li><a href="process2.php"> LOGIN</a></li>
  <li><a href="aboute.html"> CONTACT</a></li>
</ul>
<br>
</div>
  <div class="loginbox">
    <br>
    <image src="kkkk.PNG" class= "kkkk">
<h1>SIGN IN </h1>
<form action="http://localhost/project/process4.php" method="POST">
  <p>USER NAME</p>
  <input type="text" name ="username" placeholder="Enter username">
  <p>PASSWORD</p>
  <input type="PASSWORD" name="password1" placeholder="Enter password"><br>
  <p>EMAIL</p>
  <input type="email" name ="email" placeholder="Enter email">
  <p>PHONE NUMBER</p>
  <input type="phoneNo" name ="phone" placeholder="Enter phoneNo">
  <p>GENDER</p>
  <select name="gender">
    <option value="MALE">
      Male
    </option>
    <option value="FEMALE">
      Female
    </option>
    <option value="OTHER">
      other
    </option>
  </select>
  <br>
  <br>
  <input type="submit" name="submit" value="Sign in"><br>
</form>
  </div>
</body>

</html>