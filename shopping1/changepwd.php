<?php
require('dbfunc.php');
$msg="";
if(isset($_REQUEST['change']))
{
	$id=$_REQUEST['id'];
	$pwd=$_REQUEST['pwd'];
	$pwd1=$_REQUEST['pwd1'];
	$pwd2=$_REQUEST['pwd2'];
	if(!checkid($id)){
		$msg="<font color=red>Username doesnot exist</font>";
	}
		
	else
	{
   		if(retrievePass($id)!=$pwd)
   		{
   			$msg="<font color=red>Password mismatch</font>";
   		}
  		else
  		{
			if($pwd1==$pwd2)
			{
				if(changePass($id,$pwd1))
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
				$msg="<font color=dark pink>Password and Confirm Password are not same.";
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
	User name:<input type="number" name="id"><br><br>
	Old Password:<input type="password" name="pwd"><br><br>
	New Password:<input type="password" name="pwd1"  ><br><br>
	Confirm New Password:<input type="password" name="pwd2"><br><br>
	<input type="submit" name="change" value="Change" ><br><br>
	<a href="products.php">Go back</a></br>
</form>
<?php
echo "$msg <br>";
?>
</body>
</html>