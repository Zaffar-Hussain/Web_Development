<?php
	require('dbfunct.php');
	$msg='';
	$msg2='';
	$uid=$_REQUEST['uid'];
	$pwd=$_REQUEST['opwd'];
	$npwd=$_REQUEST['npwd'];
	$cpwd=$_REQUEST['cpwd'];
	if(isset($_REQUEST['submit']))
	{
		if(checkaccount($uid,$pwd)==true)
		{
			if($npwd==$cpwd)
			{
			if(changepwd($uid,$pwd,$npwd)==true)
				$msg="Password Changed Successfully";				
			else
				$msg="There is a problem on changingg password";
			}
			else
				$msg="new password and confirm password dont match ";
		}
		else
			$msg2="<font color=red>Invalid Credentials (User ID or Old Password is Incorrect)</font>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Password</title>
</head>
<body>
	<center>
		<form name="from" action="" method="get">
			<h1><font color=blue>Change Password</font></h1>
			User ID:
			<input type="text" name="uid" value=""><br><br>
			Old Password:
			<input type="password" name="opwd" value=""><br><br>
			New Password:
			<input type="password" name="npwd" value=""><br><br>
			Confirm Password:
			<input type="password" name="cpwd" value=""><br><br>
			<?php echo $msg; ?><br><br>
			<?php echo $msg2; ?><br><br>
			<input type="submit" name="submit" value="Submit"><br><br>
		</form>
	</center>
</body>
</html>