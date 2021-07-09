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
	
	<form class="myform" action="homepage2.php" method="post">
	<center><img src="image/view.jpg" class="avatar"/></center>
	<a href="view_emp.php"/><input name="view_employee" type="button" id="enroll_btn" value="View Employee Details"/><br>
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
