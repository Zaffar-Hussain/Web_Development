<?php
	

	function checkaccount($id,$password)
	{
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
	

	$sql="select * from userinfo";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			if($row['id']==$id && $row['password']==$password)
			{
				$flag==true;
				break;
			}			
		}
		//return $flag;
	}
	//return $flag;
	mysqli_close($conn);
	//mysqli_fetch_assoc()
	}
?>