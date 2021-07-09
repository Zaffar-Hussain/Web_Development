<?php 
	require('dbfunct.php');
	session_start();
	$profdet=array("","","","","","","","","","","","","","","","");
	$msg1="";
	if(isset($_SESSION['uid']))
	{
		$id=$_SESSION['uid'];
		$profdet=getProfileDetails($id);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Display Profile</title>
	<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0 auto;
  background-image: url('image/pro2.png');
  background-size: cover;
  background-repeat: no-repeat;
}

.column {
 width:500px;
    height:690px;
    background-color:rgba(0,0,0,0.5);
    margin:0 auto;
    margin-top:100px;
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
    text-align: center;
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

</style>

</head>
<body>
	<div class="column">
	<center>
	<form name="form2" action="" method="get">
		<h1> Display Profile</h1>
		<table>
			<tr>
				<td>User ID:</td>
				<td><input type="text" name="uid" value="<?php if(isset($_SESSION['uid'])) echo $_SESSION['uid'] ?>" ></td>
				<!--<td><input type="submit" name="show" value="Submit ID"></td>!-->
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
		<td><a href="searchjobs.php"><input type="button" name="back" value="Back"></a></td>
		</tr>
		</table>
	</form>
	</center>
</div>
</body>
</html>