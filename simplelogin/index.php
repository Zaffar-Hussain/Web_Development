<?php
	session_start();
	require'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#55efc4">

	<div id="main-wrapper">
	<center><h2>LOGIN PAGE</h2></center>
	<center>
	<img src="image/avatar.png" class="avatar"/>
	</center>
	
	
	<form class="myform" action="index.php" method="post">
	<label><b>id:</b></label><br>
	<input name="admin" type="text" class="inputvalue" placeholder="type admin name"/><br>
	<label><b>Password:</b></label><br>
	<input name="password" type="password" class="inputvalue" placeholder="type your password"/><br>
	<input name="login" type="submit" id="login_btn" value="Login"/><br>
	<a href="reg.php"><input type="button" id="register_btn" value="Sign Up"/></a><br>
	<a href="forgpass.php"><input type="button" id="register_btn" value="Forgot Password?"/></a><br>


	</form>
	
	<?php
	if(isset($_POST['login']))
	{
		$admin=$_POST['admin'];
		$password=$_POST['password'];
		
		$query="select * from admininfo where admin='$admin' AND password='$password'";
		
		$query_result=mysqli_query($con,$query);
		if(mysqli_num_rows($query_result)>0)
		{
			//valid
			$_SESSION['admin']=$admin;
			header('location:homepage.php');
		}
		else
		{
			//invalid credential
			echo '<script type="text/javascript"> alert("invalid credential")</script>';

		}
	}
	
	?>
	
	</div>
</body>
</html>
