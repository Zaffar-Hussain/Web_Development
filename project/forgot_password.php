<?php
require('dbfunctions.php');
$msg="";
if(isset($_REQUEST['submit']))
{
	$user_id=$_REQUEST['user_id'];
	$ques=$_REQUEST['ques'];
	$ans=$_REQUEST['ans'];

	if(!checkid($user_id))
	{
		$msg="<font color=red>Username doesnot exist...</font>";
	}
	else
	{
		$pwd=checkQA($user_id,$ques,$ans);
		if($pwd)
		{
			$msg="<font color=green>Your password is ".$pwd." </font>";
		}
		else
		{
			$msg="<font color=red>Question and Answer not matched</font>";
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form name="forgot" method="post" action="" >
	<strong>FORGOT PASSWORD?</strong><br><br>
	<strong>Username:</strong><input type="number" name="user_id"><br><br>
	<strong>Select a question:</strong>
	<select name="ques">
		<option >Select</option>
		<option  >what is your pet's name?</option>
		<option>What is your nick name?</option>
		<option >nationality?</option>
		<option >What is your favourite food?</option>
		<option>When is your birthday?</option>
		<option>Who is your favourite actor?</option>
		<option>Which is your favourite movie?</option>
	</select><br><br>
	<strong>Answer the question:</strong><input type="text" name="ans"><br><br>
	<input type="submit" name="submit" value="Submit"><br><br>
	
</form>
<?php
echo "$msg<br>";
?>
</body>
</html>