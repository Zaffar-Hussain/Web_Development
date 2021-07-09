<?php
	require('dbfunctions.php');
	$foodids=array();
?>
<!DOCTYPE html>
<html>
<head>
	<title>search food</title>
</head>
<body>
	<form name=show method=get action="">
		Select Food By Breakfast:<input type="checkbox" name="breakfast" >
		Lunch:<input type="checkbox" name="lunch" >
		Dinner:<input type="checkbox" name="dinner" >
		<input type="submit" name="search"  value="search" >
		<?php
		$fdets=array();
		$breakfast=$lunch=$dinner=null;
		if(isset($_REQUEST['search']))
		{
			if(!isset($_REQUEST['breakfast']))	
				$breakfast=null;
			else
				$breakfast='breakfast';

			if(!isset($_REQUEST['lunch']))
				$lunch=null;
			else
				$lunch='lunch';

			if(!isset($_REQUEST['dinner']))
				$dinner=null;
			else
				$dinner='dinner';

			$fdets=getfoods($breakfast,$lunch,$dinner);
			$i=0;
			echo "<table border=1 bgcolor=cyan>
			<tr bgcolor=pink>
				
				<td>food id</td>
				<td> food name</td>
				<td>Price</td>
				<td>Select</td>
				
			</tr>";

			foreach ($fdets as $fdet)
					{
						$str="<tr><td>$fdet[0]</td>";
						$str=$str."<td>$fdet[1]</td>";
						$str=$str."<td>$fdet[2]</td>";
						$str=$str."<td><input type=checkbox name=ch$fdet[0]></td>";
						echo $str;

						$foodids[$fdet[0]]=$fdet[2];
					}
					$_SESSION['foodids']=$foodids;
		}
		?>
	</form>
</body>
</html>