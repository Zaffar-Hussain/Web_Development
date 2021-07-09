<html>
<head>
	<title>selection sort</title>
	<style >
		table,td,th{
			border: 1px solid black;
			background-color: lightblue;
			border-collapse: collapse;
			width: 33%;
			text-align: center;
		}
		table{margin: auto;}
	</style>
</head>
<body>
<?php
	$server="localhost";
	$root="root";
	$pass="";
	$db="stud";
	$a=[];
	$conn=mysqli_connect($server,$root,$pass,$db);
	if($conn->connect_error)
		die("connection failed..".$conn->connect_error);
	$sql="SELECT * from student";
	$result=$conn->query($sql);
	echo "<center>BEFORE SORTING</center>";
	echo "<table>";
	echo "<tr><th>USN</th><th>NAME</th><th>ADDRESS</th></tr>";
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			echo "<tr><td>".$row['usn']."</td><td>".$row['name']."</td><td>".$row['address']."</td></tr>";
			array_push($a,$row['address']);
		}
	}
	else{echo "table is empty";}
	echo "</table>";
	$n=count($a);
	$b=$a;
	for($i=0;$i<($n-1);$i++)
	{
		$pos=$i;
		for($j=$i+1;$j<$n;$j++)
		{
			if($a[$pos]>$a[$j])
				$pos=$j;
		}
		if($pos!=$i)
		{
			$temp=$a[$pos];
			$a[$pos]=$a[$i];
			$a[$i]=$temp;
		}
	}
	$c=[];
	$d=[];
	$result=$conn->query($sql);
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			for($i=0;$i<$n;$i++)
			{
				if($row['address'] == $a[$i])
				{
					$c[$i]=$row['usn'];
					$d[$i]=$row['name'];
				}
			}
		}
	}
	echo "<center>AFTER SORTING</center>";
	echo "<table>";
	echo "<tr><th>USN</th><th>NAME</th><th>ADDRESS</th></tr>";
	for($i=0;$i<$n;$i++)
	{
		echo "<tr><td>".$c[$i]."</td><td>".$d[$i]."</td><td>".$a[$i]. "</td></tr>";
	}
	echo "</table>";
	$conn->close();

?>
</body>
</html>