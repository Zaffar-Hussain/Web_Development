<?php
	function connection()
	{
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="cab_reservation";
		$flag=false;
		$conn=mysqli_connect($servername,$username,$password,$dbname);
		if(!$conn)
		{
			die("Connection failed");
		}
		return $conn;
	}


	function closeconnection($conn)
	{
		mysqli_close($conn);
	}
function getQuestion($id)
	{
		$conn=connection();
		$sql="select que from useraccount where userid='$id'";
		$result=mysqli_query($conn,$sql);
		$qnarray=array();
		$i=0;
		if($row=mysqli_fetch_assoc($result))
		 {
			$que=$row['que'];
		
		}
		closeconnection($conn);
		return $que;
	}
	function checkAns($question,$answer)
	{
		$conn=connection();
		$sql="select pwd,que,ans from useraccount where que='$question'";

		$result=mysqli_query($conn,$sql);	
		if ($row=mysqli_fetch_assoc($result))
		 {
		 	$pwd=$row['pwd'];
		 	$que=$row['que'];
		 	$ans=$row['ans'];
		 	closeconnection($conn);
		 if($que==$question && $ans==$answer)
		 	return $pwd;
		 else
		 	return  null;
		}
		
	}
	


	function getPass($id)
	{
		$conn=connection();
		$result=mysqli_query($conn,$sql);
		$sql="select pwd from useraccount where userid='$id'";
		if ($row=mysqli_fetch_assoc($result))
		 {
		 	 $pass=$row['pwd'];
		 }
		closeconnection($conn);
		return $pass;
	}



	function checkactype($id)
	{
		$conn=connection();
		$sql="select atype from useraccount where userid='$id'";
		$result=mysqli_query($conn,$sql);
		while ($row=mysqli_fetch_assoc($result))
		 {
		 	$atype=$row['atype'];
		 }
		closeconnection($conn);
		return $atype;
	}

	function AddUser($id,$username,$password,$email,$mobile,$gender,$que,$ans)
	{
		$conn=connection();
		
		$sql="insert into useraccount(userid,atype,fullname,pwd,email,phone,gender,que,ans) values('$id','user','$username','$password','$email','$mobile','$gender','$que','$ans')";
		
		$nor=mysqli_query($conn,$sql);
		closeconnection($conn);
		if($nor>0)
			return true;
		else 
			return false;
	}
	function getNewUserid()
	{
		$conn=connection();
		$sql="SELECT max(userid) as maxid from useraccount";
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
	function checkid($id)
	{
		$conn=connection();
		$flag=false;
		$sql="select userid from useraccount where userid='$id'";
		$result=mysqli_query($conn,$sql);
		if (mysqli_fetch_assoc($result))
		 {
		 	 $flag=true;
		 }
		closeconnection($conn);
		return $flag;

	}
	function checkaccount($id,$pwd)
	{
		$conn=connection();
		if(!$conn)
		{
			die("Connection failed");
		}
		$flag=false;
		$sql="SELECT userid,pwd FROM useraccount";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))//fetch one by one row
			{
				if($row['userid']==$id && $row['pwd']==$pwd)
				{
					$flag=true;
					break;
				}
			}
		}
		closeconnection($conn);
		return $flag;
	}
	function updatePass($npwd,$id)
	{
		$conn=connection();
		$sql="update user_account set pwd='$npwd' where userid='$id'";
		$nor=mysqli_query($conn,$sql);
		closeconnection($conn);
		if($nor>0)
			return true;
		else 
			return false;
	}
	function getUserDetails($id)
	{
		$conn=connection();
		$sql="select userid,fullname,email,phone,gender,que,ans from useraccount where userid='$id'";
		$result=mysqli_query($conn,$sql);
		$userdet=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
			$userdet[0]=$row['userid'];
			$userdet[1]=$row['fullname'];
			$userdet[2]=$row['email'];
			$userdet[3]=$row['phone'];
			$userdet[4]=$row['gender'];
			$userdet[5]=$row['que'];
			$userdet[6]=$row['ans'];
		
		}
		closeconnection($conn);
		return $userdet;

	}
	function getAllUserIds()
	{
		$conn=connection();
		$sql="select userid from useraccount";
		$result=mysqli_query($conn,$sql);
		$idarray=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
			$idarray[$i]=$row['userid'];
			$i++;
		}
		closeconnection($conn);
		return $idarray;
	}
	function updateUser($id,$fname,$email,$phone,$gender,$que,$ans)
	{
		$conn=connection();
		$sql="update user_account set fullname='$fname',email='$email',phone='$phone',gender='$gender',que='$que',ans='$ans' where userid='$id'";
		$nor=mysqli_query($conn,$sql);
		closeconnection($conn);
		if($nor>0)
			return true;
		else 
			return false;
	}
	function getNewCabid()
	{
		$conn=connection();
		$sql="SELECT max(cabid) as maxid from cab";
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
	function addCab($cid,$cname,$cat,$dname,$reg,$dnum,$status,$nos,$type,$rate,$adv,$allowance)
	{
		$conn=connection();
		
		$sql="insert into cab values('$cid','$cname','$cat','$dname','$reg','$dnum','$status','$nos','$type','$rate','$adv','$allowance')";
		
		$nor=mysqli_query($conn,$sql);
		closeconnection($conn);
		if($nor>0)
			return true;
		else 
			return false;	
	}

	function getNewRouteid()
	{
		$conn=connection();
		$sql="SELECT max(routeid) as maxid from route";
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
	function addRoute($rid,$src,$dest,$dist,$det)
	{
		$conn=connection();
		
		$sql="insert into route values('$rid','$src','$dest','$dist','$det')";
		
		$nor=mysqli_query($conn,$sql);
		closeconnection($conn);
		if($nor>0)
			return true;
		else 
			return false;
	}
	function getCabDetails($id)
	{
		$conn=connection();
		$sql="select cabid,cabname,category,driver_name,regno,dphone,cstatus,no_of_seats,type,rate_km,advance,allowance from cab where cabid='$id'";
		$result=mysqli_query($conn,$sql);
		$cdet=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
			$cdet[0]=$row['cabid'];
			$cdet[1]=$row['cabname'];
			$cdet[2]=$row['category'];
			$cdet[3]=$row['driver_name'];
			$cdet[4]=$row['regno'];
			$cdet[5]=$row['dphone'];
			$cdet[6]=$row['cstatus'];
			$cdet[7]=$row['no_of_seats'];
			$cdet[8]=$row['type'];
			$cdet[9]=$row['rate_km'];
			$cdet[10]=$row['advance'];
			$cdet[11]=$row['allowance'];
		
		}
		closeconnection($conn);
		return $cdet;	
	}

	function updateCab($id,$cname,$cat,$dname,$reg,$dnum,$status,$nos,$type,$rate,$adv,$allowance)
	{
		$conn=connection();
		$sql="update cab set cabname='$cname',category='$cat',driver_name='$dname',regno='$reg',dphone='$dnum',cstatus='$status',no_of_seats='$nos',type='$type',rate_km='$rate',advance='$adv',allowance='$allowance' where cabid='$id'";
		echo $sql;
		$nor=mysqli_query($conn,$sql);
		closeconnection($conn);
		if($nor>0)
			return true;
		else 
			return false;
	}
	function getAllCabIds()
	{
		$conn=connection();
		$sql="select cabid from cab";
		$result=mysqli_query($conn,$sql);
		$idarray=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
			$idarray[$i]=$row['cabid'];
			$i++;
		}
		closeconnection($conn);
		return $idarray;
	}
	function getCabCatg()
	{
		$conn=connection();
		$sql="select distinct category from cab";
		$result=mysqli_query($conn,$sql);
		$catgs=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
		 		$catgs[$i++]=$row['category'];

		 }
