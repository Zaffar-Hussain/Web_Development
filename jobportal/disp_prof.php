<?php 
	require('dbfunct.php');
	$profdet=array("","","","","","","","","","","","","","","","");
	$msg1="";
	if(isset($_REQUEST['show']))
	{
		$id=$_REQUEST['uid'];
		$profdet=getProfileDetails($id);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Display Profile</title>
</head>
<body>
	<center>
	<form name="form2" action="" method="get">
		<h1> Display Profile</h1>
		<table>
			<tr>
				<td>User ID:</td>
				<td><input type="text" name="uid" value="<?php if(isset($_REQUEST['uid'])) echo $_REQUEST['uid'] ?>" required></td>
				<td><input type="submit" name="show" value="Submit ID"></td>
			</tr>
			<tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Security Question:</td>
				<td><input type="text" name="question" value='<?php echo $profdet[3]; ?>' readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Answer For The Security Question:</td>
				<td><input type="text" name="answer" value='<?php echo $profdet[4]; ?>' readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Mobile Number:</td>
				<td><input type="text" name="mob_no" value='<?php echo $profdet[5]; ?>' readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Mail ID:</td>
				<td><input type="text" name="mail" value='<?php echo $profdet[6]; ?>' readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Collage Name:</td>
				<td><input type="text" name="col_name" value='<?php echo $profdet[7]; ?>' readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>10th Marks:</td>
				<td><input type="text" name="mark_10th" value='<?php echo $profdet[8]; ?>' readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>12th Marks:</td>
				<td><input type="text" name="mark_12th" value='<?php echo $profdet[9]; ?>' readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>CGPA:</td>
				<td><input type="text" name="CGPA" value='<?php echo $profdet[10]; ?>' readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Year Of Passing:</td>
				<td><input type="text" name="pass_year" value='<?php echo $profdet[11]; ?>' readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Domain:</td>
				<td><input type="text" name="domain" value='<?php echo $profdet[12]; ?>' readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>catagory:</td>
				<td><input type="text" name="catagory" value='<?php echo $profdet[13]; ?>' readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Course:</td>
				<td><input type="text" name="course" value='<?php echo $profdet[14]; ?>' readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Skills:</td>
				<td><input type="text" name="skills" value='<?php echo $profdet[15]; ?>' readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr><td></td>
		<td><a href="login.php"><input type="button" name="back" value="Back"></a>
		</tr>
		</table>
	</form>
	</center>
</body>
</html>