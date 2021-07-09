<?php
	session_start();
	require'dbconfig/conf.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Display Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#55efc4">

  <div id="main-wrapper">
	<center><h2>view faculty detail</h2></center>
	
	
	
	<form class="myform" action="view_faculty.php" method="post">
	
	 <label><b>ID:</b></label><br>
	 <input name="id" type="text" class="inputvalue" placeholder="enter the id of the faculty "/><br>
	 <br><input name="view" type="submit" id="view_btn" value="View faculty detail"/><br>
	 <a href="homepage.php"><input type="button" id="home_btn" value="HOME"/></a><br>
	

	</form>
	
	<?php
	if(isset($_POST['view']))
	{
		$id=$_POST['id'];
		
		$query="select * from facultydetails where id='$id'";
		
		$query_run=mysqli_query($con,$query);
		if(mysqli_num_rows($query_run)>0)
		{
			//valid
			$_SESSION['id']=$id;
			header('location:view_f.php');
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
