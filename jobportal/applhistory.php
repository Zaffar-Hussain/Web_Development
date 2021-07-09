<?php
	require('dbfunct.php');
	session_start();



?>
<!DOCTYPE html>
<html>
<head>
	<title>Application History</title>
</head>
<body>
	<form name="f1" action="" method="get">
		<input type="submit" name="appl_hstry" value="Show">
		<table border=1 bgcolor="cyan" >
			<?php
				if(isset($_REQUEST['appl_hstry']))
				{
					$uid=$_SESSION['uid'];
					echo "<tr bgcolor=pink><td>Application ID</td><td>Job ID</td><td>status</td><td>Applied on</td><td>Selection Status</td><td>Remarks</td><td>cancel</td></tr>";
					$appl_dets=get_appl_details($uid);$i=0;
					foreach($appl_dets as $appl_det )
					{
						$str2="<tr><td>$appl_det[0]</td>";
						$str2=$str2."<td>$appl_det[1]</td>";
						$str2=$str2."<td>$appl_det[2]</td>";
						$str2=$str2."<td>$appl_det[3]</td>";
						$str2=$str2."<td>$appl_det[4]</td>";
						$str2=$str2."<td>$appl_det[5]</td>";
						$str2=$str2."<td><input type=checkbox name=ch$appl_det[0]></td></tr>";

						echo $str2;
					}
				}
			?>

		</table>
	</form>

</body>
</html>