closeconnection($conn);
		 return $catgs;
	}

	function getCabByCatg($catg)
	{
		$conn=connection();
		$sql="select cabid,cabname,driver_name,regno,dphone,cstatus,no_of_seats,type,rate_km,advance,allowance from cab where category='$catg'";

		$result=mysqli_query($conn,$sql);
		$cdets=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
		 		$cdets[$i++]=array($row['cabid'],$row['cabname'],$row['driver_name'],$row['regno'],$row['dphone'],$row['cstatus'],$row['no_of_seats'],$row['type'],$row['rate_km'],$row['advance'],$row['allowance']);
		 }
		 closeconnection($conn);
		 return $cdets;
	}
	function deleteCab($id)
	{
		$conn=connection();
		$sql="delete from cab where cabid='$id'";
		$nor=mysqli_query($conn,$sql);
		closeconnection($conn);
		if($nor>0)
			return true;
		else 
			return false;
	}


	function getRouteSource()
	{
		$conn=connection();
		$sql="select distinct source from route";
		$result=mysqli_query($conn,$sql);
		$routes=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
		 		$routes[$i++]=$row['source'];

		 }
		closeconnection($conn);
		 return $routes;
	}

	function getRouteBySource($srce)
	{
		$conn=connection();
		$sql="select routeid,dest,km,routedet from route where source='$srce'";

		$result=mysqli_query($conn,$sql);
		$rdets=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
		 		$rdets[$i++]=array($row['routeid'],$row['dest'],$row['km'],$row['routedet']);
		 }
		 closeconnection($conn);
		 return $rdets;
	}

	function deleteRoute($id)
	{
		$conn=connection();
		$sql="delete from route where routeid='$id'";
		$nor=mysqli_query($conn,$sql);
		closeconnection($conn);
		if($nor>0)
			return true;
		else 
			return false;
	}

	function getRouteDetails($rid)
	{
		$conn=connection();
		$sql="select routeid,source,dest,km,routedet from route where routeid='$rid'";
		$result=mysqli_query($conn,$sql);
		$rdet=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
			$rdet[0]=$row['routeid'];
			$rdet[1]=$row['source'];
			$rdet[2]=$row['dest'];
			$rdet[3]=$row['km'];
			$rdet[4]=$row['routedet'];
		
		
		}
		closeconnection($conn);
		return $rdet;		
	}

	function updateRoute($id,$src,$dest,$dist,$rdet,$cabid)
	{
		$conn=connection();
		$sql="update route set routeid='$id',source='$src',dest='$dest',km='$dist',routedet='$rdet',cabid='$cabid' where routeid='$id'";
		$nor=mysqli_query($conn,$sql);
		closeconnection($conn);
		if($nor>0)
			return true;
		else 
			return false;	
	}
?>