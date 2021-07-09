<?php
	require('funct.php');
	$msg='';
	$msg2='';
	$msg3='';
	if(isset($_REQUEST['submit']))
	{
		$id=$_REQUEST['eid'];
		
		$answer=$_REQUEST['answer'];
		$pwd=forgotpwd($id,$answer);
		$msg="".$pwd;
	}


	if(isset($_REQUEST['submit_id']))
	{
		$id=$_REQUEST['eid'];
		if(checkid($id)==false)
			$msg3="User ID invalid";
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
<body bgcolor="#ffdd99">
	<center>
		<form name="form" action="" method="get">
			<h1 ><font color=red>Forgot Password?</font></h1>
			<h1><font color=green>Here's a Solution :)</font></h1>
			<h2><font color=blue>Submit the user ID and answer the security question correctly as answered during registration....</font></h2>
			User ID:
			<input type="text" name="eid" value="<?php if(isset($_REQUEST['eid'])) echo $_REQUEST['eid'] ?>">
			<input type="submit" name="submit_id" value="Submit ID"><br><br>
			<span >
				<?php 
					echo $msg3;
				?>
			</span>
			<span >
				<?php 
					echo "".$msg2;
				?>
			</span><br>
			
				<!--Select Security Question:
				<select name="question" required>
				<option value=""></option>
  				<option value="Name of the first school you studied?">Name of the first school you studied?</option>
  				<option value="Your nick name?">Your nick name?</option>
  				<option value="Favorite movie?">Favorite movie?</option>
  				<option value="Best friends name?">Best friends name?</option>
			</select><br><br><br><br><br>-->
		      <?php if(isset($_REQUEST['question'])) echo $_REQUEST['question'] ?>	<br>
			
			Answer:
			<input type="text" name="answer" value="<?php if(isset($_REQUEST['answer'])) echo $_REQUEST['answer'] ?>"></tr>	
			<input type="submit" name="submit" value="Submit"><br><br>
			<?php echo $msg ?><br><br>
			<a href="login.php"><input type="button" name="back" value="Back"></a>
		</form>
	</center>
</body>
</html>