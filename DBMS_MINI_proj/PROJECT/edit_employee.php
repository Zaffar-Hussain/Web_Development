<?php
	session_start();
	require'dbconfig/conf.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Editing Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#55efc4">

	<div id="main-wrapper">
	<center><h2>Update Employee Detail</h2></center>
	
	
	
	<form class="myform" action="edit_employee.php" method="post">
	
	<label><b>SSN:</b></label><br>
	<input name="ssn" type="text" class="inputvalue" placeholder="enter the ssn of the student "/><br>
	<input name="edit" type="submit" id="edit_btn" value="Update Employee"/><br>
	<a href="homepage.php"><input type="button" id="home_btn" value="HOME"/></a><br>
	

	</form>
	
 <?php
	if(isset($_POST['edit']))
	{
		$ssn=$_POST['ssn'];
		
		$query="select * from emp_details where ssn='$ssn'";
		
		$query_run=mysqli_query($con,$query);
		if(mysqli_num_rows($query_run)>0)
		{
			//valid
			$_SESSION['ssn']=$ssn;
			header('location:edit_s.php');
		}
		else
		{
			//invalid credential
			echo '<script type="text/javascript"> alert("invalid credential")</script>';

		}
	}
	?>
	
	</div>
</body>
</html>
