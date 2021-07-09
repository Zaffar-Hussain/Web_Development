<?php
	require('dbfunc.php');
	$msg="";
	$id=getNewUserid();
	if(isset($_REQUEST['submit']))
	{
		$name=$_REQUEST['name'];
		$email=$_REQUEST['email'];
		$pwd=$_REQUEST['pwd'];
		$atype=$_REQUEST['atype'];
		$ques=$_REQUEST['ques'];
		$ans=$_REQUEST['ans'];
		$contact=$_REQUEST['contact'];
		$address=$_REQUEST['address'];
		if(addUser($name,$email,$pwd,$atype,$ques,$ans,$contact,$address))
			$msg="<font color=green> Added </font>";
		else
			$msg="<font color=red> Not Added </font>";
			
	
	}
?>
<html>
<head>
</head>
<body>
	<a href="login.php">Go Back</a>
	<center>
	<b><H2>REGISTRATION FORM</H2></b>

	
	<form method="post" action="" >
		<!-- <img src="" width="40%" height="40%"><br></br>-->
		New User ID:<span id=span1 name=id>
			<?php 
				
				echo $id;
			?>
		</span><br></br>
		Name: <input type="text" name="name" size="10"><br></br>
		Mail-ID: <input type="email" name="email" size="10"><br></br>
		Password: <input type="password" name="pwd" size="10"><br></br>
		Account type: <input type="text" name="atype" list="atype" size="10">
		<datalist id="atype">
			<option value="user"></option>
			<option value="admin"></option>
			
		</datalist><br></br>
		Question:
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
		
		Answer: <input type="text" name="ans" size="10"><br></br>
		Contact: <input type="text" name="contact" size="10"><br></br>
		Address: <input type="text" name="address" size="10"><br></br>
		<input type="submit" name="submit" value="Sign Up">
		<input type="reset" name="Reset">
		</center>
	</form>
	<?php 
	echo $msg ;
	 ?>
</body>
</html>