<?php 
require('dbfunct.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Search For Jobs</title>
	<link rel="stylesheet" href="css/style.css">	
</head>
<body>
	<form name=show method=get action="">
		<div style="background-color: #27ae60; text-align: left;"><br>
		<font color="white">Search Job By &nbsp&nbsp&nbsp&nbsp</font>	
		<font color="white">Category:</font>
		<select name=catg >
			<option> choose</option>
			<?php
				$catgs=getjobCatg();
				$catg="";
				if(isset($_REQUEST['catg']))
					$catg=$_REQUEST['catg'];
				foreach ($catgs as  $value) 
				{
					if($catg==$value)
					echo "<option selected>".$value."</option>";
					else
					echo "<option>".$value."</option>";
			
				}



			?>

		</select>

		<font color="white">Domain:</font>
		<select name=dom >
			<option> choose</option>
			<?php
				$doms=getjobdom();
				$dom="";
				if(isset($_REQUEST['dom']))
					$dom=$_REQUEST['dom'];
				foreach ($doms as  $value) 
				{
					if($dom==$value)
					echo "<option selected>".$value."</option>";
					else
					echo "<option>".$value."</option>";
			
				}



			?>

		</select>

		<font color="white">Course:</font>
		<select name=cor >
			<option> choose</option>
			<?php
				$cors=getjobcor();
				$cor="";
				if(isset($_REQUEST['cor']))
					$cor=$_REQUEST['cor'];
				foreach ($cors as  $value) 
				{
					if($cor==$value)
					echo "<option selected>".$value."</option>";
					else
					echo "<option>".$value."</option>";
			
				}



			?>

		</select>

		<font color="white">Skills:</font>
		<select name=skill >
			<option> choose</option>
			<?php
				$skills=getjobskill();
				$skill="";
				if(isset($_REQUEST['skill']))
					$skill=$_REQUEST['skill'];
				foreach ($skills as  $value) 
				{
					if($skill==$value)
					echo "<option selected>".$value."</option>";
					else
					echo "<option>".$value."</option>";
			
				}



			?>

		</select>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="submit" name="search" value="search"><br><br>
		</div><br>
			
		<?php
		$msg="";
		$catg=$dom=$cor=$skill="";
		$pdets=array();
		if(isset($_REQUEST['search']))
		{
			
			if(isset($_REQUEST['catg']))
			{	
				if($_REQUEST['catg']=="choose")
					$catg=null;
				else
					$catg=$_REQUEST['catg'];
			}

			if(isset($_REQUEST['dom']))
			{
				if($_REQUEST['dom']=="choose")
					$dom=null;
				else
					$dom=$_REQUEST['dom'];
			}

			if(isset($_REQUEST['cor']))
			{
				if($_REQUEST['cor']=="choose")
					$cor=null;
				else
					$cor=$_REQUEST['cor'];
			}

			if(isset($_REQUEST['skill']))
			{
				if($_REQUEST['skill']=="choose")
					$skill=null;
				else
					$skill=$_REQUEST['skill'];
			}
					$pdets=getpostedjobs($catg,$dom,$cor,$skill);
					$i=0;
					foreach ($pdets as $pdet)
					{
						$str2="<div style=background-color:#bdc3c7;border-radius:10px;border-color:#2c3e50;><center><table><tr><td>jid</td><td>$pdet[0]</td></tr>";
						$str2=$str2."<tr><td>Job available from</td><td>$pdet[13]</td><td>To:</td><td>$pdet[14]</td></tr>";
						$str2=$str2."<tr><td>Job title</td><td>$pdet[1]</td></tr>";

						$str2=$str2."<tr><td>Job description</td><td>$pdet[2]</td></tr>";
						$str2=$str2."<tr><td>Company name</td><td>$pdet[3]</td></tr>";
						$str2=$str2."<tr><td>Company details</td><td>$pdet[4]</td></tr>";
						$str2=$str2."<tr><td>Location</td><td>$pdet[5]</td></tr>";
						$str2=$str2."<tr><td>Number of vacancy</td><td>$pdet[6]</td></tr>";
						$str2=$str2."<tr><td>experience needed</td><td>$pdet[7]years</td></tr>";
						$str2=$str2."<tr><td>package</td><td>$pdet[8]</td></tr>";
						$str2=$str2."<tr><td>domain</td><td>$pdet[9]</td></tr>";
						$str2=$str2."<tr><td>catagory</td><td>$pdet[10]</td></tr>";
						$str2=$str2."<tr><td>course</td><td>$pdet[11]</td></tr>";
						$str2=$str2."<tr><td>skills</td><td>$pdet[12]</td></tr>";
						
						$str2=$str2."<tr><td>campus interview date</td><td>$pdet[15]</td></tr>";
						$str2=$str2."<tr><td>interview requirements</td><td>$pdet[16]</td></tr>";
						$str2=$str2."<tr><td></td><td><input type=button name=apply value=apply></td></tr></table></center></div><br>";


						echo $str2;
					}
			
		}


		?>



</form>
<form name=all method=get action="" onload="this.form.submit()">
	<input type="submit" name="display" id="display_button" value="CLICK HERE TO DISPLAY ALL AVAILABLE JOBS"><br><br>

	<?php
	$msg="";
	$disp="yes";
	$pdets2=array();
	if(isset($_REQUEST['display']))
	{
					$pdets2=getjobDetailstodisplay($disp);
					$i=0;
					foreach ($pdets2 as $pdet)
					{
						$str2="<div style=background-color:#bdc3c7;border-radius:10px;border:2px solid #2c3e50;><center><table><tr><td>jid</td><td>$pdet[0]</td></tr>";
						$str2=$str2."<tr><td><font color=red>Job available from</font></td><td>$pdet[13]</td><td>To:</td><td>$pdet[14]</td></tr>";
						$str2=$str2."<tr><td>Job title</td><td>$pdet[1]</td></tr>";

						$str2=$str2."<tr><td>Job description</td><td>$pdet[2]</td></tr>";
						$str2=$str2."<tr><td>Company name</td><td>$pdet[3]</td></tr>";
						$str2=$str2."<tr><td>Company details</td><td>$pdet[4]</td></tr>";
						$str2=$str2."<tr><td>Location</td><td>$pdet[5]</td></tr>";
						$str2=$str2."<tr><td>Number of vacancy</td><td>$pdet[6]</td></tr>";
						$str2=$str2."<tr><td>experience needed</td><td>$pdet[7]years</td></tr>";
						$str2=$str2."<tr><td>package</td><td>$pdet[8]</td></tr>";
						$str2=$str2."<tr><td>domain</td><td>$pdet[9]</td></tr>";
						$str2=$str2."<tr><td>catagory</td><td>$pdet[10]</td></tr>";
						$str2=$str2."<tr><td>course</td><td>$pdet[11]</td></tr>";
						$str2=$str2."<tr><td>skills</td><td>$pdet[12]</td></tr>";
						
						$str2=$str2."<tr><td>campus interview date</td><td>$pdet[15]</td></tr>";
						$str2=$str2."<tr><td>interview requirements</td><td>$pdet[16]</td></tr>";
						$str2=$str2."<tr><td></td><td><input type=button name=apply value=apply></td></tr></table></center></div><br>";


						echo $str2;
					}

	}
	?>


	</form>
</body>
</html>