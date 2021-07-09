<?php
	session_start();
	$servername="localhost";
$username="root";
$password="";
$dbname="projectdbstudent";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
	die('connection error:'.mysqli_connect_error);
}

$connectDb=mysqli_select_db($conn,'projectdbstudent');

$nop=$_SESSION['usn'];

$result=mysqli_query($conn,"select firstname,lastname,gender,ssn,dob,course,dep_no,phn_number,address from emp_details as s where s.ssn='$nop' LIMIT 1");



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
	<center><h2>Emplpoyee Details</h2></center>
	
		
	<form class="myform" action="edit_s.php" method="post">
	<br><label><b>SSN:</b></label><br>
	<input type="text" name="ssn" class="inputvalue" placeholder="<?php echo $row['ssn']; ?>">
	<br>firstname:
	<input type="text" name="firstname" class="inputvalue" placeholder="<?php echo $row['firstname']; ?>">
	<br>lastname:
	<input type="text" name="lasttname" class="inputvalue" placeholder="<?php echo $row['lastname']; ?>"><br>
	<br>gender:
	<input type="text" name="gender" class="inputvalue" placeholder="<?php echo $row['gender']; ?>"><br>
    <br>Date of Birth :
    <input type="date" name="dob" placeholder="<?php ech0 $row['gender']; ?>"><br>
	<br>Department:
	<input type="text" name="course" class="inputvalue" placeholder="<?php echo $row['course']; ?>"><br>
	<br>Department Number:
	<input type="text" name="dep_no" class="inputvalue" placeholder="<?php echo $row['dep_no']; ?>"><br>
	<br>phn_number:
	<input type="text" name="phn_number" class="inputvalue" placeholder="<?php echo $row['phn_number']; ?>"><br>
	<br>address:
	<input type="text" name="address" class="inputvalue" placeholder="<?php echo $row['address']; ?>"><br>
	
		
	<input name="submit_btn" type="submit" id="submitt_btn" value="Submit"/><br>
	<input name="logout" type="submit" id="logout_btn" value="Logout"/></a><br>
		
		</form>
	
	
	
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

