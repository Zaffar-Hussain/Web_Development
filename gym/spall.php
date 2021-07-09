<!DOCTYPE html>
<html>
<head>
	<title>Search For Jobs</title>
	<link rel="stylesheet" href="css/style.css">
	<table>
	<form name=show method=get action="">

		<input  style=" position:absolute; top:-45px; left:700px"  class=btn type="submit" name="display" id="display_button" value=" ALL USER"><br>
		<tr><tr><tr></tr></tr></tr>
		<div style="text-align:right; "><br>
		</select>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		

</div></form></head></html>
<?php 
require('funct.php');
session_start();
//$uid=$_SESSION['uid'];
$appl_msg="";
$kali="";
$kalii="";
$jobids=array();$k=0;
?>


<?php
	$msg="";
	$disp="yes";
	$pdets2=array('','','','');$i=0;
	//if(isset($_REQUEST['display']))
	//{
		$pdets2=getspDetailstodisplay();
		echo "<div style= background-color:lightblue;width:100%;><table><tr style= background-color:orange;><th><strong>Name</strong></th><th><strong>Mail Id</strong></th><th><strong>Mobile No</strong></th><th><strong>Gender</strong></th><th><strong>Membership Time</strong></th><th><strong>Join Date</strong></th><th><strong>Gym Time</strong></th><th><strong>Occupation</strong></th><th><strong>Fees Mode</strong></th></tr>";
		//if(sizeof($pdets2)==0)
			//$kalii="<font color=red>No available jobs</font>";
		//else
		//{
		
					
					foreach ($pdets2 as $pdet)
					{
						
						$str2="<tr><td>$pdet[0]</td>";
						$str2=$str2."<td>$pdet[1]</td>";
						$str2=$str2."<td>$pdet[2]</td>";
						$str2=$str2."<td>$pdet[3]</td>";
						
						
						echo $str2;
						//$jobids[$pdet[0]]=$pdet[0];
					}
					echo "</table></div>";
					//$_SESSION['jobids']=$jobids;
				//}
	//}
?>
