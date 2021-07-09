<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Employee details</title>
<link rel="stylesheet" href="css/style1.css">
</head>
<body style="background-color:#F29933">


	<div id="main-wrapper">
	
	<center><h2>EMPLOYEE DETAILS MANAGEMENT FORM</h2></center>
	
	<form class="myform" action="homepage.php" method="post">
	<center><img src="image/img1.png"class="avatar"/></center>
	<a href="add_employee.php"><input name="add_employee" type="button" id="enroll_btn" value="Add Employee"/></a><br>
	<center><img src="image/view.jpg" class="avatar"/></center>
	<a href="view_employee.php"><input name="view_employee" type="button" id="enroll_btn" value="View Employee Details"/></a><br>
     <center><img src="image/edit.png"  class="avatar"/></center>
	<a href="edit_employee.php"><input name="edit_employee" type="button" id="enroll_btn" value="Update Employee details"/></a><br>
	   <center><img src="image/del.jpg"  class="avatar"/></center>
	<a href="delete_emp.php"><input name="delete" type="button" id="enroll_btn" value="Delete Employee Detail"/></a><br>
	<input name="logout" type="submit" id="logout_btn" value="Logout"/></a><br>
	
	</form>
	<?php
	if(isset($_POST['logout']))
	{
	session_destroy();
	header('location:start.php');
	}
	?>
	</div>
</body>
</html>
