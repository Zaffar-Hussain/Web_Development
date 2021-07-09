<?php
	require'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>registration Page</title>
<link rel="stylesheet" href="css/styling.css">
</head>
<body style="background-color:#81ecec">

	<div id="main-wrapper">
	<center><h2>SIGN UP FORM</h2></center>
	<center>
	<img src="image/avatar.png" class="avatar"/>
	</center>
	
	
	<form class="myform" action="reg.php" method="post">
	<label><b>Admin:</b></label><br>
	<input name="admin" type="text" class="inputvalue" placeholder="type admin name" required/><br>
	<label><b>Password:</b></label><br>
	<input name="password" type="password" class="inputvalue" placeholder="your password" required/><br>
	<label><b>Confirm Password:</b></label><br>
	<input name="cpassword" type="password" class="inputvalue" placeholder="cofirm password" required/><br>
	<label><b>Select Security Question:</b></label><br>
	<select name="question" class="inputvalue" placeholder="select security question">
  		<option value="volvo">Name of the first school you studied?</option>
  		<option value="saab">Your nick name?</option>
  		<option value="opel">Favorite movie?</option>
  		<option value="audi">Best friends name?</option>
	</select>
	<label><b>Answer the Security Question:</b></label><br>
	<input name="answer" type="text" class="inputvalue" placeholder="type your answer"/><br>
	<input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"/><br>
	<a href="index.php"><input type="button" id="back_btn" value="Back"/></a><br>
   </form>
   
   <?php
	if(isset($_POST['submit_btn']))
	{
		//echo '<script type="text/javascript"> alert("Sign up button clicked")</script>';
		$admin=$_POST['admin'];
		$password=$_POST['password'];
		$cpassword=$_POST['cpassword'];
		
		if($password==$cpassword)
		{
			$query="select * from admininfo where admin='$admin' AND password='$password'";
			$query_run=mysqli_query($con,$query);
			
			if(mysqli_num_rows($query_run)>0)
			{
				//there is already a user with same admin
				echo '<script type="text/javascript"> alert("user already exhists... try another admin")</script>';
				
			}
			else
			{
				$query="insert into admininfo values('$admin','$password')";
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
