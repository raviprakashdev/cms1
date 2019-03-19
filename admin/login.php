<!DOCTYPE html>
<?php

// include 'config.php';
$conn=mysqli_connect("localhost", "root", "","blogera");

if(isset($_POST['submit'])){

// $pass = mysql_escape_string($_POST['pass']);
// $uname = mysql_escape_string($_POST['uname']);
$pass = $_POST["pass"];
$uname =$_POST["uname"];
$pass = md5($pass);
$sql = mysqli_query($conn,"SELECT * FROM users WHERE username = '$uname' AND password = '$pass'");
//Vulnerable to SQL INjection

$count=mysqli_num_rows($sql);		
$row = mysqli_fetch_array($sql);

if($count > 0){
  
session_start();	
$_SESSION['login_status']=true;
$_SESSION['uname'] = $row['uname'];
// $_SESSION['name'] = $row['name'];
// $_SESSION['lname'] = $row['lname'];
$_SESSION['email'] = $row['email'];
// $_SESSION['picture'] = $row['picture'];
// $message = "wrong answer";
// echo "<script type='text/javascript'>alert('$message');</script>";
// sleep(0.1);
header("Location:dashboard.php");
// $message = "wrong answer";
// echo "<script type='text/javascript'>alert('$message');</script>";
// echo "Message has been sent.";
// $message = "wrong answer";
//  echo "<script type='text/javascript'>alert('$message');</script>";
//     sleep(5);
//     header("Location: profile.php", true, 303);
    exit;
	}else{
    $message = "wrong answer";
    echo "<script type='text/javascript'>alert('$message');</script>";
  header('location:login.php');
  // $_SESSION['message']="<div class='chip red black-text'> Sorry, Credentials Don't Match</div>";
  // $message = "wrong answer";
// echo "<script type='text/javascript'>alert('$message');</script>";
	
		}
		
}


?>



<html>
	<head>
		<title>Login page</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	
	<body>
	<div class="m">
        
				<div class="n">
	<form action="" method="POST" role = "form">
		<h1> Please Login form here: </h1><br>
		
		<input type="text" class="form-control" placeholder="User name" name="uname" autofocus="">
<br>
<input type="password" class="form-control" placeholder="Password" name="pass" autofocus="">
<div class="checkbox">
<br>
<label>
<input type="checkbox" value="remember-me"> Remember me
</label>
</div>

<!-- <button name="submit" type="submit"> Log In</button> -->
<input type="submit" name="submit" class="" value=" Log In">
<br />
<h4>New member <span> <a href="register.php"> click here</a></span> to register</h4>
	</form>	
	</div>
	</div>
	<div class="copy">
	Made with <span class="heart">💖</span> by &nbsp;<span ><a href="https://raviprakashdev.github.io/portfolio/" class="ftt">RAVI PRAKASH</a></span>
</div>
	</body>
	
	
</html>