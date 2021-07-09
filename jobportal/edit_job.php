<?php 
	require('dbfunct.php');
	$msg='';
	$msg2='';
	$msg3='';

	$jobdet=array("","","","","","","","","","","","","","","","","");
	$msg1="";
	if(isset($_REQUEST['show']))
	{
		$jid=$_REQUEST['jid'];
		$jobdet=getjobDetails($jid);
	}

	
	if(isset($_REQUEST['edit']))
	{
		$jid=$_REQUEST['jid'];
		$j_title=$_REQUEST['j_title'];
		$c_name=$_REQUEST['c_name'];
		$c_det=$_REQUEST['c_det'];
		$c_loc=$_REQUEST['c_loc'];
		$no_of_vac=$_REQUEST['no_of_vac'];
		$exp_needed=$_REQUEST['exp_needed'];
		$package=$_REQUEST['package'];
		$j_desc=$_REQUEST['j_desc'];
		$domain=$_REQUEST['domain'];
		$catagory=$_REQUEST['catagory'];
		$descipline=$_REQUEST['descipline'];
		$skills=$_REQUEST['skills'];
		$post_date=$_REQUEST['post_date'];
		$end_date=$_REQUEST['end_date'];
		$date_of_camp_inter=$_REQUEST['date_of_camp_inter'];
		$inter_req=$_REQUEST['inter_req'];
		if(updatejob($jid,$j_title,$c_name,$c_det,$c_loc,$no_of_vac,$exp_needed,$package,$j_desc,$domain,$catagory,$descipline,$skills,$post_date,$end_date,$date_of_camp_inter,$inter_req))
				$msg="<font color=green>Editted Successfully</font>";
		else
			$msg="<font color=red>Editted Unsuccessfully</font>";
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Posted Job</title>
</head>
<body>
	<center>
	<form name="form2" action="" method="get">
		<h1>Edit Posted Job</h1>
		<table>
			<tr>
				<td>Job ID:</td>
				<td><input type="text" name="jid" value="<?php if(isset($_REQUEST['jid'])) echo $_REQUEST['jid'] ?>" required></td>
				<td><input type="submit" name="show" value="Submit ID"></td>
			</tr>
			<tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Job Title:</td>
				<td><input type="text" name="j_title" value="<?php echo $jobdet[1]; ?>" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Company Name:</td>
				<td><input type="text" name="c_name" value="<?php echo $jobdet[2]; ?>" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Company Details:</td>
				<td><input type="text" name="c_det" value="<?php echo $jobdet[3]; ?>" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Company Location:</td>
				<td><input type="text" name="c_loc" value="<?php echo $jobdet[4]; ?>" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Number Of Vacancy:</td>
				<td><input type="text" name="no_of_vac" value="<?php echo $jobdet[5]; ?>" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Experience Needed:</td>
				<td><input type="text" name="exp_needed" value="<?php echo $jobdet[6]; ?>" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Package:</td>
				<td><input type="text" name="package" value="<?php echo $jobdet[7]; ?>" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Job Description:</td>
				<td><input type="text" name="j_desc" value="<?php echo $jobdet[8]; ?>" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Domain:</td>
				<td><select style="width:173px;" name="domain" >
					<option value="<?php echo $jobdet[9]; ?>"><?php echo $jobdet[9]; ?></option>
					<option value="IIT">IIT</option>
					<option value="Programming">Programming</option>
					<option value="Hospitality">Hospitality</option>
					<option value="Telecommunication">Telecommunication</option>
				</select></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Catagory:</td>
				<td><select style="width:173px;" name="catagory" required>
					<option value="<?php echo $jobdet[10]; ?>"><?php echo $jobdet[10]; ?></option>
					<option value="Fresher">Fresher</option>
					<option value="Walk-in">Walk-in</option>
					<option value="Govt">Govt</option>
					<option value="Engineering">Engineering</option>
				</select></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Descipline:</td>
				<td><select style="width:173px;" name="descipline" required>
					<option value="<?php echo $jobdet[11]; ?>"><?php echo $jobdet[11]; ?></option>
					<option value="Computer science">Computer science</option>
					<option value="Mechanical">Mechanical</option>
					<option value="Electrical and electronics">Electrical and electronics</option>
					<option value="Electronic and communication">Electronic and communication</option>
				</select></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Skills:</td>
				<td><select style="width:173px;" name="skills" required>
					<option value="<?php echo $jobdet[12]; ?>"><?php echo $jobdet[12]; ?></option>
					<option value="Networking">Networking</option>
					<option value="Software testing">Software testing</option>
					<option value="Oracle">Oracle</option>
					<option value="Web development">Web development</option>
				</select></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Post Date:</td>
				<td><input type="text" name="post_date" value="<?php echo $jobdet[13]; ?>" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>End Date:</td>
				<td><input type="text" name="end_date" value="<?php echo $jobdet[14]; ?>" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Date Of Campus Interview:</td>
				<td><input type="text" name="date_of_camp_inter" value="<?php echo $jobdet[15]; ?>" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Interview Requirements:</td>
				<td><input type="text" name="inter_req" value="<?php echo $jobdet[16]; ?>" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr><td></td>
		<td><a href="login.php"><input type="button" name="back" value="Back"></a>&nbsp&nbsp&nbsp&nbsp
		<input type="submit" name="edit" value="Edit"></td>
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