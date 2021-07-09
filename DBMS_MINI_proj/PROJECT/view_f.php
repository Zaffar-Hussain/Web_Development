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

$yup=$_SESSION['id'];

$result=mysqli_query($conn,"select firstname,lastname,gender,id,department,phn_number,address from facultydetails as f where f.id='$yup' LIMIT 1");
	

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
	<center><h2>Faculty Form</h2></center>
	
		
	<form class="myform" action="view_f.php" method="post">
	<br><label><b>ID:</b></label><br>
	<textarea name="id" rows="10" cols="30" style="width:430px;height:20px">
		<?php echo $_SESSION['id']?>
		</textarea>
		firstname:
	<input type="text" name="firstname" class="inputvalue" value="<?php echo $row['firstname']; ?>">
	<br>lastname:
	<input type="text" name="lasttname" class="inputvalue" value="<?php echo $row['lastname']; ?>"><br>
	<br>gender:
	<input type="text" name="gender" class="inputvalue" value="<?php echo $row['gender']; ?>"><br>
	<br>department:
	<input type="text" name="department" class="inputvalue" value="<?php echo $row['department']; ?>"><br>
	<br>phn_number:
	<input type="text" name="phn_number" class="inputvalue" value="<?php echo $row['phn_number']; ?>"><br>
	<br>address:
	<input type="text" name="address" class="inputvalue" value="<?php echo $row['address']; ?>"><br>
	
	<input name="logout" type="submit" id="logout_btn" value="Logout"/></a><br>
		
		</form>
	
	
	
 <?php
	if(isset($_POST['logout']))
	{
	session_destroy();
	header('location:view_faculty.php');
	}
	?>
	
	</div>
</body>
</html>
	
	
	<?php
	
}

