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

$result=mysqli_query($conn,"select firstname,lastname,gender,dob,course,dep_no,phn_number,address from emp_details as s where s.ssn='$nop' LIMIT 1");
	

while($row=mysqli_fetch_array($result))
{
	
?>

<!DOCTYPE html>
<html>
<head>
<title>display Page</title>
<link rel="stylesheet" href="css/styling.css">
</head>
<body style="background-color:#81ecec">

	<div id="main-wrapper">
	<center><h2>Employee Form</h2></center>
	
		
	<form class="myform" action="view_s.php" method="post">
	<br><label><b>SSN:</b></label><br>
	<input type="text" name="ssn" class="inputvalue" value="<?php echo $_SESSION['ssn']?>"/>
	<br><b>Firstname:</b>
	<input type="text" name="firstname" class="inputvalue" value="<?php echo $row['firstname']; ?>">
	<br><b>Lastname:</b>
	<input type="text" name="lastname" class="inputvalue" value="<?php echo $row['lastname']; ?>"><br>
	<br><b>Gender:</b>
	<input type="text" name="gender" class="inputvalue" value="<?php echo $row['gender']; ?>"><br>
	<br><b>Department:</b>
	<input type="text" name="course" class="inputvalue" value="<?php echo $row['course']; ?>"><br>
	<br><b>Department Number:</b>
	<input type="text" name="dep_no" class="inputvalue" value="<?php echo $row['dep_no']; ?>"><br>
	<br><b>phone number:</b>
	<input type="text" name="phn_number" class="inputvalue" value="<?php echo $row['phn_number']; ?>"><br>
	<br><b>address:</b>
	<input type="text" name="address" class="inputvalue" value="<?php echo $row['address']; ?>"><br>
	
	<input name="logout" type="submit" id="logout_btn" value="Back"/></a><br>
		
		</form>
	
	
	
 <?php
	if(isset($_POST['logout']))
	{
	session_destroy();
	header('location:view_employee.php');
	}
	?>
	
	</div>
</body>
</html>
	
	
	<?php
	
}

