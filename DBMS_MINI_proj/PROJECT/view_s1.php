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
<title>display Page</title>
<link rel="stylesheet" href="css/styling.css">
</head>
<body style="background-color:#81ecec">

	<div id="main-wrapper">
	<center><h2>Employee Form</h2></center>
	
		
	<form class="myform" action="view_s1.php" method="post">
	<br><label><b>SSN:</b></label><br>
	<textarea name=ssn" rows="10" cols="30" style="width:430px;height:20px">
		<?php echo $_SESSION['ssn']?></textarea>
		Firstname:
	<input type="text" name="firstname" class="inputvalue" value="<?php echo $row['firstname']; ?>">
	<br>Lastname:
	<input type="text" name="lastname" class="inputvalue" value="<?php echo $row['lastname']; ?>"><br>
	<br>Gender:
	<input type="text" name="gender" class="inputvalue" value="<?php echo $row['gender']; ?>"><br>
	<br>Department:
	<input type="text" name="course" class="inputvalue" value="<?php echo $row['course']; ?>"><br>
	<br>Department Number:
	<input type="text" name="dep_no" class="inputvalue" value="<?php echo $row['dep_no']; ?>"><br>
	<br>phone number:
	<input type="text" name="phn_number" class="inputvalue" value="<?php echo $row['phn_number']; ?>"><br>
	<br>address:
	<input type="text" name="address" class="inputvalue" value="<?php echo $row['address']; ?>"><br>
	
	<input name="logout" type="submit" id="logout_btn" value="Back"/></a><br>
		
		</form>
	
	
	
 <?php
	if(isset($_POST['logout']))
	{
	session_destroy();
	header('location:view_emp.php');
	}
	?>
	
	</div>
</body>
</html>
	
	
	<?php
	
}

