<?php
	require('dbfunctions.php');
	$msg="";
	$usersdet=array("","","","");
	
	if(isset($_REQUEST['show']))
	{
		$user_id=$_REQUEST['user_id'];
		$usersdet=getUserDetails($user_id);
	}
	if(isset($_REQUEST['update']))
	{
		$user_id=$_REQUEST['user_id'];
		$pwd=$_REQUEST['pwd'];
		$email=$_REQUEST['email'];
		$phone=$_REQUEST['phone'];
		
		if(updateUserInfo($user_id,$pwd,$email,$phone))
		{
			$msg="<font color=green>Updated successfully</font>";
			
		}
		else
			$msg="<font color=red> Not Updated</font>";
	}
?>
<html>
<body>
	<form name="upd" method="get">
	USER ID: <input type="text" name="user_id" size="10" value='<?php if(isset($_REQUEST['user_id'])) echo $_REQUEST['user_id']; ?>'>
		
	
	
		<input type="submit" name="show" value="show"><br><br>
	PASSWORD: <input type="text" name="pwd" size="10" value='<?php echo $usersdet[1]; ?>'><br><br>
	EMAIL: <input type="text" name="email" size="10" value='<?php echo $usersdet[2]; ?>'><br><br>
	PHONE: <input type="text" name="phone" size="10" value='<?php echo $usersdet[3]; ?>'><br><br>
	

	<input type="submit" name="update" value="update"></br>
	
	<?php 
	echo $msg ; 
	?>
		</form>
</body>
</html>