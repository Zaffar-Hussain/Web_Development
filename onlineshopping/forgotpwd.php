<?php
	require('dbfunct.php');
	$msg='';
	$msg2='';
	$id=$_REQUEST['uid'];
	$answer=$_REQUEST['answer'];
	if(isset($_REQUEST['submit']))
	{
		$pwd=forgotpwd($id,$answer);
		$msg="".$pwd;
	}


	if(isset($_REQUEST['submit_id']))
	{
		$question=question($id);
		$msg2="".$question;
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
</head>
<body>
	<center>
		<form name="form" action="" method="get">
			<h1 ><font color=red>Forgot Password?</font></h1>
			<h1><font color=green>Here's a Solution :)</font></h1>
			<h2><font color=blue>Submit the user ID and answer the question correctly..</font></h2>
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
		</form>
	</center>
</body>
</html>