<?php
	
	function connection()
	{
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="jobportal";
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
				
					if($row['type']=='admin' || $row['type']=='user')
					{
						$flag=true;
					}	
					else
						$flag=false;	
				
			}
		closeconnection($conn);
		return $flag;
	}


	function register($uid,$pwd,$type,$question,$answer,$mob_no,$mail,$col_name,$mark_10th,$mark_12th,$CGPA,$pass_year,$domain,$catagory,$course,$skills,$date,$user_registered)
	{
		$conn=connection();
		$sql="insert into userinfo values('$uid','$pwd','$type','$question','$answer','$mob_no','$mail','$col_name','$mark_10th','$mark_12th','$CGPA','$pass_year','$domain','$catagory','$course','$skills','$date','$user_registered') ";
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

	function post_job($jid,$j_title,$j_desc,$c_name,$c_det,$c_loc,$no_of_vac,$exp_needed,$package,$domain,$catagory,$descipline,$skills,$post_date,$end_date,$date_of_camp_inter,$inter_req)
	{
		$conn=connection();
		$sql="insert into jobinfo values('$jid','$j_title','$j_desc','$c_name','$c_det','$c_loc','$no_of_vac','$exp_needed','$package','$domain','$catagory','$descipline','$skills','$post_date','$end_date','$date_of_camp_inter','$inter_req','yes') ";
		echo "".$sql;
		$nor=mysqli_query($conn,$sql);

		closeconnection($conn);
		if($nor>0)
			return true;
		else
			return false;
	}

	function getProfileDetails($id)
	{
		$conn=connection();
		$sql="select uid,pwd,type,question,answer,mob_no,mail,collage_name,mark_10th,mark_12th,cgpa,pass_year,domain,catagory,course,skills from userinfo where uid='$id'";
		$result=mysqli_query($conn,$sql);
		$profdet=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
			$profdet[0]=$row['uid'];
			$profdet[1]=$row['pwd'];
			$profdet[2]=$row['type'];
			$profdet[3]=$row['question'];
			$profdet[4]=$row['answer'];
			$profdet[5]=$row['mob_no'];
			$profdet[6]=$row['mail'];
			$profdet[7]=$row['collage_name'];
			$profdet[8]=$row['mark_10th'];
			$profdet[9]=$row['mark_12th'];
			$profdet[10]=$row['cgpa'];
			$profdet[11]=$row['pass_year'];
			$profdet[12]=$row['domain'];
			$profdet[13]=$row['catagory'];
			$profdet[14]=$row['course'];
			$profdet[15]=$row['skills'];
		
		}
		closeconnection($conn);
		return $profdet;
	}

	function updateprofile($uid,$pwd,$question,$answer,$mob_no,$mail,$col_name,$mark_10th,$mark_12th,$CGPA,$pass_year,$domain,$catagory,$course,$skills)
	{
		$conn=connection();
		$sql="update userinfo set pwd='$pwd',question='$question',answer='$answer',mob_no='$mob_no',mail='$mail',collage_name='$col_name',mark_10th='$mark_10th',mark_12th='$mark_12th',cgpa='$CGPA',pass_year='$pass_year',domain='$domain',catagory='$catagory',course='$course',skills='$skills' where uid='$uid'";
		$nor=mysqli_query($conn,$sql);
		closeconnection($conn);
		if($nor>0)
			return true;
		else 
			return false;
	}

	function getjobDetails($jid)
	{
		$conn=connection();
		$sql="select job_id,job_title,job_desc,comp_name,comp_det,location,no_of_vacancy,exp_needed,package,domain,catagory,course,skills,post_date,end_date,camp_inter_date,inter_req from jobinfo where job_id='$jid'";
		$result=mysqli_query($conn,$sql);
		$jobdet=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
			$jobdet[0]=$row['job_id'];
			$jobdet[1]=$row['job_title'];
			$jobdet[2]=$row['job_desc'];
			$jobdet[3]=$row['comp_name'];
			$jobdet[4]=$row['comp_det'];
			$jobdet[5]=$row['location'];
			$jobdet[6]=$row['no_of_vacancy'];
			$jobdet[7]=$row['exp_needed'];
			$jobdet[8]=$row['package'];
			$jobdet[9]=$row['domain'];
			$jobdet[10]=$row['catagory'];
			$jobdet[11]=$row['course'];
			$jobdet[12]=$row['skills'];
			$jobdet[13]=$row['post_date'];
			$jobdet[14]=$row['end_date'];
			$jobdet[15]=$row['camp_inter_date'];
			$jobdet[16]=$row['inter_req'];
		
		}
		closeconnection($conn);
		return $jobdet;
	}


	function updatejob($jid,$j_title,$c_name,$c_det,$c_loc,$no_of_vac,$exp_needed,$package,$j_desc,$domain,$catagory,$descipline,$skills,$post_date,$end_date,$date_of_camp_inter,$inter_req)
	{
		$conn=connection();
		$sql="update jobinfo set job_id='$jid',job_title='$j_title',job_desc='$j_desc',comp_name='$c_name',comp_det='$c_det',location='$c_loc',no_of_vacancy='$no_of_vac',exp_needed='$exp_needed',package='$package',domain='$domain',catagory='$catagory',course='$descipline',skills='$skills',post_date='$post_date',end_date='$end_date',camp_inter_date='$date_of_camp_inter',inter_req='$inter_req' where job_id='$jid'";
		$nor=mysqli_query($conn,$sql);
		closeconnection($conn);
		if($nor>0)
			return true;
		else 
			return false;
	}

	function getjobCatg()
	{
		$conn=connection();
		$sql="select distinct catagory from jobinfo";
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

	function getjobByCatg($catg)
	{
		$conn=connection();
		$sql="select job_id,job_title,job_desc,comp_name,comp_det,location,no_of_vacancy,exp_needed,package,domain,catagory,course,skills,post_date,end_date,camp_inter_date,inter_req from jobinfo where catagory='$catg'";

		$result=mysqli_query($conn,$sql);
		$pdets=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
		 		$pdets[$i++]=array($row['job_id'],$row['job_title'],$row['job_desc'],$row['comp_name'],$row['comp_det'],$row['location'],$row['no_of_vacancy'],$row['exp_needed'],$row['package'],$row['domain'],$row['catagory'],$row['course'],$row['skills'],$row['post_date'],$row['end_date'],$row['camp_inter_date'],$row['inter_req']);
		 }
		 closeconnection($conn);
		 return $pdets;

	}


		function getjobdom()
	{
		$conn=connection();
		$sql="select distinct domain from jobinfo";
		//echo "".$sql."<br>";
		$result=mysqli_query($conn,$sql);
		$doms=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
		 		$doms[$i++]=$row['domain'];

		 }
		 closeconnection($conn);
		 return $doms;
	
	}

	function getjobBydom($dom)
	{
		$conn=connection();
		$sql="select job_id,job_title,job_desc,comp_name,comp_det,location,no_of_vacancy,exp_needed,package,domain,catagory,course,skills,post_date,end_date,camp_inter_date,inter_req from jobinfo where domain='$dom'";

		$result=mysqli_query($conn,$sql);
		$pdets=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
		 		$pdets[$i++]=array($row['job_id'],$row['job_title'],$row['job_desc'],$row['comp_name'],$row['comp_det'],$row['location'],$row['no_of_vacancy'],$row['exp_needed'],$row['package'],$row['domain'],$row['catagory'],$row['course'],$row['skills'],$row['post_date'],$row['end_date'],$row['camp_inter_date'],$row['inter_req']);
		 }
		 closeconnection($conn);
		 return $pdets;

	}

	function getjobcor()
	{
		$conn=connection();
		$sql="select distinct course from jobinfo";
		$result=mysqli_query($conn,$sql);
		$cors=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
		 		$cors[$i++]=$row['course'];

		 }
		 closeconnection($conn);
		 return $cors;
	
	}


	function getjobBycor($cor)
	{
		$conn=connection();
		$sql="select job_id,job_title,job_desc,comp_name,comp_det,location,no_of_vacancy,exp_needed,package,domain,catagory,course,skills,post_date,end_date,camp_inter_date,inter_req from jobinfo where course='$cor'";

		$result=mysqli_query($conn,$sql);
		$pdets=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
		 		$pdets[$i++]=array($row['job_id'],$row['job_title'],$row['job_desc'],$row['comp_name'],$row['comp_det'],$row['location'],$row['no_of_vacancy'],$row['exp_needed'],$row['package'],$row['domain'],$row['catagory'],$row['course'],$row['skills'],$row['post_date'],$row['end_date'],$row['camp_inter_date'],$row['inter_req']);
		 }
		 closeconnection($conn);
		 return $pdets;

	}


	function getjobskill()
	{
		$conn=connection();
		$sql="select distinct skills from jobinfo";
		$result=mysqli_query($conn,$sql);
		$skills=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
		 		$skills[$i++]=$row['skills'];

		 }
		 closeconnection($conn);
		 return $skills;
	
	}


	function getjobByskill($skill)
	{
		$conn=connection();
		$sql="select job_id,job_title,job_desc,comp_name,comp_det,location,no_of_vacancy,exp_needed,package,domain,catagory,course,skills,post_date,end_date,camp_inter_date,inter_req from jobinfo where skills='$skill'";

		$result=mysqli_query($conn,$sql);
		$pdets=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
		 		$pdets[$i++]=array($row['job_id'],$row['job_title'],$row['job_desc'],$row['comp_name'],$row['comp_det'],$row['location'],$row['no_of_vacancy'],$row['exp_needed'],$row['package'],$row['domain'],$row['domain'],$row['course'],$row['skills'],$row['post_date'],$row['end_date'],$row['camp_inter_date'],$row['inter_req']);
		 }
		 closeconnection($conn);
		 return $pdets;

	}


	function getpostedjobs($catg,$dom,$cor,$skill)
	{
		$conn=connection();
		$sql1="select * from jobinfo";
		//echo "".$sql1."<br>";
	if($catg!=null && $dom!=null && $cor!=null && $skill!=null)
		{
		 	$sql=$sql1." where catagory='$catg' and domain='$dom' and course='$cor' and skills='$skill'";
		 	//echo "".$sql."<br>";
		}
	else if($dom!=null && $cor!=null && $skill!=null)
		{
			$sql=$sql1." where domain='$dom' and course='$cor' and skills='$skill'";	
			//echo "".$sql."<br>";
		}
	else if($catg!=null && $cor!=null && $skill!=null)
		{
			$sql=$sql1." where catagory='$catg' and course='$cor' and skills='$skill'";	
			//echo "".$sql."<br>";
		}
	else if($catg!=null && $dom!=null && $skill!=null)
		{
			$sql=$sql1." where catagory='$catg' and domain='$dom' and skills='$skill'";	
			//echo "".$sql."<br>";
		}
	else if($catg!=null && $dom!=null && $cor!=null)
		{
			$sql=$sql1." where catagory='$catg' and domain='$dom' and course='$cor'";	
			//echo "".$sql."<br>";
		}
	else if($cor!=null && $skill!=null)
		{
			$sql=$sql1." where course='$cor' and skills='$skill'";	
			//echo "".$sql."<br>";
		}
	else if($dom!=null && $skill!=null)
		{
			$sql=$sql1." where domain='$dom' and skills='$skill'";	
			//echo "".$sql."<br>";
		}
	else if($dom!=null && $cor!=null)
		{
			$sql=$sql1." where domain='$dom' and course='$cor'";	
			//echo "".$sql."<br>";
		}
	else if($catg!=null && $skill!=null)
		{
			$sql=$sql1." where catagory='$catg' and skills='$skill'";	
			//echo "".$sql."<br>";
		}
	else if($catg!=null && $cor!=null)
		{
			$sql=$sql1." where catagory='$catg' and course='$cor'";	
			//echo "".$sql."<br>";
		}
	else if($catg!=null && $dom!=null)
		{
			$sql=$sql1." where catagory='$catg' and domain='$dom'";	
			//echo "".$sql."<br>";
		}
	else if($skill!=null)
		{
			$sql=$sql1." where skills='$skill' ";	
			//echo "".$sql."<br>";
		}
	else if($cor!=null)
		{
			$sql=$sql1." where course='$cor' ";
			//echo "".$sql."<br>";
		}
	else if($dom!=null)
		{
			$sql=$sql1." where domain='$dom' ";
			echo "".$sql."<br>";
		}
	else 
		{
			$sql=$sql1." where catagory='$catg' ";
			//echo "".$sql."<br>";
		}

		$result=mysqli_query($conn,$sql);
		$jobdet=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
			{
		 		$jobdet[$i++]=array($row['job_id'],$row['job_title'],$row['job_desc'],$row['comp_name'],$row['comp_det'],$row['location'],$row['no_of_vacancy'],$row['exp_needed'],$row['package'],$row['domain'],$row['catagory'],$row['course'],$row['skills'],$row['post_date'],$row['end_date'],$row['camp_inter_date'],$row['inter_req']);
		 	}
		 
		closeconnection($conn);
		return $jobdet;
	}



	function getjobDetailstodisplay($disp)
	{
		$conn=connection();
		$sql="select job_id,job_title,job_desc,comp_name,comp_det,location,no_of_vacancy,exp_needed,package,domain,catagory,course,skills,post_date,end_date,camp_inter_date,inter_req,posted from jobinfo where posted='$disp'";
		$result=mysqli_query($conn,$sql);
		$jobdet=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
			$jobdet[$i++]=array($row['job_id'],$row['job_title'],$row['job_desc'],$row['comp_name'],$row['comp_det'],$row['location'],$row['no_of_vacancy'],$row['exp_needed'],$row['package'],$row['domain'],$row['catagory'],$row['course'],$row['skills'],$row['post_date'],$row['end_date'],$row['camp_inter_date'],$row['inter_req'],$row['posted']);
		
		}
		closeconnection($conn);
		return $jobdet;
	}

	function get_application_id()
	{
		$conn=connection();
		$sql="select max(appl_id) as maxid from application_info ";
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


	function get_jid_from_appltable($uid,$job_id)
	{
		$conn=connection();
		$sql="select job_id from application_info where uid='$uid' and job_id='$job_id'";
		$result=mysqli_query($conn,$sql);
		$jobids=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
		 		$jobids[$i++]=$row['job_id'];

		 }
		 $size=sizeof($jobids);
		 closeconnection($conn);
		 if($size>0)
		 	return true;
		 else
		 	return false;
	}


	function apply($aid,$uid,$job_id,$status,$appl_date,$job_status,$remarks)
	{
		$conn=connection();
		$sql="insert into application_info values('$aid','$uid','$job_id','$status','$appl_date','$job_status','$remarks')";
		$result=mysqli_query($conn,$sql);

		closeconnection($conn);
		if($result>0)
			return true;
		else 
			return false;
	}

	function getCandidateCatg()
	{
		$conn=connection();
		$sql="select distinct catagory from userinfo where type='user'";
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

	function getcandidatedom()
	{
		$conn=connection();
		$sql="select distinct domain from userinfo where type='user'";
		//echo "".$sql."<br>";
		$result=mysqli_query($conn,$sql);
		$doms=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
		 		$doms[$i++]=$row['domain'];

		 }
		 closeconnection($conn);
		 return $doms;
	
	}

	function getcandidatecor()
	{
		$conn=connection();
		$sql="select distinct course from userinfo where type='user'";
		$result=mysqli_query($conn,$sql);
		$cors=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
		 		$cors[$i++]=$row['course'];

		 }
		 closeconnection($conn);
		 return $cors;
	
	}

	function getcandidateskill()
	{
		$conn=connection();
		$sql="select distinct skills from userinfo where type='user'";
		$result=mysqli_query($conn,$sql);
		$skills=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
		 		$skills[$i++]=$row['skills'];

		 }
		 closeconnection($conn);
		 return $skills;
	
	}


	function getregisteredcandidate($catg,$dom,$cor,$skill)
	{
		$conn=connection();
		$sql1="select * from userinfo";
		//echo "".$sql1."<br>";
	if($catg!=null && $dom!=null && $cor!=null && $skill!=null)
		{
		 	$sql=$sql1." where type='user' and catagory='$catg' and domain='$dom' and course='$cor' and skills='$skill'";
		 	//echo "".$sql."<br>";
		}
	else if($dom!=null && $cor!=null && $skill!=null)
		{
			$sql=$sql1." where type='user' and domain='$dom' and course='$cor' and skills='$skill'";	
			//echo "".$sql."<br>";
		}
	else if($catg!=null && $cor!=null && $skill!=null)
		{
			$sql=$sql1." where type='user' and catagory='$catg' and course='$cor' and skills='$skill'";	
			//echo "".$sql."<br>";
		}
	else if($catg!=null && $dom!=null && $skill!=null)
		{
			$sql=$sql1." where type='user' and catagory='$catg' and domain='$dom' and skills='$skill'";	
			//echo "".$sql."<br>";
		}
	else if($catg!=null && $dom!=null && $cor!=null)
		{
			$sql=$sql1." where type='user' and catagory='$catg' and domain='$dom' and course='$cor'";	
			//echo "".$sql."<br>";
		}
	else if($cor!=null && $skill!=null)
		{
			$sql=$sql1." where type='user' and course='$cor' and skills='$skill'";	
			//echo "".$sql."<br>";
		}
	else if($dom!=null && $skill!=null)
		{
			$sql=$sql1." where type='user' and domain='$dom' and skills='$skill'";	
			//echo "".$sql."<br>";
		}
	else if($dom!=null && $cor!=null)
		{
			$sql=$sql1." where type='user' and domain='$dom' and course='$cor'";	
			//echo "".$sql."<br>";
		}
	else if($catg!=null && $skill!=null)
		{
			$sql=$sql1." where type='user' and catagory='$catg' and skills='$skill'";	
			//echo "".$sql."<br>";
		}
	else if($catg!=null && $cor!=null)
		{
			$sql=$sql1." where type='user' and catagory='$catg' and course='$cor'";	
			//echo "".$sql."<br>";
		}
	else if($catg!=null && $dom!=null)
		{
			$sql=$sql1." where type='user' and catagory='$catg' and domain='$dom'";	
			//echo "".$sql."<br>";
		}
	else if($skill!=null)
		{
			$sql=$sql1." where type='user' and skills='$skill' ";	
			//echo "".$sql."<br>";
		}
	else if($cor!=null)
		{
			$sql=$sql1." where type='user' and course='$cor' ";
			//echo "".$sql."<br>";
		}
	else if($dom!=null)
		{
			$sql=$sql1." where type='user' and domain='$dom' ";
			//echo "".$sql."<br>";
		}
	else 
		{
			$sql=$sql1." where type='user' and catagory='$catg' ";
			//echo "".$sql."<br>";
		}

		$result=mysqli_query($conn,$sql);
		$profdet=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
			{
		 	$profdet[$i++]=array($row['uid'],$row['mob_no'],$row['mail'],$row['collage_name'],$row['mark_10th'],$row['mark_12th'],$row['cgpa'],$row['pass_year'],$row['domain'],$row['catagory'],$row['course'],$row['skills']);
		 	}
		 
		closeconnection($conn);
		return $profdet;
	}


	function getcandidateDetailstodisplay($type)
	{
		$conn=connection();
		$sql="select uid,pwd,type,question,answer,mob_no,mail,collage_name,mark_10th,mark_12th,cgpa,pass_year,domain,catagory,course,skills from userinfo where type='$type'";
		$result=mysqli_query($conn,$sql);
		$profdet=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
			$profdet[$i++]=array($row['uid'],$row['mob_no'],$row['mail'],$row['collage_name'],$row['mark_10th'],$row['mark_12th'],$row['cgpa'],$row['pass_year'],$row['domain'],$row['catagory'],$row['course'],$row['skills']);
		}
		closeconnection($conn);
		return $profdet;
	}


	function getappliedcandidateDetailstodisplay($uidd)
	{
		$conn=connection();
		$sql="select uid,pwd,type,question,answer,mob_no,mail,collage_name,mark_10th,mark_12th,cgpa,pass_year,domain,catagory,course,skills from userinfo where uid='$uidd'";
		//echo $sql."<br>";
		$result=mysqli_query($conn,$sql);
		$profdet=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
			$profdet[$i++]=array($row['uid'],$row['mob_no'],$row['mail'],$row['collage_name'],$row['mark_10th'],$row['mark_12th'],$row['cgpa'],$row['pass_year'],$row['domain'],$row['catagory'],$row['course'],$row['skills']);
		}
		closeconnection($conn);
		return $profdet;
	}

	function get_stud_by_status($status)
	{
		$conn=connection();
		$sql="select distinct uid from application_info where status='$status'";
		//echo $sql."<br>";
		$result=mysqli_query($conn,$sql);
		$uidd=array();$i=0;
		while ($row=mysqli_fetch_assoc($result))
		{
			$uidd[$i++]=$row['uid'];
		}
		closeconnection($conn);
		return $uidd;
	}

	function get_appl_details($uid)
	{
		$conn=connection();
		$sql="select appl_id,job_id,status,appl_date,job_status,remarks from application_info where uid='$uid'";
			//echo $sql."<br>";
		$result=mysqli_query($conn,$sql);
		$appl_det=array();$i=0;
		while ($row=mysqli_fetch_assoc($result))
		{
			$appl_det[$i++]=array($row['appl_id'],$row['job_id'],$row['status'],$row['appl_date'],$row['job_status'],$row['remarks']);
		}
		closeconnection($conn);
		return $appl_det;
	}

	function get_selection_id()
	{
		$conn=connection();
		$sql="select max(sid) as maxid from selection_info ";
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

	function select($sid,$uid,$jid,$mob_no,$mail,$sel_date)
	{
		$conn=connection();
		$sql="insert into selection_info values('$sid','$uid','$jid','$mob_no','$mail','$sel_date')";
		$result=mysqli_query($conn,$sql);

		closeconnection($conn);
		if($result>0)
			return true;
		else 
			return false;
	}

	function update_applinfo($uid,$jid)
	{
		$conn=connection();
		$sql2="UPDATE application_info SET job_status='selected',remarks='good' where uid='$uid' and job_id='$jid'";
		$result2=mysqli_query($conn,$sql2);
		closeconnection($conn);
		if($result2>0)
			return true;
		else
			return false;
	}


	function get_jiduid_from_seltable($uid,$jid)
	{
		$conn=connection();
		$sql="select uid,jid from selection_info where uid='$uid' and jid='$jid'";
		$result=mysqli_query($conn,$sql);
		$jobids=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		 {
		 		$jobids[$i++]=array($row['uid'],$row['jid']);

		 }
		 $size=sizeof($jobids);
		 closeconnection($conn);
		 if($size>0)
		 	return true;
		 else
		 	return false;
	}

	function get_sel_details()
	{
		$conn=connection();
		$sql="select sid,uid,jid,mob_no,mail,sel_date from selection_info";
			//echo $sql."<br>";
		$result=mysqli_query($conn,$sql);
		$sel_det=array();$i=0;
		while ($row=mysqli_fetch_assoc($result))
		{
			$sel_det[$i++]=array($row['sid'],$row['uid'],$row['jid'],$row['mob_no'],$row['mail'],$row['sel_date']);
		}
		closeconnection($conn);
		return $sel_det;
	}

?>


