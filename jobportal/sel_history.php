<?php
	require('dbfunct.php');
	session_start();



?>
<!DOCTYPE html>
<html>
<head>
	<title>Selection History</title>
</head>
<body>
	<form name="f1" action="" method="get">
		<input type="submit" name="sel_hstry" value="Show">
		<table border=1 bgcolor="cyan" >
			<?php
				if(isset($_REQUEST['sel_hstry']))
				{
					echo "<tr bgcolor=pink><td>Selection ID</td><td>UID</td><td>Job ID</td><td>Student mob_no</td><td>Student Mail id</td><td>Date of Selection</td><td>cancel</td></tr>";
					$appl_dets=get_sel_details();$i=0;
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