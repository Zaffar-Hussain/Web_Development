<?php
	require('dbfunct.php');
	session_start();
	$msg='';
	$msg2='';
	if(isset($_REQUEST['submit']))
	{
		$_SESSION['uid']=$_REQUEST['uid'];
		$uid=$_REQUEST['uid'];
		$pwd=$_REQUEST['pwd'];
		$type=$_REQUEST['type'];
		if(checkaccount($uid,$pwd)==true)
		{
			if(checkaccount_type($uid,$type)==true)
			{
				if($type=='admin')
				{
					$_SESSION['uid']=$uid;
					header('location:postjob.php');
				}
				elseif($type=='user')
				{
					$_SESSION['uid']=$uid;
					header('location:searchjobs.php');
				}
				else
					$msg2="<font color=red>Invalid Account Type For Given User ID</font>";
				
			}
			else
				$msg2="<font color=red>Invalid Account Type For Given User ID</font>";
		}
		else
		{
			$msg='invalid credentials';
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	
		 
         <div style = "background-color:PaleGoldenRod; height:100%; width:20%; float: left; ">
             <a href="login.php">Login</a><br>
             <a href="aboutus.php">About Us</a><br>
             <a href="faqs.php">FAQ's</a><br>
             <a href="logout.php">Logout</a>
         </div>
         <div style = "background-color:#eee; height:100%; width:60%; float: left;" >
	<center>
	<form name="form1" action="" method="get">
		<h1>Welcome to Login Page </h1>
		<table>
			<tr>
				<td>User ID:</td>
				<td><input type="text" name="uid" value=""></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="pwd" value=""></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Type:</td>
				<td><select name="type">
					<option value=""></option>
					<option value="admin">admin</option>
					<option value="user">user</option>
				</select></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr><td></td><td><?php echo $msg; ?></td></tr>
		</table>
		<br><br>&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="Login">
		<a href="register.php"><input type="button" name="register" value="Register"></a><br><br>
		&nbsp&nbsp&nbsp&nbsp<a href="forgotpwd.php"><input type="button" name="fpwd" value="Forgot Password?"></a><br><br>
		&nbsp&nbsp&nbsp&nbsp<a href="editpwd.php"><input type="button" name="epwd" value="Edit Password"></a><br><br>
	</form>
	</center>
</div>
<div style = "background-color:PaleGoldenRod; height:100%; width:20%; float:right;  ">
            ADS<br>
            INFO<br>
            NEWS
         </div> 
<div style = "background-color:lightgrey;  clear:both; ">
    <center>
      Project by [ Fathima Sunitha Thushar Zafar ]
    </center>
</div>  

</body>
</html>