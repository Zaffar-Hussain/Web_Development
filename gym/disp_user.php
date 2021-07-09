<?php 
	require('funct.php');
	
	$msg='';
	$msg2='';
	$msg3='';

	$profdet=array("","","","","","","","","");
	$msg1="";
	if(isset($_REQUEST['show']))
	{
		$mail=$_REQUEST['mail'];
		if(getProfileDetails($mail)==true)
		{
			$profdet=getProfileDetails($mail);
			$msg2="Displayed Successfully";
		}
		else
			$msg2="Invalid Mail id";

	}
	?>
	<!DOCTYPE html>
<html>
<head>
	<title>display Profile</title>
</head>
<body style="background-image: url(image/1.jpg);background-repeat:no-repeat ;background-size:cover">
	<center>
	<form name="form2" action="" method="get">
		<h1>Display Your Profile</h1>
		<table>
			<tr>
				<tr>
					<td>Mail ID:</td>
				<td><input type="text" name="mail" value="<?php if(isset($_REQUEST['mail'])) echo $_REQUEST['mail'] ?>" required  ></td>
				<td><input type="submit" name="show" value="Submit ID"></td>
				
			</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<td>Name:</td>
				<td><input type="text" name="name" value='<?php echo $profdet[0]; ?>'readonly ></td>
				
			</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Mobile Number:</td>
				<td><input type="text" name="mob_no" value='<?php echo $profdet[2]; ?>'readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Gender:</td>
				<td><input type="text" name="gender" value='<?php echo $profdet[3]; ?>'readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Membership Time:</td>
				<td><input type="text" name="memb_time" value='<?php echo $profdet[4]; ?>'readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Join Date:</td>
				<td><input type="text" name="join_date" value='<?php echo $profdet[5]; ?>'readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Gym Time:</td>
				<td><input type="text" name="gym_time" value='<?php echo $profdet[6]; ?>'readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Occupation:</td>
				<td><input type="text" name="occup" value='<?php echo $profdet[7]; ?>' readonly></td>
			</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Fees Mode:</td>
				<td><input type="text" name="f_mode" value='<?php echo $profdet[8]; ?>' readonly></td>
			</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
		<td><td><a href="all.php"><input type="button" name="back" value="Back"></a>&nbsp&nbsp&nbsp&nbsp
		</tr></td>
		<tr><td></td>
			<td><span>
				<?php echo $msg2; ?>
			</span></td>
		</tr>
		</table>
	</form>
	</center>
</body>
</html>