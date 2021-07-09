<?php
	require'dbconfig/conf.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>enrollment Page</title>
<link rel="stylesheet" href="css/styling.css">
</head>
<body style="background-color:#F29933">

	<div id="main-wrapper">
	<center><h2>Employee Entry Form</h2></center>
	
	
	
        <form class="myform" action="add_employee.php" method="post">
	<label><b>Firstname:</b></label><br>
	<input name="firstname" type="text" class="inputvalue" placeholder="type the first name" required/><br>
	<label><b>Lastname:</b></label><br>
	<input name="lastname" type="text" class="inputvalue" placeholder="type the last name" required/><br>
	<br><label><b>Gender:</b></label>
	<input name="gender" type="radio" class="radio_btns" value="Male" checked required/> Male 
	<input name="gender" type="radio" class="radio_btns" value="Female" s required/> Female <br>
	<br><label><b>SSN:</b></label><br>
	<input name="ssn" type="text" class="inputvalue" placeholder="enter the ssn" required/><br>
	<br><label><b>Confirm SSN:</b></label><br>
	<input name="cssn" type="text" class="inputvalue" placeholder="confirm the ssn" required/><br>
	<br><label><b>Date of Birth:</b></label><br>
	<input type="date" name="dob" class="inputvalue" required/><br>
		<br><label><b>Department:</b></label><br>
       <input type="text" name="course" class="inputvalue" placeholder="enter your department" required/><br>
	<br><label><b>Department Number:</b></label><br>
	<input name="dep_no" type="text" class="inputvalue" placeholder="enter the dept number" required/><br>
	<label><b>Phone number:</b></label><br>
	<input name="phn_number" type="text" class="inputvalue" placeholder="enter the phone number" required/><br>
	<label><b>Address:</b></label><br>
	<input name="address" type="text" class="addresss" placeholder="enter the address" required/><br>
	<input name="submit_btn" type="submit" id="submitt_btn" value="SAVE"/><br>
	<a href="homepage.php"><input type="button" id="home_btn" value="Back"/></a><br>
   </form>
   
   <?php
	if(isset($_POST['submit_btn']))
	{
		//echo '<script type="text/javascript"> alert("Save button clicked")</script>';
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$gender=$_POST['gender'];
		$ssn=$_POST['ssn'];
		$cssn=$_POST['cssn'];
		$dob=$_POST['dob'];
		$course=$_POST['course'];
		$dep_no=$_POST['dep_no'];
		$phn_number=$_POST['phn_number'];		
		$address=$_POST['address'];
		
		if($ssn==$cssn)
		{
		
		    $query="select * from emp_details where ssn='$ssn'";
		    $query_run=mysqli_query($con,$query);
		
			if(mysqli_num_rows($query_run)>0)
			{
				//there is already a user with same ssn
				echo '<script type="text/javascript"> alert("employee already exists... try another ssn")</script>';
				
			}
			else
			{
				$query="insert into emp_details values('$firstname','$lastname','$gender','$ssn','$dob','$course','$dep_no','$phn_number','$address')";
				$query_run=mysqli_query($con,$query);
				
				if($query_run)
				{
					echo '<script type="text/javascript"> alert("employee successfully registered ")</script>';
				}
				else
				{
					echo '<script type="text/javascript"> alert("error")</script>';
				}
			}
	   }	
	   else
	    {
		    echo '<script type="text/javascript"> alert("ssn and confirm ssn does not match ")</script>';
		
	    }
	}
   ?>
	
	</div>
</body>
</html>
