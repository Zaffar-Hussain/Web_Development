<?php
	session_start();
	$servername="localhost";
$username="root";
$password="";
$dbname="dbproj";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
	die('connection error:'.mysqli_connect_error);
}

$connectDb=mysqli_select_db($conn,'dbproj');

$nop=$_SESSION['ssn'];

$result=mysqli_query($conn,"select firstname,lastname,gender,ssn,dob,course,dep_no,phn_number,address from emp_details as s where s.ssn='$nop' LIMIT 1");



while($row=mysqli_fetch_array($result))
{
	
?>
<!DOCTYPE html>
<html>
<head>
<title>UPDATE PAGE</title>
<link rel="stylesheet" href="css/styling.css">
</head>
<body style="background-color:#81ecec">

	<div id="main-wrapper">
	<center><h2>Update Employee Details Form</h2></center>
	
		
	<form class="myform" action="edit_s.php" method="post">
	
	<br>Firstname:
	<input type="text" name="firstname" class="inputvalue" placeholder="<?php echo $row['firstname']; ?>">
	<br>Lastname:
	<input type="text" name="lastname" class="inputvalue" placeholder="<?php echo $row['lastname']; ?>"><br>
	<br>Gender:
	<input name="gender" type="radio" class="radio_btns" value="Male" checked required/> Male 
	<input name="gender" type="radio" class="radio_btns" value="Female"  required/> Female <br>
	<br><label><b>SSN:</b></label><br>
	<input type="text" name="ssn" class="inputvalue" placeholder="<?php echo $row['ssn']; ?>" >
	<br><label><b>CONFIRM SSN:</b></label><br>
	<input type="text" name="cssn" class="inputvalue" placeholder="<?php echo $row['ssn']; ?>" >
	<br><label><b>Date of Birth:</b></label><br>
	<input type="date" name="dob" class="inputvalue" placeholder="<?php echo $row['dob'];?>">
	<br>Department:
	 <input name="course" class="inputvalue" placeholder="<?php echo $row['course']; ?>">
	
	<br>Department Number:
	<input type="text" name="dep_no" class="inputvalue" placeholder="<?php echo $row['dep_no']; ?>"><br>
	<br>Phone_number:
	<input type="text" name="phn_number" class="inputvalue" placeholder="<?php echo $row['phn_number']; ?>"><br>
	<br>Address:
	<input type="text" name="address" class="inputvalue" placeholder="<?php echo $row['address']; ?>"><br>
	
		
	<input name="submit_btn" type="submit" id="submitt_btn" value="Submit"/><br>
	<a href="edit_employee.php"><input name="logout" type="button" id="logout_btn" value="Back"/></a><br>
		
		</form>
	
	<?php
	if(isset($_POST['submit_btn']))
	{
		//echo '<script type="text/javascript"> alert("Sign up button clicked")</script>';
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
			$np=$_SESSION['ssn'];
		    $query="select * from emp_details where ssn='$np' LIMIT 1";
		    $query_run=mysqli_query($conn,$query);
		
			if(mysqli_num_rows($query_run)>0)
			{	
				$p=$_SESSION['ssn'];
				$query="UPDATE emp_details set firstname='$firstname',lastname='$lastname',gender='$gender',ssn='$ssn',dob='$dob',course='$course',dep_no='$dep_no',phn_number='$phn_number',address='$address' WHERE ssn='$p' LIMIT 1";
				$query_run=mysqli_query($conn,$query);
				
				if($query_run)
				{
					echo '<script type="text/javascript"> alert("Employee details updated..  ")</script>';
				}
				else
				{
					echo '<script type="text/javascript"> alert("error")</script>';
				}
			}
			else
			{
				//there is no user with same ssn
				echo '<script type="text/javascript"> alert("Employee does not exists... try another ssn")</script>';
				
			}
	   }	
	   else
	    {
		    echo '<script type="text/javascript"> alert("ssn and confirm ssn does not match ")</script>';
		
	    }
	}
   ?>
	
 <?php
	if(isset($_POST['logout']))
	{
	session_destroy();
	header('location:edit_employee.php');
	}
	?>
	
	</div>
</body>
</html>
	
	
	<?php
	
}

