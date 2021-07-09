<?php
require('dbfunctions.php');
$msg="";
if(isset($_REQUEST['change']))
{
	$user_id=$_REQUEST['user_id'];
	$pwd=$_REQUEST['pwd'];
	$pwd1=$_REQUEST['pwd1'];
	$pwd2=$_REQUEST['pwd2'];
	if(!checkid($user_id)){
		$msg="<font color=red>Username doesnot exist...</font>";
	}
		
	else
	{
   		if(retrievePass($user_id)!=$pwd)
   		{
   			$msg="<font color=red>Password mismatch</font>";
   		}
  		else
  		{
			if($pwd1==$pwd2)
			{
				if(changePass($user_id,$pwd1))
				{
					$msg="<font color=green >Password changed</font>";
				}
				else
				{
					$msg="<font color=red >Failed</font>";

				}
			}
			else
			{
				$msg="<font color=dark pink>Password and Confirm Password are not same.......";
			}
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
<form name="change" method="post" action="">
	<strong>User name:</strong><input type="number" name="user_id"><br><br>
	<strong>Old Password:</strong><input type="password" name="pwd"><br><br>
	<strong>New Password:</strong><input type="password" name="pwd1" minlength="8" maxlength="15"  title="Must contain more than 8 and less than 15 characters"><br><br>
	<strong>Confirm New Password:</strong><input type="password" name="pwd2"><br><br>
	<input type="submit" name="change" value="Change" ><br><br>

</form>
<?php
echo "$msg <br>";
?>
</body>
</html>