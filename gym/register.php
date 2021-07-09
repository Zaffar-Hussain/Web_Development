<?php 
	require('funct.php');
	$msg='';
	$msg2='';
	$msg3='';
	if(isset($_REQUEST['register']))
	{  
	    $name=$_REQUEST['name'];
		$eid=$_REQUEST['eid'];
		$pwd=$_REQUEST['pwd'];
		$cpwd=$_REQUEST['cpwd'];
		$type="user";
        $question=$_REQUEST['question'];
		$answer=$_REQUEST['answer'];
		
		/*if ($_REQUEST['question']=='select') {
			echo '<script type="text/javascript">  alert("please select the Security question "); </script>';
		}*/
		if($pwd==$cpwd)
		{
			if(register($name,$eid,$pwd,$question,$answer))
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
	<title>Registration</title>
</head>
<body style="background-image: url(image/4.jpg);background-repeat:no-repeat ;background-size:cover">
	<center>
		
	<form name="form2" action="" method="get">
		<h1>Welcome to Registration Page</h1>
		<table>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name" value="" required></td>
			</tr>
			<tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Email:</td>
				<td><input type="email" name="eid" value="" required></td>
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
			
		<td><td><a href="login.php"><input type="button" name="back" value="Back"></a>&nbsp&nbsp&nbsp&nbsp
		<input type="submit" name="register" value="Register"></td></td>
		</tr>
		</table>
		<tr><td></td>
			<td><span><?php echo $msg; ?>
				<?php echo $msg2; ?>
			</span></td>
		</tr>
</form>
	</center>
</body>
</html>