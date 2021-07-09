<?php
	require'dbconfig/conf.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>enrollment Page</title>
<link rel="stylesheet" href="css/styling.css">
</head>
<body style="background-color:#81ecec">

	<div id="main-wrapper">
	<center><h2>Faculty Entry Form</h2></center>
	
	
	
	<form class="myform" action="enroll_faculty.php" method="post">
	<label><b>firstname:</b></label><br>
	<input name="firstname" type="text" class="inputvalue" placeholder="type the first name" required/><br>
	<label><b>lastname:</b></label><br>
	<input name="lastname" type="text" class="inputvalue" placeholder="type the last name" required/><br>
	<br><label><b>Gender:</b></label>
	<input name="gender" type="radio" class="radio_btns" value="Male" checked required/> Male 
	<input name="gender" type="radio" class="radio_btns" value="Female"  required/> Female <br>
	<br><label><b>ID:</b></label><br>
	<input name="id" type="text" class="inputvalue" placeholder="enter the id" required/><br>
	<br><label><b>CONFIRM ID:</b></label><br>
	<input name="cid" type="text" class="inputvalue" placeholder="confirm the id" required/><br>
		<br><label><b>DEPARTMENT:</b></label><br>
        <select name="department" class="coursee">
		<option value="computer science and engineering">computer science and engineering</option>
		<option value="information science and enginering">information science and engineering</option>
		<option value="electronics and communication">electronics and communication</option>
		<option value="electrical and electronics">electrical and electronics</option>
		<option value="mechanical engineering">mechanical engineering</option>
		</select><br>
	
	<br><label><b>phone number:</b></label><br>
	<input name="phn_number" type="text" class="inputvalue" placeholder="enter the phone number" required/><br>
	<label><b>address:</b></label><br>
	<input name="address" type="text" class="addresss" placeholder="enter the address" required/><br>
	<input name="submit_btn" type="submit" id="submitt_btn" value="Submit"/><br>
	<a href="homepage.php"><input type="button" id="home_btn" value="HOME"/></a><br>
   </form>
   
   <?php
	if(isset($_POST['submit_btn']))
	{
		//echo '<script type="text/javascript"> alert("Sign up button clicked")</script>';
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$gender=$_POST['gender'];
		$id=$_POST['id'];
		$cid=$_POST['cid'];
		$department=$_POST['department'];
		$phn_number=$_POST['phn_number'];
		$address=$_POST['address'];
		
		if($id==$cid)
		{
		
		    $query="select * from facultydetails where id='$id'";
		    $query_run=mysqli_query($con,$query);
		
			if(mysqli_num_rows($query_run)>0)
			{
				//there is already a user with same admin
				echo '<script type="text/javascript"> alert("faculty already exhists... try another id")</script>';
				
			}
			else
			{
				$query="insert into facultydetails values('$firstname','$lastname','$gender','$id','$department','$phn_number','$address')";
				$query_run=mysqli_query($con,$query);
				
				if($query_run)
				{
					echo '<script type="text/javascript"> alert("faculty details entered.. go to home page for other options ")</script>';
				}
				else
				{
					echo '<script type="text/javascript"> alert("error")</script>';
				}
			}
	   }	
	   else
	    {
		    echo '<script type="text/javascript"> alert("id and confirm id does not match ")</script>';
		
	    }
	}
   ?>
	
	</div>
</body>
</html>
