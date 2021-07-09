<?php 
	require('dbfunct.php');
	$msg='';
	$msg2='';
	$msg3='';
	if(isset($_REQUEST['show']))
	{
		$id=$_REQUEST['uid'];
		$profdet=getProfiledetails($id);
	}
	else 
		$msg1="please select id";

	
	if(isset($_REQUEST['register']))
	{
		$uid=$_REQUEST['uid'];
		$pwd=$_REQUEST['pwd'];
		$cpwd=$_REQUEST['cpwd'];
		$type=$_REQUEST['type'];
		$m_no=$_REQUEST['m_no'];
		$c_name=$_REQUEST['c_name'];
		$c_det=$_REQUEST['c_det'];
		$question=$_REQUEST['question'];
		$answer=$_REQUEST['answer'];
		$location=$_REQUEST['location'];
		$mail=$_REQUEST['mail'];
		$date=date('Y-m-d');
		/*if ($_REQUEST['question']=='select') {
			echo '<script type="text/javascript">  alert("please select the Security question "); </script>';
		}*/
		if($pwd==$cpwd)
		{
			if(update($uid,$pwd,$type,$m_no,$c_name,$c_det,$question,$answer,$location,$mail,$date))
				$msg="<font color=green>Editted Successfully</font>";
			else
				$msg="<font color=red>Editted Unsuccessfully</font>";
		}
		else
			$msg2="<font color=red>Confirm Password does Not Match the Password</font>";
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
</head>
<body>
	<center>
	<form name="form2" action="" method="get">
		<h1>Edit Your Profile</h1>
		<table>
			<tr>
				<td>User ID:</td>
				<td><input type="text" name="uid" value="<?php if(isset($_REQUEST['uid'])) echo $_REQUEST['uid'] ?>" required></td>
				<td><input type="submit" name="show" value="Submit ID"></td>
			</tr>
			<tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="pwd" value="" required></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Confirm Password:</td>
				<td><input type="password" name="cpwd" value="" required></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Type:</td>
				<td><input type="text" name="type" value="" required></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Mobile Number:</td>
				<td><input type="text" name="m_no" value="" required></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Company Name:</td>
				<td><input type="text" name="c_name" value=""></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Company Details:</td>
				<td><input type="text" name="c_det" value=""></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Select Security Question:</td>
				<td><select name="question" required>
				<option value=""></option>
  				<option value="Name of the first school you studied?">Name of the first school you studied?</option>
  				<option value="Your nick name?">Your nick name?</option>
  				<option value="Favorite movie?">Favorite movie?</option>
  				<option value="Best friends name?">Best friends name?</option>
			</select></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Answer For The Security Question:</td>
				<td><input type="text" name="answer" value="" required></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Location:</td>
				<td><input type="text" name="location" value="" required></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Mail ID:</td>
				<td><input type="text" name="mail" value="" required></td>
			</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
		<tr><td></td>
		<td><a href="login.php"><input type="button" name="back" value="Back"></a>&nbsp&nbsp&nbsp&nbsp
		<input type="submit" name="register" value="Register"></td>
		</tr>
		<tr><td></td>
			<td><span><?php echo $msg; ?>
				<?php echo $msg2; ?>
			</span></td>
		</tr>
		</table>
	</form>
	</center>
</body>
</html>