<!DOCTYPE html>
 

<html>
	<head>
		
		<title>Register</title>
		<link rel="stylesheet" href="css/style.css">
		
		
	</head>
	<body>
			<div class="m">
        
					<div class="n">
	<form action="register.php" method="POST" role="form">
	<h1 style="margin: 5px;">Registation Form</h1>
	
	<!-- <input type="text" class="form-control" name="name" placeholder="Name" required="" autofocus="" /><br /> -->
    	<!-- <input type="text" class="form-control" name="lname" placeholder="Nickname" required="" autofocus="" autofocus=""/><br /> -->
    	<input type="text" class="form-control" name="uname" placeholder="Username" required="" autofocus="" /><br />
		<input type="email" class="form-control" name="email1" placeholder="Email" /><br />
 		<input type="email" class="form-control" name="email2" placeholder="Confirm email"/><br />
    	<input type="password" class="form-control" name="pass1" placeholder="Password" /><br />
		<input type="password" class="form-control" name="pass2" placeholder="Confirm Password"/><br /><br />	
			
	<!-- <button name="submit" type="submit" class="btn">Register</button>  -->
	<input type="submit" name="submit" class="" value="Register">

	<h4>Already a member <span> <a href="login.php"> click here</a></span> to login</h4>
	<div class="echo">
		<?php
error_reporting(0);
// require('config.php');
$conn=mysqli_connect("localhost", "root", "","blogera");
if(isset($_POST['submit'])){
	
$email1 = $_POST['email1'];
 $email2 = $_POST['email2'];
 $pass1 = $_POST['pass1'];
 $pass2 = $_POST ['pass2'];
 
 if($email1 == $email2){
 if ($pass1 == $pass2){

//apply all filter
// $name = mysql_escape_string($_POST['name']);
// $lname = mysql_escape_string($_POST['lname']);
//  $uname = mysql_escape_string($_POST['uname']);
//  $email1 = mysql_escape_string($email1);
//  $email2 = mysql_escape_string($email2);
//  $pass1 = mysql_escape_string($pass1);
//  $pass2 = mysql_escape_string($pass2);
// $name = ($_POST['name']);
// $lname = ($_POST['lname']);
 $uname = ($_POST['uname']);
 $email1 = ($email1);
 $email2 = ($email2);
 $pass1 = ($pass1);
 $pass2 = ($pass2);

$pass1 = md5($pass1);
$sql = mysqli_query($conn,"SELECT * FROM `users` WHERE `username` = '$uname'");
 if(mysqli_num_rows($sql) > 0){
	 
	echo "<p>Sorry that username already exists.</p>";
	
	exit();
 }
 

$sql = mysqli_query($conn,"SELECT * FROM `users` WHERE `email` = '$email1'");
 if(mysqli_num_rows($sql) > 0){
    echo "<p>Sorry that email is already taken.</p>";
	exit();
 }
 
mysqli_query($conn,"INSERT INTO `users` (`email`,`username`, `password`) VALUES ('$email1','$uname',  '$pass1')");
		echo "<p>You are registered</p>";
		header('location:login.php');
		exit();
}
}	
} 
 
?>
		</div>
</form>	


 
		</div>
		</div>
		

		<div class="copy">
		<!-- Made with <span style="color: #e25555;">&hearts;</span> in india -->
		<!-- Made with <span class="heart">❤</span> in india -->
		<!-- Made with <span class="heart">💗💖</span> in india -->
		Made with <span class="heart">💖</span> by &nbsp;<span ><a href="https://raviprakashdev.github.io/portfolio/" class="ftt">RAVI PRAKASH</a></span>
		<!-- <p class="love">Made with <i class="icon ion-heart"></i> by RAVI PRAKASH</p> -->
	</div>
	
	</body>
	
	
	
</html>