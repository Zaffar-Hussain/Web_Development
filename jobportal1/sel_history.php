<?php
	require('dbfunct.php');
	session_start();

if(isset($_REQUEST['delete']))
{
	$delete=$_REQUEST['delete'];
	$str=deleteCand($delete);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Selection History</title>
	<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0 auto;
  background-image: url('image/hst2.jpg');
  background-size: cover;
  background-repeat: no-repeat;
}

.column {
 width:700px;
    height:350px;
    background-color:rgba(0,0,0,0.5);
    margin:0 auto;
    margin-top:100px;
    padding-top:30px;
    padding-left: 60px;
    border-radius:15px;
    color:white;
    font-weight:bolder;
    box-shadow:inset 4px 4px rgba(0,0,0,20);
  
}

.column input[type="submit"]
  {
    width:639px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:skyblue;
    font-weight:bolder;
  }

  .but
{
	width:100px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:skyblue;
    font-weight:bolder;
}

</style>

</head>
<body>
	<div class="column">
	<form name="f1" action="" method="get">
		<input type="submit" name="sel_hstry" value="SELECTION HISTORY">
		
			<?php
				if(isset($_REQUEST['sel_hstry']))
				{
					echo "<table border=1 bgcolor=red ><tr bgcolor=green><td>Selection ID</td><td>UID</td><td>Job ID</td><td>Student mob_no</td><td>Student Mail id</td><td>Date of Selection</td><td>cancel</td></tr>";
					$url=$_SERVER['REQUEST_URI'];
					$url="http://localhost".$url."";
					$appl_dets=get_sel_details();$i=0;
					foreach($appl_dets as $appl_det )
					{
						$str2="<tr><td>$appl_det[0]</td>";
						$str2=$str2."<td>$appl_det[1]</td>";
						$str2=$str2."<td>$appl_det[2]</td>";
						$str2=$str2."<td>$appl_det[3]</td>";
						$str2=$str2."<td>$appl_det[4]</td>";
						$str2=$str2."<td>$appl_det[5]</td>";
						$str2=$str2."<td><a href=".$url."&delete=$appl_det[0]>delete</a></td></tr>";
						//$str2=$str2."<td><input type=checkbox name=ch$appl_det[0]></td></tr>";

						echo $str2;
					}
					echo "</table>";
					echo "<br><a href=searchcandidates.php><input type=button class=but name=back value=Back></a>";
				}
			?>

		
		
	</form>
</div>
</body>
</html>