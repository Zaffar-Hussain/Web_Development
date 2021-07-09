<?php 
	require('dbfunct.php');
	$msg='';
	$msg2='';
	$msg3='';

	$profdet=array("","","","","","","","","","","","","","","","");
	$msg1="";
	if(isset($_REQUEST['show']))
	{
		$id=$_REQUEST['uid'];
		$pwd=$_REQUEST['pwd'];
		if(checkaccount($id,$pwd)==true)
		{
			$profdet=getProfileDetails($id);
		}
		else
			$msg="<font color=red>invalid credentials</font>";
	}

	
	if(isset($_REQUEST['edit']))
	{
		$uid=$_REQUEST['uid'];
		$pwd=$_REQUEST['pwd'];
		$cpwd=$_REQUEST['cpwd'];
		$type="user";
		$question=$_REQUEST['question'];
		$answer=$_REQUEST['answer'];
		$mob_no=$_REQUEST['mob_no'];
		$mail=$_REQUEST['mail'];
		$col_name=$_REQUEST['col_name'];
		$mark_10th=$_REQUEST['mark_10th'];
		$mark_12th=$_REQUEST['mark_12th'];
		$CGPA=$_REQUEST['CGPA'];
		$pass_year=$_REQUEST['pass_year'];
		$domain=$_REQUEST['domain'];
		$catagory=$_REQUEST['catagory'];
		$course=$_REQUEST['course'];
		$skills=$_REQUEST['skills'];
		$date=date('Y-m-d');

		if($pwd==$cpwd)
		{
			if(updateprofile($uid,$pwd,$question,$answer,$mob_no,$mail,$col_name,$mark_10th,$mark_12th,$CGPA,$pass_year,$domain,$catagory,$course,$skills))
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
	<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0 auto;
  background-image: url('image/ed2.png');
  background-size: cover;
  background-repeat: no-repeat;
}

.column {
 width:550px;
    height:800px;
    background-color:rgba(0,0,0,0.5);
    margin:0 auto;
    margin-top:50px;
    padding-top:30px;
    padding-left: 60px;
    border-radius:15px;
    color:#67e6dc;
    font-weight:bolder;

    box-shadow:inset 4px 4px rgba(0,0,0,20);
  
}
.column input[type="submit"]
  {
    width:100px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:skyblue;
    font-weight:bolder;
  }

    .column input[type="text"]
  {
    width:200px;
    height:25px;
    border:0;
    border-radius:5px;
    background-color:#a5b1c2;

  }

    .column input[type="button"]
  {
    width:100px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:skyblue;
    font-weight:bolder;  
}
    .column select
  {
    width:200px;
    height:25px;
    border:0;
    border-radius:5px;
    background-color:#a5b1c2;

  }
   .column input[type="password"]
  {
    width:200px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:#a5b1c2;
  }

</style>
</head>
<body>
	<div class="column">
	<center>
	<form name="form2" action="" method="post">
		<h1>Edit Your Profile</h1>
		<table>
			<tr>
				<td>User ID:</td>
				<td><input type="text" name="uid" value="<?php if(isset($_REQUEST['uid'])) echo $_REQUEST['uid'] ?>" required></td>
			</tr>
			<tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="pwd" value='' ></td>
				<!--<td><input type="submit" name="show" value="Submit"></td>!-->
			</tr><tr></tr><tr></tr><tr></tr>
			<tr><td></td><td><span><?php echo $msg;  ?></span></td></tr>
			<tr>
				<td>Confirm Password:</td>
				<td><input type="password" name="cpwd" value="" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Security Question:</td>
				<td><input type="text" name="question" value='<?php echo $profdet[3]; ?>' ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Answer For The Security Question:</td>
				<td><input type="text" name="answer" value='<?php echo $profdet[4]; ?>' ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Mobile Number:</td>
				<td><input type="text" name="mob_no" value='<?php echo $profdet[5]; ?>' ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Mail ID:</td>
				<td><input type="text" name="mail" value='<?php echo $profdet[6]; ?>' ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Collage Name:</td>
				<td><input type="text" name="col_name" value='<?php echo $profdet[7]; ?>' ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>10th Marks:</td>
				<td><input type="text" name="mark_10th" value='<?php echo $profdet[8]; ?>' ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>12th Marks:</td>
				<td><input type="text" name="mark_12th" value='<?php echo $profdet[9]; ?>' ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>CGPA:</td>
				<td><input type="text" name="CGPA" value='<?php echo $profdet[10]; ?>' ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Year Of Passing:</td>
				<td><input type="text" name="pass_year" value='<?php echo $profdet[11]; ?>' ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Domain:</td>
				<td><select style="width:173px;" name="domain" required>
					<option value="<?php echo $profdet[12]; ?>"><?php echo $profdet[12]; ?></option>
					<option value="IIT">IIT</option>
					<option value="Programming">Programming</option>
					<option value="Hospitality">Hospitality</option>
					<option value="Telecommunication">Telecommunication</option>
				</select></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>catagory:</td>
				<td><select style="width:173px;" name="catagory" required>
					<option value="<?php echo $profdet[13]; ?>"><?php echo $profdet[13]; ?></option>
					<option value="Fresher">Fresher</option>
					<option value="Walk-in">Walk-in</option>
					<option value="Govt">Govt</option>
					<option value="Engineering">Engineering</option>
				</select></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Course:</td>
				<td><select style="width:173px;" name="descipline" required>
					<option value="<?php echo $profdet[14]; ?>"><?php echo $profdet[14]; ?></option>
					<option value="Computer science">Computer science</option>
					<option value="Mechanical">Mechanical</option>
					<option value="Electrical and electronics">Electrical and electronics</option>
					<option value="Electronic and communication">Electronic and communication</option>
				</select></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Skills:</td>
				<td><select style="width:173px;" name="skills" required>
					<option value="<?php echo $profdet[15]; ?>"><?php echo $profdet[15]; ?></option>
					<option value="Networking">Networking</option>
					<option value="Software testing">Software testing</option>
					<option value="Oracle">Oracle</option>
					<option value="Web development">Web development</option>
				</select></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr><td></td><td>
		<input type="submit" name="edit" value="Edit"></td>
			</tr>
		</tr><tr></tr><tr></tr><tr></tr>
			<tr>
		<td></td><td><a href="searchjobs.php"><input type="button" name="back" value="Back"></a></td></tr>
		
		
		<tr><td></td>
			<td><span><?php echo $msg; ?>
				<?php echo $msg2; ?>
			</span></td>
		</tr>
		</table>
	</form>
	</center>
</div>
</body>
</html>