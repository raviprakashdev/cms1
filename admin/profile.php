<!DOCTYPE html>
<html>
<head>
		
		<title>Profile</title>
		<link rel="stylesheet" href="css/style1.css">
		
		
	</head>
	<body>
	<div class="m">
        
		<div class="n">
	
<?php
// require 'config.php';
$conn=mysqli_connect("localhost", "root", "","blogera");

session_start();

if(isset($_SESSION['login_status']) == false)
{
header("Location:login.php");
echo 'wrong username or password!';
}
?>

<?php
if(isset($_POST['submit'])){
	 move_uploaded_file($_FILES['file']['tmp_name'],"pictures/".$_FILES['file']['name']);
	 $con = mysqli_connect("localhost", "root", "", "db");
	 $q = mysqli_query($con,"UPDATE users SET picture = '".$_FILES['file']['name']."' WHERE uname = '".$_SESSION['uname']."'");
 }



?>
<div>
	<h1>Profile</h1>
<?php

if($_SESSION['picture'] == ""){
			echo "<img width='200' height='200' src='pictures/bot.png' alt='Default profile pic'><br>";
		}else{ 
			echo "<img width='200' height='200' src='pictures/".$_SESSION['picture']."' alt='Default profile pic'>";	
		}

?>
</div>
<br>
<h1>
<?php echo $_SESSION['name']; ?>
	</h1>

<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="file"><br> 
<input type="submit" name="submit">
</form>
<br>
<a href="destroy.php"> Logout </a>

	</div>
	</div>
	<div class="copy">
	Made with <span class="heart">💖</span> by &nbsp;<span ><a href="https://raviprakashdev.github.io/portfolio/" class="ftt">RAVI PRAKASH</a></span>
</div>
</body>
</html>