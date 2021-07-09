<?php
	
	function connection()
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
	return $conn;
	}
	
	function closeconnection($conn)
	{
		mysqli_close($conn);
	}
	function get_pro_id()
	{
		$conn=connection();
		$sql="select max(id) as maxid from product ";
		$result=mysqli_query($conn,$sql);
		$id=1;
		if(mysqli_num_rows($result))
		{
			if($row=mysqli_fetch_assoc($result))
				$id=$row['maxid']+1;
		}
		closeconnection($conn);
		return $id;
	}
	function add_pro($pname,$pdet,$price,$cat)
	{
		$conn=connection();
		$pid=get_pro_id();
		$sql="insert into product values('$pid','$pname','$pdet','$price','$cat') ";
		echo "<br>".$sql."<br>";
		$nor=mysqli_query($conn,$sql);

		closeconnection($conn);
		if($nor>0)
			return true;
		else
			return false;
	}
	function getpids()
	{
		$conn=connection();
		$sql="select id from product ";
		$result=mysqli_query($conn,$sql);
		$id=array();$i=0;
		while($row=mysqli_fetch_assoc($result))
		{
			$id[$i]=$row['id'];
			$i++;
		}
		closeconnection($conn);
		return $id;
	}
	function getprodet($id)
	{
		$conn=connection();
		$sql="select * from product where id='$id'";
		$result=mysqli_query($conn,$sql);
		$prodet=array("","","","","");
		if ($row=mysqli_fetch_assoc($result)) {
			$prodet[0]=$row['id'];
			$prodet[1]=$row['pname'];
			$prodet[2]=$row['pdet'];
			$prodet[3]=$row['price'];
			$prodet[4]=$row['catagory'];
		}

		closeconnection($conn);
		return $prodet;
	}
	function getprocat()
	{
		$conn=connection();
		$sql="select catagory from products ";
		$result=mysqli_query($conn,$sql);
		$cat=array();$i=0;
		while($row=mysqli_fetch_assoc($result))
		{
			$cat[$i++]=$row['catagory'];
		}
		closeconnection($conn);
		return $cat;
	}
	function getprodbycat($cat)
	{
		$conn=connection();
		$sql="select * from product where catagory='$cat'";
		$result=mysqli_query($conn,$sql);
		$prodet=array("","","","");
		if ($row=mysqli_fetch_assoc($result)) {
			$prodet[0]=$row['id'];
			$prodet[1]=$row['pname'];
			$prodet[2]=$row['pdet'];
			$prodet[3]=$row['price'];
		}

		closeconnection($conn);
		return $prodet;
	}
?>