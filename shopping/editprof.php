<?php
	require('dbfunc.php');
	$msg="";
	$updet=array("","","","");
	$msg="";
	$edit="";
	$msg='';
	$msg2='';
	$msg3='';

	$profdet=array("","","");
	$msg1="";
	if(isset($_REQUEST['submit']))
	{
		$id=$_REQUEST['user_id'];
		$profdet=getUserDetails($id);
	}




	/*if(isset($_REQUEST['upid']))
	{
	  $edit=$_REQUEST['upid'];
	  $updet=getUserDetails($edit);
	  
	}*/
	
	if(isset($_REQUEST['update']))
	{
		$user_id=$_REQUEST['user_id'];
		$user_email=$_REQUEST['user_email'];
		$user_contact=$_REQUEST['user_contact'];
		$user_address=$_REQUEST['user_address'];
		
		if(updateUserInfo($user_id,$user_email,$user_contact,$user_address))
		{
			$msg="<font color=green>Updated successfully</font>";
			//clearform();
		}
		else
			$msg="<font color=red> Not Updated</font>";
	}
?>
<html>
<body>
	<form name="upd" method="get">
	USER ID: <input type="text" name="user_id"   value='<?php if(isset($_REQUEST['user_id'])) echo $_REQUEST['user_id'] ?>'>
	<input type="submit" name="submit" value="submit"><br><br>	
	User Email:<input type="text" name="user_email"   value='<?php echo $profdet[1]; ?>'><br><br>
	User Contact:<input type="text"  name="user_contact"  value='<?php echo $profdet[2]; ?>'><br><br>
	User Address:<input type="text" name="user_address"   value='<?php echo $profdet[3]; ?>'><br><br>
<input type="submit" name="update" value="Update"><br><br>
<a href="changepwd.php">change password?</a></br>
	
	<?php 
	echo $msg ; 
	?>
		</form>
</body>
</html>