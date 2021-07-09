<?php 
	require('funct.php');
	$msg='';
	$msg2='';
	$msg3='';
	$profdet=array("","","","","","","","","","","","","","");
	$msg1="";
	if(isset($_REQUEST['show']))
	{
		$mail=$_REQUEST['mail'];
		
		if(getProfileDetails($mail)==true)
		{
           
			$profdet=getProfileDetails($mail);
	    }
		else
			$msg="invalid Mail Id";
	}
        if(isset($_REQUEST['edit']))
	{
		$name=$_REQUEST['name'];
		$mail=$_REQUEST['mail'];
		$mob_no=$_REQUEST['mob_no'];
		$gender=$_REQUEST['gender'];
		$memb_time=$_REQUEST['memb_time'];
		$join_date=$_REQUEST['join_date'];
		$gym_time=$_REQUEST['gym_time'];
		$occup=$_REQUEST['occup'];
		$f_mode=$_REQUEST['f_mode'];
        
			if(updateprofile($name,$mail,$mob_no,$gender,$memb_time,$join_date,$gym_time,$occup,$f_mode))
				$msg="<font color=green>Editted Successfully</font>";
			else
				$msg="<font color=red>Edition is Unsuccessfull</font>";
		
		
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
		<h1>Edit Your Profile</h1>
		<table>
			<tr>
				<tr>
					<td>Mail ID:</td>
				<td><input type="text" name="mail" value="<?php if(isset($_REQUEST['mail'])) echo $_REQUEST['mail'] ?>" required  ></td>
				<td><input type="submit" name="show" value="Submit id"></td>
				
			</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>

			<td>Name:</td>
				<td><input type="text" name="name" value='<?php echo $profdet[0]; ?>'></td>
				
			</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Mobile Number:</td>
				<td><input type="text" name="mob_no" value='<?php echo $profdet[2]; ?>' ></td>
			</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Gender:</td>
				<td><input type="text" name="gender" value='<?php echo $profdet[3]; ?>' ></td>
				<tr><td><td><input type="radio" name="gender" value="Male">male
					<input type="radio" name="gender" value="Female">Female
				</td></td></tr>
			</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Membership Time:</td>
				<td><input type="text" name="memb_time" value='<?php echo $profdet[4]; ?>' ></td>
			</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Join Date:</td>
				<td><input type="Date" name="join_date" value='<?php echo $profdet[5]; ?>' ></td>
			</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Gym Time:</td>
				<td><input type="text" name="gym_time" value='<?php echo $profdet[6]; ?>' ></td>
			</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Occupation:</td>
				<td><input type="text" name="occup" value='<?php echo $profdet[7]; ?>' ></td>
			</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Fees Mode:</td>
				<td><input type="text" name="f_mode" value='<?php echo $profdet[8]; ?>' readonly></td>
				<tr><td><td><input type="radio" name="f_mode" value="Month">Month<br></td>
				</td></tr></tr>
				<tr><td><td><input type="radio" name="f_mode" value="Half-Year">Half-Year<br></td></td></tr>
				 <tr><td><td> <input type="radio" name="f_mode" value="Year">Year<br></td></td></tr>
			</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
		<td><td><a href="all.php"><input type="button" name="back" value="Back"></a>&nbsp&nbsp&nbsp&nbsp
		<input type="submit" name="edit" value="Edit"></td></td>
		</tr>
		<tr><td><td><span><?php echo $msg; ?>
			</span></td></td>
			<td></td>
		</tr>
		</table>
	</form>
	</center>
</body>
</html>