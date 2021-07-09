<?php
require('dbfunc.php');
$msg="";
if(isset($_REQUEST['submit']))
{
	$id=$_REQUEST['id'];
	$ques=$_REQUEST['ques'];
	$ans=$_REQUEST['ans'];

	if(!checkid($id))
	{
		$msg="<font color=red>Username doesnot exist...</font>";
	}
	else
	{
		$pwd=checkQA($id,$ques,$ans);
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
	FORGOT PASSWORD?<br><br>
	User ID:<input type="number" name="id"><br><br>
	Select a question:
	<select name="ques">
		<option >Select</option>
		<option  >who is your favourite author?</option>
		<option>which is your favourite color?</option>
		<option >nationality?</option>
		<option >what is your favourite food?</option>
		<option>when is your birthday?</option>
		<option>who is your favourite actor?</option>
		<option>which is your favourite place?</option>
	</select><br><br>
	Answer the question:<input type="text" name="ans"><br><br>
	<input type="submit" name="submit" value="Submit"><br><br>
	<a href="login.php">Go back</a></br>
</form>
<?php
echo "$msg<br>";
?>
</body>
</html>