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
	/*function get_pro_id()
	{
		$conn=connection();
		$sql="select max(id) as maxid from products ";
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
	function add_pro($pname,$pdet,$price)
	{
		$conn=connection();
		$pid=get_pro_id();
		$pname=$_REQUEST['pname'];
		$pdet=$_REQUEST['pdet'];
		$price=$_REQUEST['price'];
		$sql="insert into products values('$pid','$pname','$pdet','$price') ";
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
		$sql="select id from products ";
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
		$sql="select * from userinfo where id='$id'";
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
	}*/
?>