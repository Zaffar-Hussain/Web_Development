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
			//die('not connectet');
			die("Connection failed");
		}
		return $conn;
	}


	function closeconnection($conn)
	{
		mysqli_close($conn);
	}


	function getNewProductid()
	{
		$conn=connection();
		$sql="SELECT max(id) as maxid from product";
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


	function addproducts($pname,$det,$price)
	{
		$conn=connection();
		$newid=getNewProductid();
		//echo $newid;
		$sql="insert into product values('$newid','$pname','$det','$price')";
		//echo "<br>".$sql."<br>";
		$nor=mysqli_query($conn,$sql);
		closeconnection($conn);
		if($nor>0)
			return true;
		else 
			return false;
	}


	function getAllProductIds()
	{
		$conn=connection();
		$sql="select id from product";
		$result=mysqli_query($conn,$sql);
		$idarray=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
			$idarray[$i]=$row['id'];
			$i++;
		}
		closeconnection($conn);
		return $idarray;
	}


	function getProductDetails($id)
	{
		$conn=connection();
		$sql="select id,pname,pdetails,price from product where id='$id'";
		$result=mysqli_query($conn,$sql);
		$proddet=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
			$proddet[0]=$row['id'];
			$proddet[1]=$row['pname'];
			$proddet[2]=$row['pdetails'];
			$proddet[3]=$row['price'];
		
		}
		closeconnection($conn);
		return $proddet;

	}

	function AddUser($username,$password,$email,$mobile,$gender,$dob)
	{
		$conn=connection();
		
		$sql="insert into registration values('$username','$password','$email','$mobile','$gender','$dob')";
		
		$nor=mysqli_query($conn,$sql);
		closeconnection($conn);
		if($nor>0)
			return true;
		else 
			return false;
	}



	function updateProduct($id,$pname,$det,$price)
	{
		$conn=connection();
		$sql="update product set pname='$pname',pdetails='$det',price='$price' where id='$id'";
		$nor=mysqli_query($conn,$sql);
		closeconnection($conn);
		if($nor>0)
			return true;
		else 
			return false;
	}



	function getProductCatg()
	{
		$conn=connection();
		$sql="select distinct catagory from product";
		$result=mysqli_query($conn,$sql);
		$catgs=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
		 		$catgs[$i++]=$row['catagory'];

		 }
		 closeconnection($conn);
		 return $catgs;
	
	}


	function getProductByCatg($catg)
	{
		$conn=connection();
		$sql="select id,pname,pdet,price from product where catagory='$catg'";

		$result=mysqli_query($conn,$sql);
		$pdets=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
		 		$pdets[$i++]=array($row['id'],$row['pname'],$row['pdet'],$row['price']);
		 }
		 closeconnection($conn);
		 return $pdets;

	}
?>