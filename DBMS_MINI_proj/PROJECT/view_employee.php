<?php
	session_start();
	require'dbconfig/conf.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Display Employee</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#55efc4">

	<div id="main-wrapper">
	<center><h2>View Employee Details</h2></center>
	
	
	
	<form class="myform" action="view_employee.php" method="post">
	
	<label><b>SSN:</b></label><br>
	<input name="ssn" type="text" class="inputvalue" placeholder="enter the ssn of the Employee"/><br>
	<br><input name="view" type="submit" id="view_btn" value="View Employee Detail"/><br>
	<a href="homepage.php"><input type="button" id="home_btn" value="HOME"/></a><br>
	

	</form>
		<?php
	if(isset($_POST['view']))
	{
		$ssn=$_POST['ssn'];
		
		$query="select * from emp_details where ssn='$ssn'";
		
		$query_run=mysqli_query($con,$query);
		if(mysqli_num_rows($query_run)>0)
		{
			//valid
			$_SESSION['ssn']=$ssn;
			header('location:view_s.php');
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

