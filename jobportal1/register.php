<?php 
	require('dbfunct.php');
	$msg='';
	$msg2='';
	$msg3='';
	if(isset($_REQUEST['register']))
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
		$user_registered="yes";
		/*if ($_REQUEST['question']=='select') {
			echo '<script type="text/javascript">  alert("please select the Security question "); </script>';
		}*/
		if($pwd==$cpwd)
		{
			if(register($uid,$pwd,$type,$question,$answer,$mob_no,$mail,$col_name,$mark_10th,$mark_12th,$CGPA,$pass_year,$domain,$catagory,$course,$skills,$date,$user_registered))
				$msg="<font color=green>Registered Successfully</font>";
			else
				$msg="<font color=red>unsuccessfull Registration</font>";
		}
		else
			$msg2="<font color=red>Confirm Password does Not Match the Password</font>";
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0 auto;
  background-image: url('image/reg1.jpg');
  background-size: cover;
  background-repeat: no-repeat;
}

.column {
 width:550px;
    height:750px;
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
		
	<form name="form2" action="" method="get">
		<h1>Welcome to Registration Page</h1>
		<table>
			<tr>
				<td>USN:</td>
				<td><input type="text" name="uid" value="" required></td>
			</tr>
			<tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="pwd" value="" required></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Confirm Password:</td>
				<td><input type="password" name="cpwd" value="" required></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Select Security Question:</td>
				<td><select name="question" style="width:173px;" required>
				<option value=""></option>
  				<option value="Name of the first school you studied?">Name of the first school you studied?</option>
  				<option value="Your nick name?">Your nick name?</option>
  				<option value="Favorite movie?">Favorite movie?</option>
  				<option value="Best friends name?">Best friends name?</option>
			</select></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Answer For The Security Question:</td>
				<td><input type="text" name="answer" value="" required></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Mobile Number:</td>
				<td><input type="text" name="mob_no" value="" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Mail ID:</td>
				<td><input type="text" name="mail" value="" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Collage Name:</td>
				<td><input type="text" name="col_name" value="" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>10th Marks:</td>
				<td><input type="text" name="mark_10th" value="" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>12th Marks:</td>
				<td><input type="text" name="mark_12th" value="" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>CGPA:</td>
				<td><input type="text" name="CGPA" value="" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Year Of Passing:</td>
				<td><input type="text" name="pass_year" value="" ></td>
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
		<tr><td></td>
		<td><a href="login.php"><input type="button" name="back" value="Back"></a>&nbsp&nbsp&nbsp&nbsp
		<input type="submit" name="register" value="Register"></td>
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