<?php
	require('dbfunct.php');
	$msg='';
	$msg2='';
	if(isset($_REQUEST['submit']))
	{
		$id=$_REQUEST['uid'];
		$answer=$_REQUEST['answer'];
		$pwd=forgotpwd($id,$answer);
		$msg="".$pwd;
	}


	if(isset($_REQUEST['submit_id']))
	{
		$id=$_REQUEST['uid'];
		$answer=$_REQUEST['answer'];
		$question=question($id);
		$msg2="".$question;
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Find Password</title>
</head>
<body>
	<center>
		<form name="form" action="" method="get">
			<h1 ><font color=red>Forgot Password?</font></h1>
			<h1><font color=green>Here's a Solution :)</font></h1>
			<h2><font color=blue>Submit the user ID and answer the security question correctly as answered during registration....</font></h2>
			User ID:
			<input type="text" name="uid" value="<?php if(isset($_REQUEST['uid'])) echo $_REQUEST['uid'] ?>">
			<input type="submit" name="submit_id" value="Submit ID"><br><br>
			<span >
				<?php 
					echo "".$msg2;
				?>
			</span><br><br>
			Answer:
			<input type="text" name="answer" value="<?php if(isset($_REQUEST['answer'])) echo $_REQUEST['answer'] ?>">	
			<input type="submit" name="submit" value="Submit"><br><br>
			<?php echo $msg ?><br><br>
			<a href="login.php"><input type="button" name="back" value="Back"></a>
		</form>
	</center>
</body>
</html>