<?php
	require('dbfunct.php');
	session_start();
	$msg='';
	$msg2='';
	if(isset($_REQUEST['post']))
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
		
		if(post_job($jid,$j_title,$j_desc,$c_name,$c_det,$c_loc,$no_of_vac,$exp_needed,$package,$domain,$catagory,$descipline,$skills,$post_date,$end_date,$date_of_camp_inter,$inter_req))
			$msg="<font color=green>Job Posted Successfully</font>";
		else
			$msg="<font color=red>Job Posted unsuccessfully</font>";
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Job Posting Page</title>
	<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0 auto;
  background-image: url('image/pj1.jpg');
  background-size: cover;
  background-repeat: no-repeat;
}

.column {
 width:500px;
    height:750px;
    background-color:rgba(0,0,0,0.5);
    margin:0 auto;
    margin-top:210px;
    margin-left:680px;
    padding-top:20px;
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

</style>
</head>
<body>
	<div class="column">
	<center>
		<form name="form2" action="" method="get">
		<h1>Post the job</h1>
		<table>
			<tr>
				<td>Job Id:</td>
				<td><input type="text" name="jid" value="" ></td>
			</tr>
			<tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Job Title:</td>
				<td><input type="text" name="j_title" value="" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Company Name:</td>
				<td><input type="text" name="c_name" value="" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Company Details:</td>
				<td><input type="text" name="c_det" value="" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Company Location:</td>
				<td><input type="text" name="c_loc" value="" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Number Of Vacancy:</td>
				<td><input type="text" name="no_of_vac" value="" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Experience Needed:</td>
				<td><input type="text" name="exp_needed" value="" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Package:</td>
				<td><input type="text" name="package" value="" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Job Description:</td>
				<td><input type="text" name="j_desc" value="" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Domain:</td>
				<td><select style="width:173px;" name="domain" required>
					<option value=""></option>
					<option value="IIT">IIT</option>
					<option value="Programming">Programming</option>
					<option value="Hospitality">Hospitality</option>
					<option value="Telecommunication">Telecommunication</option>
				</select></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Catagory:</td>
				<td><select style="width:173px;" name="catagory" required>
					<option value=""></option>
					<option value="Fresher">Fresher</option>
					<option value="Walk-in">Walk-in</option>
					<option value="Govt">Govt</option>
					<option value="Engineering">Engineering</option>
				</select></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Descipline:</td>
				<td><select style="width:173px;" name="descipline" required>
					<option value=""></option>
					<option value="Computer science">Computer science</option>
					<option value="Mechanical">Mechanical</option>
					<option value="Electrical and electronics">Electrical and electronics</option>
					<option value="Electronic and communication">Electronic and communication</option>
				</select></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Skills:</td>
				<td><select style="width:173px;" name="skills" required>
					<option value=""></option>
					<option value="Networking">Networking</option>
					<option value="Software testing">Software testing</option>
					<option value="Oracle">Oracle</option>
					<option value="Web development">Web development</option>
				</select></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Post Date:</td>
				<td><input type="text" name="post_date" value="" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>End Date:</td>
				<td><input type="text" name="end_date" value="" required></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Date Of Campus Interview:</td>
				<td><input type="text" name="date_of_camp_inter" value="" required></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Interview Requirements:</td>
				<td><input type="text" name="inter_req" value="" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
		<tr><td></td>
		<td><a href="login.php"><input type="button" name="back" value="Back"></a>&nbsp&nbsp&nbsp&nbsp
		<input type="submit" name="post" value="Post Job"></td>
		</tr>
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