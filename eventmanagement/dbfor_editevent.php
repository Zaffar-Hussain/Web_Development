<?php 
	function connection()
	{
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="eventmanagement";
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

	function getEventDetails($event_id)
	{
		$conn=connection();
		$sql="select * from eventinfo where event_id='$event_id'";
		$result=mysqli_query($conn,$sql);
		$eventdet=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
			$eventdet[0]=$row['event_id'];
			$eventdet[1]=$row['catagory'];
			$eventdet[2]=$row['event_name'];
			$eventdet[3]=$row['event_det'];
			$eventdet[4]=$row['event_date'];
			$eventdet[5]=$row['event_venue'];
			$eventdet[6]=$row['event_rules'];
		}
		closeconnection($conn);
		return $eventdet;
	}

	function updateEvent($event_id,$catagory,$event_name,$event_det,$event_date,$event_venue,$event_rules)
	{
		$conn=connection();
		$sql="update eventinfo set event_id='$event_id',catagory='$catagory',event_name='$event_name',event_det='$event_det',event_date='$event_date',event_venue='$event_venue',event_rules='$event_rules' where event_id='$event_id'";
		$nor=mysqli_query($conn,$sql);
		closeconnection($conn);
		if($nor>0)
			return true;
		else 
			return false;
	}

	function getregisteredEventDetails($team_id)
	{
		$conn=connection();
		$sql="select * from eventregister_info where team_id='$team_id'";
		$result=mysqli_query($conn,$sql);
		$eventdet=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
			$eventdet[0]=$row['team_id'];
			$eventdet[1]=$row['event_name'];
			$eventdet[2]=$row['usn'];
			$eventdet[3]=$row['team_name'];
			$eventdet[4]=$row['first_mobno'];
			$eventdet[5]=$row['sec_mobno'];
			$eventdet[6]=$row['date'];
		}
		closeconnection($conn);
		return $eventdet;
	}

	function updateregisteredEvent($team_id,$event_name,$usn,$t_name,$f_mobno,$s_mobno)
	{
		$conn=connection();
		$sql="update eventregister_info set team_id='$team_id',event_name='$event_name',usn='$usn',team_name='$t_name',first_mobno='$f_mobno',sec_mobno='$s_mobno' where team_id='$team_id'";
		$nor=mysqli_query($conn,$sql);
		closeconnection($conn);
		if($nor>0)
			return true;
		else 
			return false;
	}

	?>