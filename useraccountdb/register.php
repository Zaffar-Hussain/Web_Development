<?php 
	require('dbfunct.php');
	$msg='';
	$msg2='';
	if(isset($_REQUEST['register']))
	{
		$id=$_REQUEST['uid'];
		$pwd=$_REQUEST['password'];
		$cpwd=$_REQUEST['cpassword'];
		$type=$_REQUEST['type'];
		$question=$_REQUEST['question'];
		$answer=$_REQUEST['answer'];
		if($pwd==$cpwd)
		{
			if(register($id,$pwd,$type,$question,$answer))
				$msg="<font color=green>Registered Successfully</font>";
			else
				$msg="<font color=red>unsuccessfull Registration</font>";
		}
		else
			$msg2="<font color=red>Confirm Password does Not Match the Password</font>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
</head>
<body>
	<center>
		<form name="form" action="" method="get">
			<h2>Welcome To Register Page</h2>
			User ID:
			<input type="text" name="uid" value=""><br><br>
			Password:
			<input type="password" name="password" value=""><br><br>
			Confirm Password:
			<input type="password" name="cpassword" value=""><br><br>
			Account Type:
			<input type="text" name="type" value=""><br><br>
			Select Security Question:
			<select name="question">
  				<option value="Name of the first school you studied?">Name of the first school you studied?</option>
  				<option value="Your nick name?">Your nick name?</option>
  				<option value="Favorite movie?">Favorite movie?</option>
  				<option value="Best friends name?">Best friends name?</option>
			</select><br><br>
			Answer For Security Question:
			<input type="text" name="answer" value=""><br><br>
			<br><br><input type="submit" name="register" value="Register">
			<input type="reset" name="reset" value="reset"><br><br>
			<?php echo $msg2; echo $msg; ?>
		</form>
	</center>
</body>
</html>