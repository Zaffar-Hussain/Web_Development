<?php
	session_start();
   $con= new mysqli("localhost","root","", 'dbproj') or die("unable to connect");

?>
<!DOCTYPE html>
<html>
<head>
<title>Delete Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#55efc4">

<div id="main-wrapper">
	<center><h2>Delete Employee Detail</h2></center>
<form class="myform" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
	
	<label><b>SSN:</b></label><br>
	<input name="ssn" type="text" class="inputvalue" placeholder="enter the ssn of the employee  "/><br>
	<input name="delete" type="submit" id="edit_btn" value="Delete Employee"/><br>
	<a href="homepage.php"><input type="button" id="home_btn" value="HOME"/></a><br>
</form>
	
 <?php
         if(isset($_POST['delete'])) {
		
            $ssn = $_POST['ssn'];
            
            $sql = "DELETE FROM `emp_details` WHERE `ssn`='$ssn'" ;
            
            if($con->query($sql)) {
              echo '<script type="text/javascript"> alert("Employee data deleted")</script>';
            }
            else{
				echo '<script type="text/javascript">alert("Error..")</script>';
            }

		 }
?>
  </div>
</body>
</html>
