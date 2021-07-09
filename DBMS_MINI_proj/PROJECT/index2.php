<?php
	session_start();
	require'dbconfig/conf.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#55efc4">

    <div id="main-wrapper">
	
	<center>
            <p><h1 align="center" > EMPLOYEE LOGIN</h1></p>
            <img src="image/avatar.png" class="avatar"/>
	</center>
	
	
	<form class="myform" action="index2.php" method="post">
	<label for="ssn" ><b>SSN:</b></label><br>
        <input name="ssn" type="text" class="inputvalue" placeholder="type your ssn" required/><br>
	<br><label for="password"><b>Password:</b></label><br>
	<input name="password" type="password" class="inputvalue" placeholder="type your password" required/><br>
        <input name="login" type="submit" id="login_btn" value="Login"/><br>
        <br><b>Not yet registered?</b><a href="reg1.php"><input type="button" id="register_btn" value="register"/></a>
       <a href="start.php"/><input type="button" id="logout_btn" value="Back"/>
	</form>
	
	<?php
	if(isset($_POST['login']))
	{
		$ssn=$_POST['ssn'];
		$password=$_POST['password'];
		
		$query="select * from emp_account where ssn='$ssn' AND password='$password'";
		
		$query_run=mysqli_query($con,$query);
		if(mysqli_num_rows($query_run)>0)
		{
			//valid
			$_SESSION['ssn']=$ssn;
			header('location:homepage2.php');
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
