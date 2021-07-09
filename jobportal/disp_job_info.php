<?php 
	require('dbfunct.php');
	$jobdet=array("","","","","","","","","","","","","","","","","");
	$msg1="";
	if(isset($_REQUEST['show']))
	{
		$jid=$_REQUEST['jid'];
		$jobdet=getjobDetails($jid);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Display Posted Job</title>
</head>
<body>
	<center>
	<form name="form2" action="" method="get">
		<h1>Display Posted Job</h1>
		<table>
			<tr>
				<td>Job ID:</td>
				<td><input type="text" name="jid" value="<?php if(isset($_REQUEST['jid'])) echo $_REQUEST['jid'] ?>" required></td>
				<td><input type="submit" name="show" value="Submit ID"></td>
			</tr>
			<tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Job Title:</td>
				<td><input type="text" name="j_title" value="<?php echo $jobdet[1]; ?>" readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Company Name:</td>
				<td><input type="text" name="c_name" value="<?php echo $jobdet[2]; ?>" readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Company Details:</td>
				<td><input type="text" name="c_det" value="<?php echo $jobdet[3]; ?>" readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Company Location:</td>
				<td><input type="text" name="c_loc" value="<?php echo $jobdet[4]; ?>" readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Number Of Vacancy:</td>
				<td><input type="text" name="no_of_vac" value="<?php echo $jobdet[5]; ?>" readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Experience Needed:</td>
				<td><input type="text" name="exp_needed" value="<?php echo $jobdet[6]; ?>" readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Package:</td>
				<td><input type="text" name="package" value="<?php echo $jobdet[7]; ?>" readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Job Description:</td>
				<td><input type="text" name="j_desc" value="<?php echo $jobdet[8]; ?>" readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Domain:</td>
				<td><input type="text" name="domain" value="<?php echo $jobdet[9]; ?>" readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Catagory:</td>
				<td><input type="text" name="catagory" value="<?php echo $jobdet[10]; ?>" readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Descipline:</td>
				<td><input type="text" name="descipline" value="<?php echo $jobdet[11]; ?>" readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Skills:</td>
				<td><input type="text" name="skills" value="<?php echo $jobdet[12]; ?>" readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Post Date:</td>
				<td><input type="text" name="post_date" value="<?php echo $jobdet[13]; ?>" readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>End Date:</td>
				<td><input type="text" name="end_date" value="<?php echo $jobdet[14]; ?>" readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Date Of Campus Interview:</td>
				<td><input type="text" name="date_of_camp_inter" value="<?php echo $jobdet[15]; ?>" readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Interview Requirements:</td>
				<td><input type="text" name="inter_req" value="<?php echo $jobdet[16]; ?>" readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr><td></td>
		<td><a href="login.php"><input type="button" name="back" value="Back">
		</tr>
		</table>
	</form>
	</center>
</body>
</html>