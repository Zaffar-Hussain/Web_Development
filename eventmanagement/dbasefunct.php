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

	function checkaccount($uid,$pwd)
	{
		
		$conn=connection();
		$sql="select uid,pwd from userinfo";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				if($row['uid']==$uid && $row['pwd']==$pwd)
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

	function checkaccount_type($uid,$type)
	{
		$conn=connection();
		$flag=true;
			$sql1="select uid,type from userinfo where uid='$uid'";
			$result1=mysqli_query($conn,$sql1);
			if(mysqli_num_rows($result1)>0)
			{
				$row=mysqli_fetch_assoc($result1);
				
					if($row['type']=='admin')
					{
						$flag=true;
					}	
					else
						$flag=false;	
				
			}
		closeconnection($conn);
		return $flag;
	}

	function checkaccount_typee($uid,$type)
	{
		$conn=connection();
		$flag=true;
			$sql1="select uid,type from userinfo where uid='$uid'";
			$result1=mysqli_query($conn,$sql1);
			if(mysqli_num_rows($result1)>0)
			{
				$row=mysqli_fetch_assoc($result1);
				
					if($row['type']=='user')
					{
						$flag=true;
					}	
					else
						$flag=false;	
				
			}
		closeconnection($conn);
		return $flag;
	}

	function register($uid,$name,$pwd,$type,$question,$answer,$mob_no,$mail,$sem,$branch,$year,$date,$user_registered)
	{
		$conn=connection();
		$sql="insert into userinfo values('$uid','$name','$pwd','$type','$question','$answer','$mob_no','$mail','$sem','$branch','$year','$date','$user_registered') ";
		$nor=mysqli_query($conn,$sql);
		//echo $sql;
		closeconnection($conn);
		if($nor>0)
			return true;
		else
			return false;
	}


	function forgotpwd($id,$answer)
	{
		$conn=connection();
		$sql1="select * from userinfo where uid='$id'";
		$result1=mysqli_query($conn,$sql1);
		if(mysqli_num_rows($result1)>0)
		{
			while($row=mysqli_fetch_assoc($result1))
			{
				if($row['uid']==$id)
				{
					if($row['answer']==$answer)
					{
						$flag="password is: ".$row['pwd'];
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
		$sql1="select * from userinfo where uid='$id'";
		$result1=mysqli_query($conn,$sql1);
		if(mysqli_num_rows($result1)>0)
		{
			while($row=mysqli_fetch_assoc($result1))
			{
				if($row['uid']==$id )
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
		$sql2="UPDATE userinfo SET pwd='$npwd' where uid='$uid'";
		$result2=mysqli_query($conn,$sql2);
		closeconnection($conn);
		if($result2>0)
			return true;
		else
			return false;
	}

	function getProfileDetails($id)
	{
		$conn=connection();
		$sql="select uid,name,pwd,type,question,answer,mob_no,mail,sem,branch,year from userinfo where uid='$id'";
		$result=mysqli_query($conn,$sql);
		$profdet=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
			$profdet[0]=$row['uid'];
			$profdet[1]=$row['name'];
			$profdet[2]=$row['pwd'];
			$profdet[3]=$row['type'];
			$profdet[4]=$row['question'];
			$profdet[5]=$row['answer'];
			$profdet[6]=$row['mob_no'];
			$profdet[7]=$row['mail'];
			$profdet[8]=$row['sem'];
			$profdet[9]=$row['branch'];
			$profdet[10]=$row['year'];
		}
		closeconnection($conn);
		return $profdet;
	}

	function updateprofile($uid,$name,$pwd,$question,$answer,$mob_no,$mail,$sem,$branch,$year)
	{
		$conn=connection();
		$sql="update userinfo set name='$name',pwd='$pwd',question='$question',answer='$answer',mob_no='$mob_no',mail='$mail',sem='$sem',branch='$branch',year='$year' where uid='$uid'";
		$nor=mysqli_query($conn,$sql);
		closeconnection($conn);
		if($nor>0)
			return true;
		else 
			return false;
	}

	function add_event($event_id,$catagory,$event_name,$event_det,$event_date,$event_venue,$event_rules)
	{
		$conn=connection();
		$sql="insert into eventinfo values('$event_id','$catagory','$event_name','$event_det','$event_date','$event_venue','$event_rules') ";
		//echo "".$sql;
		$nor=mysqli_query($conn,$sql);

		closeconnection($conn);
		if($nor>0)
			return true;
		else
			return false;
	}

	function get_event_id()
	{
		$conn=connection();
		$sql="select max(event_id) as maxid from eventinfo ";
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

	function geteventDetails()
	{
		$conn=connection();
		$sql="select * from eventinfo";
		$result=mysqli_query($conn,$sql);
		$events=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
		 		$events[$i++]=array($row['event_id'],$row['catagory'],$row['event_name'],$row['event_det'],$row['event_date'],$row['event_venue'],$row['event_rules']);
		 }
		closeconnection($conn);
		return $events;
	}

	function deleteEvent($delete)
	{
		$conn=connection();
		$sql="delete from eventinfo where event_id='$delete'";
		//echo $sql."<br>";
		$result=mysqli_query($conn,$sql);
		closeconnection($conn);
	}

	function getcatagory()
	{
		$conn=connection();
		$sql="select distinct catagory from eventinfo";
		$result=mysqli_query($conn,$sql);
		$catg=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
		 		$catg[$i++]=array($row['catagory']);
		 }
		closeconnection($conn);
		return $catg;
	}
	

	function get_team_id()
	{
		$conn=connection();
		$sql="select max(team_id) as maxid from eventregister_info ";
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

	function register_event($t_id,$event_name,$usn,$t_name,$f_mobno,$s_mobno,$date)
	{
		$conn=connection();
		$sql="insert into eventregister_info values('$t_id','$event_name','$usn','$t_name','$f_mobno','$s_mobno','$date') ";
		//echo "".$sql;
		$nor=mysqli_query($conn,$sql);

		closeconnection($conn);
		if($nor>0)
			return true;
		else
			return false;
	}


	function delete_registeredEvent($delete)
	{
		$conn=connection();
		$sql="delete from eventregister_info where team_id='$delete'";
		//echo $sql."<br>";
		$result=mysqli_query($conn,$sql);
		closeconnection($conn);
	}

	function getregisteredeventDetails()
	{
		$conn=connection();
		$sql="select * from eventregister_info";
		$result=mysqli_query($conn,$sql);
		$events=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
		 		$events[$i++]=array($row['team_id'],$row['event_name'],$row['usn'],$row['team_name'],$row['first_mobno'],$row['sec_mobno'],$row['date']);
		 }
		closeconnection($conn);
		return $events;
	}
	
?>