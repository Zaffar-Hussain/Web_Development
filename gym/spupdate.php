<?php 
	require('funct.php');
	$msg='';
	$msg2='';
	$msg3='';
$spdet=array("","","","");
	//if(isset($_REQUEST['show']))
	//{
           
			
	   // }
if(isset($_REQUEST['edit']))
	{
		$S1=$_REQUEST['S1'];
		$S2=$_REQUEST['S2'];
		$S3=$_REQUEST['S3'];
		$S4=$_REQUEST['S4'];
        
			if(updatesp($S1,$S2,$S3,$S4))
				$msg="<font color=green>Editted Successfully</font>";
			else
				$msg="<font color=red>Edition is Unsuccessfull</font>";
		
		
	}
	?>
	<!DOCTYPE html>
<html>
<head>
	<title>Services and Prices</title>
</head>
<body style="background-image: url(image/1.jpg);background-repeat:no-repeat ;background-size:cover" >
	<center>
		
	<form name="form2" action="" method="get">
		<h1>Services and Prices</h1>
		<table>
			<?php
				$spdet=getspDetailstodisplay();
				foreach ($spdet as $det)
				{
			  	echo "<tr><th>Services</th><th>Prices</th></tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>

				<td>1 month :</td>
				<td><input type='text' name='S1' value=$det[0] ></td>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>3 month :</td>
				<td><input type='text' name='S2' value=$det[1] ></td>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>6 month :</td>
				<td><input type='text' name='S3' value=$det[2]></td>
			</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>1 year  :</td>
				<td><input type='text' name='S4' value=$det[3]></td>
			</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>";
			}
			echo "
		<td><td><a href='login.php'><input type='button' name='back' value='Back'></a>&nbsp&nbsp&nbsp&nbsp
		<input type='submit' name='edit' value='Edit'></td></td><br>
		</tr>
		</table>
		<tr><td></td>
			<td><span>
			$msg";
			?>
				<?php echo $msg2;?>
			</span></td>
		</tr>
</form>
	</center>
</body>
</html>