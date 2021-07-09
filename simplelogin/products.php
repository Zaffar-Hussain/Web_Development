<!DOCTYPE html>
<html>
<head>
	<style>table,th,td{text-align:center; width:25%; border:3px solid red;}</style>
		
	<title>Product details</title>

</head>
<body>
	<center><h1>product details</h1></center>
<?php
	

	
		$servername="localhost";
	$username="root";
	$password="";
	$dbname="test1";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn)
	{
		//die("connection failed");
		die("connection failed ".mysqli_connect_error());
	}
	

	$sql="select * from products";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		echo "<center><table><tr><th>PID</th><th>PNAME</th><th>PDET</th><th>PRICE</th></tr>";
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<tr><td>".$row['id']."</td><td>".$row['pname']."</td><td>",$row['pdet']."</td><td>".$row['price']."</td></tr>";	
		}
		echo "</table></center>";
		//return $flag;
	}
	else
		echo "0 results";
	//return $flag;
	mysqli_close($conn);
	//mysqli_fetch_assoc()
	
?>
</body>
</html>