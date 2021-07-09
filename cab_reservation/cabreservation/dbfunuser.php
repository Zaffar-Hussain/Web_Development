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

	function getSources()
	{
		$conn=connection();
		$sql="select distinct source from route";
		$result=mysqli_query($conn,$sql);
		$srcs=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
		 		$srcs[$i++]=$row['source'];

		 }
		closeconnection($conn);
		 return $srcs;
	}

	function getdests($src)
	{
		$conn=connection();
		$sql="select  distinct dest from route where source='$src'";
		$result=mysqli_query($conn,$sql);
		$dests=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
		 		$dests[$i++]=$row['dest'];

		 }
		closeconnection($conn);
		 return $dests;
	}
	function getvia($source1,$dest1)
	{
		$conn=connection();
		$sql="select  routedet from route where source='$source1' and dest='$dest1'";
		$result=mysqli_query($conn,$sql);
		$vias=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
		 		$vias[$i++]=$row['routedet'];

		 }
		closeconnection($conn);
		 return $vias;
	}
	function checkjdate($jdate)
	{
		$conn=connection();
		$sql="select cabid from bill where jdate!='$jdate'";
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

	function getCabDetails($jdate)
	{
		$conn=connection();
		//$sql="Select cabid,cabname,category,no_of_seats,type,rate_km from cab where cabid in
            //(SELECT distinct cab.cabid FROM bill right outer join cab on bill.cabid=cab.cabid where jdate!='$jdate')";
           // echo "$sql";
		$sql="Select cabid,cabname,category,no_of_seats,type,rate_km from cab where cabid NOT IN(SELECT cabid from bill where jdate='$jdate')"; 

		$result=mysqli_query($conn,$sql);
		$cabdet=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {


			$cabdet[$i++]=array($row['cabid'],$row['cabname'],$row['category'],$row['no_of_seats'],$row['type'],$row['rate_km']);
		
		}
		closeconnection($conn);
		return $cabdet;
	}

	function getDistance($source1,$dest1,$via1)
	{
		$conn=connection();
		$sql="SELECT km from route where source='$source1' and dest='$dest1' and routedet='$via1'";
		$result=mysqli_query($conn,$sql);
		$km="";
		if(mysqli_num_rows($result))
		{
			if($row=mysqli_fetch_assoc($result))
				$km=$row['km'];
		}
		closeconnection($conn);
		return $km;
	}
	function getcab($cabid)
	{
		$conn=connection();
		$sql="select cabname,category,driver_name,dphone,no_of_seats,type,rate_km,allowance from cab where cabid='$cabid'";
		$result=mysqli_query($conn,$sql);
		$cabdet=array();
		$i=0;
		if ($row=mysqli_fetch_assoc($result))
		 {
			$cdet[0]=$row['cabname'];
			$cdet[1]=$row['category'];
			$cdet[2]=$row['driver_name'];
			$cdet[3]=$row['dphone'];
			$cdet[4]=$row['no_of_seats'];
			$cdet[5]=$row['type'];
			$cdet[6]=$row['rate_km'];
			$cdet[7]=$row['allowance'];
		}
		closeconnection($conn);
		return $cdet;
	}

	function getRouteId($source1,$dest1,$via1)
	{
		$conn=connection();
		$sql="SELECT routeid from route where source='$source1' and dest='$dest1' and routedet='$via1'";
		$result=mysqli_query($conn,$sql);
		$rid="";
		if(mysqli_num_rows($result))
		{
			if($row=mysqli_fetch_assoc($result))
				$rid=$row['routeid'];
		}
		closeconnection($conn);
		return $rid;
	}
	function getRouteDetails($rid)
	{
		$conn=connection();
		$sql="select source,dest,routedet,km from route where routeid='$rid'";
		$result=mysqli_query($conn,$sql);
		$rdet=array();
		$i=0;
		if ($row=mysqli_fetch_assoc($result))
		 {
			$rdet[0]=$row['source'];
			$rdet[1]=$row['dest'];
			$rdet[2]=$row['routedet'];
			$rdet[3]=$row['km'];
		}
		closeconnection($conn);
		return $rdet;	
	}
	function getNewBillid()
	{
	$conn=connection();
		$sql="SELECT max(billno) as maxid from bill";
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
	function AddToBill($bid,$uid,$cabid,$rid,$jdate,$adv,$bdate)
	{
		$conn=connection();
		
		$sql="insert into bill(billno,userid,cabid,routeid,jdate,advance,bookdate) values('$bid','$uid','$cabid','$rid','$jdate','$adv','$bdate')";
		
		$nor=mysqli_query($conn,$sql);
		closeconnection($conn);
		if($nor>0)
			return true;
		else 
			return false;
	}
	function getBillDetails($uid)
	{
		$conn=connection();
		$sql="select billno,cabid,routeid,jdate,advance,bookdate from bill where userid='$uid'";
		//echo $sql;
		$result=mysqli_query($conn,$sql);
		$bdet=array();
		$i=0;
		if ($row=mysqli_fetch_assoc($result))
		 {
			$bdet[0]=$row['billno'];
			$bdet[1]=$row['cabid'];
			$bdet[2]=$row['routeid'];
			$bdet[3]=$row['jdate'];
			$bdet[4]=$row['advance'];
			$bdet[5]=$row['bookdate'];

		}
		closeconnection($conn);
		return $bdet;	
			
	}
	function getCount($uid)
	{
		$conn=connection();
		$sql="SELECT count(userid) as count from bill where userid='$uid'";
		//echo $sql;	
		$result=mysqli_query($conn,$sql);
		$i=mysqli_fetch_assoc($result);
		closeconnection($conn);
		return $i;


	}
	function getBookHistory($uid)
	{
		$conn=connection();
		$sql="select b.billno,c.cabname,c.category,c.type,r.source,r.dest,r.routedet,b.advance,b.jdate,b.bookdate,b.remarks from bill b join cab c on b.cabid=c.cabid JOIN route r on b.routeid=r.routeid where b.userid='$uid'";
		//echo $sql;
		$result=mysqli_query($conn,$sql);
		$bdet=array();
		$i=0;
		while($row=mysqli_fetch_assoc($result))
		 {
			$bdet[$i++]=array($row['billno'],$row['cabname'],$row['category'],$row['type'],$row['source'],$row['dest'],$row['routedet'],$row['advance'],$row['jdate'],$row['bookdate'],$row['remarks']);
		}
		closeconnection($conn);
		return $bdet;		
	}
	function getBillNums($uid)
	{
		$conn=connection();
		$sql="SELECT billno from bill where userid='$uid'";
		$result=mysqli_query($conn,$sql);
		$bnos=array();
		$i=0;
		while($row=mysqli_fetch_assoc($result))
		{
				$bnos[$i++]=$row['billno'];
		}
		
		closeconnection($conn);
		return $bnos;
	}


	function getBillD($bid)
	{
		$conn=connection();
		$sql="select b.billno,c.cabname,c.category,c.type,r.source,r.dest,r.routedet,b.advance,b.jdate,b.bookdate from bill b join cab c on b.cabid=c.cabid JOIN route r on b.routeid=r.routeid where b.billno='$bid'";
		$result=mysqli_query($conn,$sql);
		$bdet=array();
		$i=0;
		while($row=mysqli_fetch_assoc($result))
		 {
			$bdet[$i++]=array($row['billno'],$row['cabname'],$row['category'],$row['type'],$row['source'],$row['dest'],$row['routedet'],$row['advance'],$row['jdate'],$row['bookdate']);
		}
		closeconnection($conn);
		return $bdet;	



	}



	function addCancelDetails($cdate,$bno,$remark)
	{
		$conn=connection();
		
		$sql="UPDATE bill SET canceldate='$cdate',remarks='$remark'  WHERE billno='$bno'";
		
		$nor=mysqli_query($conn,$sql);
		closeconnection($conn);
		if($nor>0)
			return true;
		else 
			return false;
	}

	function getBillDet()
	{
		$conn=connection();
		$sql="Select billno,userid,cabid,routeid,jdate,advance,bookdate,canceldate,remarks from bill";

		$result=mysqli_query($conn,$sql);
		$cabdet=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {


			$billdet[$i++]=array($row['billno'],$row['userid'],$row['cabid'],$row['routeid'],$row['jdate'],$row['advance'],$row['bookdate'],$row['canceldate'],$row['remarks']);
		
		}
		closeconnection($conn);
		return $billdet;
			
	}
	function getUserName($un)
	{
		$conn=connection();
		$sql="select fullname from useraccount where userid='$un'";
		$result=mysqli_query($conn,$sql);
		if ($row=mysqli_fetch_assoc($result))
		 {
		 	 $uname=$row['fullname'];
		 }
		closeconnection($conn);
		return $uname;
	}
?>