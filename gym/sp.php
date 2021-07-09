<?php 
	require('funct.php');
	$msg='';
	$msg2='';
	$msg3='';
	
	if(isset($_REQUEST['submit']))
	{  
	    $S1=$_REQUEST['S1'];
		$S2=$_REQUEST['S2'];
		$S3=$_REQUEST['S3'];
		$S4=$_REQUEST['S4'];
		
		/*if ($_REQUEST['question']=='select') {
			echo '<script type="text/javascript">  alert("please select the Security question "); </script>';
		}*/
		if(service($S1,$S2,$S3,$S4))
		
				$msg="<font color=green>Prices added successfully</font>";


}
?>

 

<!DOCTYPE html>
<html>
<head>
	<title>Services and Prices</title>
</head>
<body >
	<center>
		
	<form name="form2" action="" method="get">
		<h1>Services and Prices</h1>
		<table>
			<tr><th>Services</th><th>Prices</th></tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>

				<td>1 month :</td>
				<td><input type="text" name="S1" value="" placeholder="Rs."></td>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>3 month :</td>
				<td><input type="text" name="S2" value=""placeholder="Rs." ></td>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>6 month :</td>
				<td><input type="text" name="S3" value="" placeholder="Rs."></td>
			</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>1 year  :</td>
				<td><input type="text" name="S4" value="" placeholder="Rs."></td>
			</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			
		<td><td><a href="login.php"><input type="button" name="back" value="Back"></a>&nbsp&nbsp&nbsp&nbsp
		<input type="submit" name="submit" value="submit"></td></td>
		
		</tr>
		</table>
		<tr><td></td>
			<td><span><?php echo $msg; ?>
				<?php echo $msg2;?>
			</span></td>
		</tr>
</form>
	</center>
</body>
</html>