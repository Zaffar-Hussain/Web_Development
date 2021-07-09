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
	<center><h2> EMPLOYEE SIGN UP </h2></center>
	<center>
            <img src="image/avatar.png" class="avatar"/>
	</center>
	
	
	<form class="myform" action="reg1.php" method="post">
          
	<label for="ssn"><b>SSN:</b></label><br>
	<input name="ssn" type="text" class="inputvalue" placeholder="enter your ssn" required/><br>
	<label for="password"><b>Password:</b></label><br>
	<input name="password" type="password" class="inputvalue" placeholder="your password" required/><br>
	<label for="cpassword"><b>Confirm Password:</b></label><br>
	<input name="cpassword" type="password" class="inputvalue" placeholder="confirm password" required/><br>
	<input name="submit_btn" type="submit" id="register_btn" value="Sign Up"/><br>
        <b> <p>Already a member?</p></b> <a href="index2.php"><input type="button" id="login_btn" value="Login"/></a><br>
   </form>
   
   <?php
	if(isset($_POST['submit_btn']))
	{
		//echo '<script type="text/javascript"> alert("Sign up button clicked")</script>';
		$ssn=$_POST['ssn'];
		$password=$_POST['password'];
		$cpassword=$_POST['cpassword'];
		
		if($password==$cpassword)
		{
			$query="select * from emp_account where ssn='$ssn'";
			$query_run=mysqli_query($con,$query);
			
			if(mysqli_num_rows($query_run)>0)
			{
				//there is already a user with same employee
				echo '<script type="text/javascript"> alert("user already exists... ")</script>';
				
			}
			else
			{
				$query="insert into emp_account values('$ssn','$password')";
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
   