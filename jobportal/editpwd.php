<?php
	require('dbfunct.php');
	$msg='';
	$msg2='';
	if(isset($_REQUEST['submit']))
	{
	$uid=$_REQUEST['uid'];
	$pwd=$_REQUEST['opwd'];
	$npwd=$_REQUEST['npwd'];
	$cpwd=$_REQUEST['cpwd'];
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
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<center>
		<div>
		<form name="from" action="" method="get">
			<h1><font color=blue>Change Password</font></h1>
			<table>
			<tr>
			<td>User ID:</td>
			<td><input type="text" name="uid" value=""></td>
			</tr>
			<tr>
			<td>Old Password:</td>
			<td><input type="password" name="opwd" value=""></td>
			</tr>
			<tr>
			<td>New Password:</td>
			<td><input type="password" name="npwd" value=""></td>
			</tr>
			<tr>
			<td>Confirm Password:</td>
			<td><input type="password" name="cpwd" value=""></td>
			</tr>
		</table>
		<?php echo $msg; ?><br><br>
		<?php echo $msg2; ?><br><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	
		<a href="login.php"><input type="button" name="back" value="Back"></a>
		&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="Submit"><br><br>
			
		</form>
		</div>
	</center>
</body>
</html>