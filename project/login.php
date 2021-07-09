
<?php
require('dbfunctions.php');
session_start();
$msg="";
if(isset($_REQUEST['submit']))
{
	$user_id=$_REQUEST['id'];
	$pwd=$_REQUEST['pwd'];

	
	if(checkaccount($user_id,$pwd)=="admin")
	{
		
			$_SESSION['id']=$user_id;
			header('location:admin.php');
		}
		else if(checkaccount($user_id,$pwd)=="user")
		{
			$_SESSION['id']=$user_id;
			header('location:editprofile.php');
		}
	
	else
	{
		$msg="<font color=red> <center>Please enter user id!!!</center></font>";
	}
}
?>

<!DOCTYPE html>
<html>

<style type="text/css">
	img
	{
		height: 275px;
		width: 100%;
	}
	#nav a
	{
		float: right;
	}
	.nav
	{
		left: 25px;
	}
</style>
<body>

<marquee direction="right"><font color=blue size=5><h1><center>WELCOME TO HOTEL STAR</center></h1></font></marquee><br>
<img src="image/hotel.jpg"><br>	 
<div class="nav">
	<a href="register.php">create new account</a><br>
	<a href="change_password.php">Change password?</a><br>
	<a href="forgot_password.php">Forgot password?</a>
	</div><br>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form name="login" method="get" action="">
	<h2><center>User name: <input type="text" name="id" size=10 placeholder="enter username"></br></br>
	Password: <input type="password" name="pwd" size=10 placeholder="enter password"></br></br>
	<input type="submit" name="submit" value="Sign in"></center></h2><br><br>
	
</form>
	 <?php
	 echo $msg;
	 ?>

</body>
</html>

</form>
</body>
</html>