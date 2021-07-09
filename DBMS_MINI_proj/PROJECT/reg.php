<?php
	require'dbconfig/conf.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>registration Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#81ecec">

	<div id="main-wrapper">
	<center><h2> ADMIN SIGN UP </h2></center>
	<center>
            <img src="image/pic.png" class="avatar"/>
	</center>
	
	
	<form class="myform" action="reg.php" method="post">
          
	<label for="username"><b>Username:</b></label><br>
	<input name="username" type="text" class="inputvalue" placeholder="type your name" required/><br>
	<label for="password"><b>Password:</b></label><br>
	<input name="password" type="password" class="inputvalue" placeholder="your password" required/><br>
	<label for="cpassword"><b>Confirm Password:</b></label><br>
	<input name="cpassword" type="password" class="inputvalue" placeholder="confirm password" required/><br>
	<input name="submit_btn" type="submit" id="register_btn" value="Sign Up"/><br>
        <b> <p>Already a member?</p></b> <a href="index1.php"><input type="button" id="login_btn" value="Login"/></a><br>
   </form>
   
   <?php
	if(isset($_POST['submit_btn']))
	{
		//echo '<script type="text/javascript"> alert("Sign up button clicked")</script>';
		$username=$_POST['username'];
		$password=$_POST['password'];
		$cpassword=$_POST['cpassword'];
		
		if($password==$cpassword)
		{
			$query="select * from account where username='$username'";
			$query_run=mysqli_query($con,$query);
			
			if(mysqli_num_rows($query_run)>0)
			{
				//there is already a user with same admin
				echo '<script type="text/javascript"> alert("user already exists... try another username")</script>';
				
			}
			else
			{
				$query="insert into account values('$username','$password')";
				$query_run=mysqli_query($con,$query);
				
				if($query_run)
				{
					echo '<script type="text/javascript"> alert("user registered.. go to login page to login ")</script>';
				}
				else{
					echo '<script type="text/javascript"> alert("error")</script>';
				}
			}
		}
		else
		{
			echo '<script type="text/javascript"> alert("password and confirm password does not match ")</script>';
		}
	}
   ?>
	
	</div>
</body>
</html>
   