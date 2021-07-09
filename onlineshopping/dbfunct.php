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
	function checkaccount($uid,$pwd)
	{
		
		$conn=connection();
		$sql="select id,password from userinfo";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				if($row['id']==$uid && $row['password']==$pwd)
				{
					$flag=true;
					break;
				}	
				else
					$flag=false;		
			}
		}
		
		closeconnection($conn);
		return $flag;
	}
	function checkaccount_type($uid,$pwd,$type)
	{
		$conn=connection();
			$sql1="select * from userinfo where id='$uid'";
			$result1=mysqli_query($conn,$sql1);
			if(mysqli_num_rows($result1)>0)
			{
				while($row=mysqli_fetch_assoc($result1))
				{
					if($row['type']=='admin')
					{
						$flag=true;
						break;
					}	
					elseif($row['type']=='user')
					{
						$flag=false;	
						break;
					}
					else
						echo "<font color=red>Invalid Account Type</font>";
				}
			}
		closeconnection($conn);
		return $flag;
	}
	function register($id,$pwd,$type,$question,$answer)
	{
		$conn=connection();
		$sql="insert into userinfo values('$id','$pwd','$type','$question','$answer') ";
		echo "<br>".$sql."<br>";
		$nor=mysqli_query($conn,$sql);

		closeconnection($conn);
		if($nor>0)
			return true;
		else
			return false;
	}
	function forgotpwd($id,$answer)
	{
		$conn=connection();
		$sql1="select * from userinfo where id='$id'";
		$result1=mysqli_query($conn,$sql1);
		if(mysqli_num_rows($result1)>0)
		{
			while($row=mysqli_fetch_assoc($result1))
			{
				if($row['id']==$id)
				{
					if($row['answer']==$answer)
					{
						$flag="password is: ".$row['password'];
						break;
					}	
					else
						$flag="wrong answer ";
				}
			}
		}
		closeconnection($conn);
		return $flag;
	}
	function question($id)
	{
		$conn=connection();
		$sql1="select * from userinfo where id='$id'";
		$result1=mysqli_query($conn,$sql1);
		if(mysqli_num_rows($result1)>0)
		{
			while($row=mysqli_fetch_assoc($result1))
			{
				if($row['id']==$id )
				{
					$flag=$row['question'];
					break;
				}	
				else
					$flag=false;
			}
		}
		closeconnection($conn);
		return $flag;
	}
	function changepwd($uid,$pwd,$npwd)
	{
		$conn=connection();
		$sql2="UPDATE userinfo SET password='$npwd' where id='$uid'";
		$result2=mysqli_query($conn,$sql2);
		closeconnection($conn);
		if($result2>0)
			return true;
		else
			return false;
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
	
	function add_to_cart($id,$noqty,$pprice,$uid)
	{
		$conn=connection();
		$sql="insert into cart values('$id','$noqty','$pprice','$uid') ";
		$nor=mysqli_query($conn,$sql);
		closeconnection($conn);
		if($nor>0)
			return true;
		else
			return false;
	}

	function get_cart_by_uid($uid)
	{
		$conn=connection();
		$sql="select id,qty,price,uid from cart where uid='$uid'";
		$result=mysqli_query($conn,$sql);
		$products=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
		 		$products[$i++]=array($row['id'],$row['qty'],$row['price'],$row['uid']);
		 }
		closeconnection($conn);
		return $products;
	}

	function delete_from_cart($idd)
	{
		$conn=connection();
		$sql="delete from cart where id='$idd' ";
		$nor=mysqli_query($conn,$sql);
		closeconnection($conn);
		if($nor>0)
			return true;
		else
			return false;
	}

	function getProductDetails($id)
	{
		$conn=connection();
		$sql="select id,pname,pdet,price from product where id='$id'";
		$result=mysqli_query($conn,$sql);
		$proddet=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
			$proddet[0]=$row['id'];
			$proddet[1]=$row['pname'];
			$proddet[2]=$row['pdet'];
			$proddet[3]=$row['price'];
		
		}
		closeconnection($conn);
		return $proddet;

	}

	function updateProduct($id,$p_name,$p_det,$p_price)
	{
		$conn=connection();
		$sql="update product set pname='$p_name',pdet='$p_det',price='$p_price' where id='$id'";
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
?>