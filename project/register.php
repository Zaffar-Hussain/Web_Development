<?php
require('dbfunctions.php');
$msg="";
if(isset($_REQUEST['submit']))
{

	$user_id=$_REQUEST['user_id'];
	$pwd=$_REQUEST['pwd'];
	$pwd1=$_REQUEST['pwd1'];
	$email=$_REQUEST['email'];
	$phone=$_REQUEST['phone'];
	//$dob=$_REQUEST['dob'];
	//$gender=$_REQUEST['a'];
	$atype=$_REQUEST['atype'];
	$ques=$_REQUEST['ques'];
	$ans=$_REQUEST['ans'];
	$ustatus=$_REQUEST['ustatus'];

//	$reg=array("$fname","$lname","$id","$pwd","$email","$mno","$gender","$dob",)
	if($pwd==$pwd1)
	{
		if(setAccDetails($user_id,$pwd,$atype,$email,$phone,$ques,$ans,$ustatus))
			{
				$msg="<font color=green >Added Successfully!!!</font>";
				//header('location:user.php');
			}
		else
		{
			$msg="<font color=red >Not Added.....</font>";

		}
	}
	else
		{
			$msg="<font color=dark pink>Password and Confirm Password are not same.......";
		}

}
?>
<!DOCTYPE html>
<html>
<head>
	</head>
<body>
	<style type="text/css">
		label {
			float:left;
			width:100px;
		}
</style>
	<h1>Register Here!!!!</h1><br>
	<form name="Register" method="post" action="">
	<div>

	<strong> <label for="user_id">User Id:</label></strong><input type="text" required="Required" name="user_id">
</div><br><br>

	<div>
	<strong><label for="pwd">Password:</label></strong><input type="password" name="pwd" required="Required" minlength="4" maxlength="8"  title="Must contain more than 4 and less than 8 characters"></div><br><br>
	<strong>Confirm Password:</strong><input type="password" name="pwd1" required="Required"><br><br>
	<strong>Email:</strong><input type="email" required="Required" name="email"><br><br>
	<strong>Mobile no:</strong><input type="text" name="phone" required="Required"  maxlength="10"  pattern="[0-9]{10}" title="Enter your mobile number"><br><br>
	<br>
	<strong>user status:</strong><input type="text" required="Required" name="ustatus"><br><br>
	
	<strong>Select Account type:</strong>
		<select name="atype">
			<option>Select</option>
			<option>admin</option>
			<option>user</option>
		</select><br><br>
	<strong>Select one question:</strong>
		<select name="ques">
		<option >Select</option>
		<option >What is your pet's name?</option>
		<option >What is your nick name?</option>
		<option >What is your nationality?</option>
		<option >What is favourite food?</option>
		<option>When is your birthday?</option>
		<option>Who is your favourite actor?</option>
		<option>Which
		 is your favourite movie?</option>
	</select><br><br>
	<strong>	Answer the question:</strong><input type="text" name="ans"><br><br>

	
	<input type="submit" name="submit" value="Register">&nbsp;&nbsp;
	<input type="reset" name="reset"><br><br>
	
</form>
<?php
echo "$msg <br>";
?>

</body>
</html>