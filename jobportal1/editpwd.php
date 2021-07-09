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
	<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0 auto;
  background-image: url('image/pwd1.jpg');
  background-size: cover;
  background-repeat: no-repeat;
}

.column {
 width:500px;
    height:400px;
    background-color:rgba(0,0,0,0.5);
    margin:0 auto;
    margin-top:100px;
    padding-top:30px;
    padding-left: 60px;
    border-radius:15px;
    color:white;
    font-weight:bolder;
    box-shadow:inset 4px 4px rgba(0,0,0,20);
  
}
.column input[type="submit"]
  {
    width:100px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:skyblue;
    font-weight:bolder;
  }
  .column input[type="button"]
  {
    width:100px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:skyblue;
    font-weight:bolder;
  }
   .column input[type="text"]
  {
    width:200px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:white;
  }
  .column input[type="password"]
  {
    width:200px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:white;
  }
</style>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<center>
		<div class="column">
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