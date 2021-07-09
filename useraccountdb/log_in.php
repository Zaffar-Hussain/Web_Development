<?php 
	require('dbfunct.php');
	//include('register.php');
	$msg='';
	$msg2='';
	if(isset($_REQUEST['submit']))
	{
		$uid=$_REQUEST['uid'];
		$pwd=$_REQUEST['password'];
		$type=$_REQUEST['type'];
		if(checkaccount($uid,$pwd)==true)
		{
			if(checkaccount_type($uid,$pwd,$type)==true)
			{
				if($type=='admin')
				{
					header('location:adminpage.php');
				}
				else
					$msg2="<font color=red>Invalid Account Type For Given User ID</font>";
				
			}
			else
			{
				if($type=='user')
				{
					header('location:userpage.php');
				}
				else
					$msg2="<font color=red>Invalid Account Type For Given User ID</font>";
			}
		}
		else
		{
			$msg='invalid credentials';
		}
		end:
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<center>
		<form name="form" action="" method="get">
			<h2>Welcome To Login Page</h2>
			User ID:
			<input type="text" name="uid" value=""><br><br>
			Password:
			<input type="password" name="password" value=""><br><br>
			Account Type:
			<input type="text" name="type" value=""><br><br>
			<?php echo $msg; ?>
			<?php echo $msg2; ?>
			<br><br><input type="submit" name="submit" value="Submit">
			<input type="reset" name="reset" value="reset"><br><br>
			<a href="forgotpwd.php"><input type="button" name="fpwd" value="Forgot Password?"></a><br><br>
			<a href="editpwd.php"><input type="button" name="epwd" value="Edit Password"></a><br><br>
			<a href="register.php"><input type="button" name="reg" value="Sign UP"></a>
		</form>
	</center>
</body>
</html>