<?php
	
	function connection()
	{
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="gym system";
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

	function checkaccount($mail,$pwd)
	{
		
		$conn=connection();
		$sql="select mail,pwd from user_info";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				if($row['mail']==$mail && $row['pwd']==$pwd)
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
	function checkaccount_type($mail,$type)
	{
		$conn=connection();
		$flag=true;
			$sql1="select mail,type from user_info where mail='$mail'";
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
	function checkaccount_typee($mail,$type)
	{
		$conn=connection();
		$flag=true;
			$sql1="select mail,type from user_info where mail='$mail'";
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
function register($name,$eid,$pwd,$question,$answer)
	{
		$conn=connection();
		$sql="insert into userinfo values('$name','$eid','$pwd','$question','$answer') ";
		$nor=mysqli_query($conn,$sql);
        closeconnection($conn);
		if($nor>0)
			return true;
		else
			return false;
	}
	function userregister($name,$mail,$pwd,$type,$question,$answer,$mob_no,$gender,$memb_time,$join_date,$gym_time,$occup,$f_mode)
	{
		$conn=connection();
		$sql="insert into user_info values('$name','$mail','$pwd','$type','$question','$answer','$mob_no','$gender','$memb_time','$join_date','$gym_time','$occup','$f_mode') ";
		$nor=mysqli_query($conn,$sql);
        closeconnection($conn);
		if($nor>0)
			return true;
		else
			return false;
	}
	function service($S1,$S2,$S3,$S4)
	{
		$conn=connection();
		$sql="insert into service values('$S1','$S2','$S3','$S4') ";
		$nor=mysqli_query($conn,$sql);
        closeconnection($conn);
		if($nor>0)
			return true;
		else
			return false;
	}
	function getspdetails()
	{
		$conn=connection();
		$sql="select S1,S2,S3,S4 from service  ";
		$result=mysqli_query($conn,$sql);
		$spdet=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
		 		
			$spdet[0]=$row['S1'];
			$spdet[1]=$row['S2'];
			$spdet[2]=$row['S3'];
			$spdet[3]=$row['S4'];
			
		
		}

	
		closeconnection($conn);
		return $spdet;
		}
	
	function updatesp($S1,$S2,$S3,$S4)
	{
		$conn=connection();
		$sql="update service set S1='$S1',S2='$S2',S3='$S3',S4='$S4' ";
		$nor=mysqli_query($conn,$sql);
		closeconnection($conn);
		if($nor>0)
			return true;
		else
			return false;
	}
	function getProfileDetails($mail)
	{
		$conn=connection();
		$sql="select name,mail,mob_no,gender,memb_time,join_date,gym_time,occup,f_mode from user_info where mail='$mail'";
		$result=mysqli_query($conn,$sql);
		$profdet=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
		 	if($row['mail']==$mail)
		 	{
		 		$flag=true;
			$profdet[0]=$row['name'];
			$profdet[1]=$row['mail'];
			$profdet[2]=$row['mob_no'];
			$profdet[3]=$row['gender'];
			$profdet[4]=$row['memb_time'];
			$profdet[5]=$row['join_date'];
			$profdet[6]=$row['gym_time'];
			$profdet[7]=$row['occup'];
			$profdet[8]=$row['f_mode'];
		
		}
		else
			$flag=false;
	}
		closeconnection($conn);
		return $profdet;
		return $flag;
	}
	function updateprofile($name,$mail,$mob_no,$gender,$memb_time,$join_date,$gym_time,$occup,$f_mode)
	{
		$conn=connection();
		$sql="update user_info set name='$name',mob_no='$mob_no',gender='$gender',memb_time='$memb_time',join_date='$join_date',gym_time='$gym_time',occup='$occup',f_mode='$f_mode' where mail='$mail'";
		$nor=mysqli_query($conn,$sql);
		closeconnection($conn);
		if($nor>0)
			return true;
		else
			return false;
	}
	function forgotpwd($eid,$answer)
	{
		$conn=connection();
		$sql1="select * from userinfo where eid='$eid'";
		$result1=mysqli_query($conn,$sql1);
		if(mysqli_num_rows($result1)>0)
		{
			while($row=mysqli_fetch_assoc($result1))
			{
				if($row['eid']==$eid)
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
	function question($eid)
	{
		$conn=connection();
		$flag="";
		$sql1="select * from userinfo where eid='$eid'";
		$result1=mysqli_query($conn,$sql1);
		if(mysqli_num_rows($result1)>0)
		{
			while($row=mysqli_fetch_assoc($result1))
			{
				if($row['eid']==$eid )
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
	function checkid($eid)
	{
		
		$conn=connection();
		$flag="";
		$sql="select eid from userinfo";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				if($row['eid']==$eid)
				{
				
					$flag=true;	
					break;
					}
					else{
						$flag=false;
					}	
			}
		}
		
		closeconnection($conn);
		return $flag;
	}
	function getjobDetailstodisplay()
	{
		$conn=connection();
		$sql="select name,mail,mob_no,gender,memb_time,join_date,gym_time,occup,f_mode from user_info ";
		//echo $sql;
		$result=mysqli_query($conn,$sql);
		$jobdet=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
			$jobdet[$i++]=array($row['name'],$row['mail'],$row['mob_no'],$row['gender'],$row['memb_time'],$row['join_date'],$row['gym_time'],$row['occup'],$row['f_mode']);
		
		}
		closeconnection($conn);
		return $jobdet;
	}
	function getspDetailstodisplay()
	{
		$conn=connection();
		$sql="select S1,S2,S3,S4 from service ";
		//echo $sql;
		$result=mysqli_query($conn,$sql);
		$jobdet=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
			$jobdet[$i++]=array($row['S1'],$row['S2'],$row['S3'],$row['S4']);
		
		}
		closeconnection($conn);
		return $jobdet;
	}

	function deleteEvent($delete)
	{
	$conn=connection();
		$sql="delete from user_info where mail='$delete'";	
		$result=mysqli_query($conn,$sql);
		closeconnection($conn);
			}