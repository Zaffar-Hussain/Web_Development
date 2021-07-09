<?php 
require('dbfunct.php');
session_start();
$appl_msg="";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Search For Candidates</title>
	<link rel="stylesheet" href="css/style.css">	
</head>
<body>
	<div style = "width:100%"> 
		<div style = "background-color:lightgrey; width:100%; height: 35px">
            <center><h1><font color="green">WELCOME TO THE CAMPUS JOB PORTAL</font></h1></center>
         </div>  
         <div style = "background-color:PaleGoldenRod; height:1000px; width:100px; float:left;">
            <div><b>Main Menu</b></div>
            <a href="disp_job_info.php">Display Job</a><br>
             <a href="edit_job.php">Edit Job</a><br>
             <a href="sel_history.php"><font size="2px">Selection History</font></a><br>
             <a href="aboutus.php">About Us</a><br />
             <a href="faqs.php">FAQ's</a><br />
             <a href="logout.php">Logout</a>
         </div>
         <div style = "background-color:#eee; height:1000px; width:1028px; float:left;" >
	<form name=show method=get action="">
		<div style="background-color: #27ae60; text-align: left;"><br>
		<font color="white">Search Candidate By &nbsp&nbsp&nbsp&nbsp</font>	
		<font color="white">Category:</font>
		<select name=catg >
			<option>choose</option>
			<?php
				$catgs=getCandidateCatg();
				$catg="";
				if(isset($_REQUEST['catg']))
					$catg=$_REQUEST['catg'];
				foreach ($catgs as  $value) 
				{
					if($catg==$value)
					echo "<option selected>".$value."</option>";
					else
					echo "<option>".$value."</option>";
			
				}



			?>

		</select>

		<font color="white">Domain:</font>
		<select name=dom >
			<option>choose</option>
			<?php
				$doms=getcandidatedom();
				$dom="";
				if(isset($_REQUEST['dom']))
					$dom=$_REQUEST['dom'];
				foreach ($doms as  $value) 
				{
					if($dom==$value)
					echo "<option selected>".$value."</option>";
					else
					echo "<option>".$value."</option>";
			
				}



			?>

		</select>

		<font color="white">Course:</font>
		<select name=cor >
			<option>choose</option>
			<?php
				$cors=getcandidatecor();
				$cor="";
				if(isset($_REQUEST['cor']))
					$cor=$_REQUEST['cor'];
				foreach ($cors as  $value) 
				{
					if($cor==$value)
					echo "<option selected>".$value."</option>";
					else
					echo "<option>".$value."</option>";
			
				}



			?>

		</select>

		<font color="white">Skills:</font>
		<select name=skill >
			<option>choose</option>
			<?php
				$skills=getcandidateskill();
				$skill="";
				if(isset($_REQUEST['skill']))
					$skill=$_REQUEST['skill'];
				foreach ($skills as  $value) 
				{
					if($skill==$value)
					echo "<option selected>".$value."</option>";
					else
					echo "<option>".$value."</option>";
			
				}



			?>

		</select>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="submit" name="search" value="search"><br><br>
		</div>
		<table border=1 bgcolor="cyan" >	
		<?php
		$msg="";
		$catg=$dom=$cor=$skill="";
		$pdets=array();
		if(isset($_REQUEST['search']))
		{
			
			if(isset($_REQUEST['catg']))
			{	
				if($_REQUEST['catg']=="choose")
					$catg=null;
				else
					$catg=$_REQUEST['catg'];
			}

			if(isset($_REQUEST['dom']))
			{
				if($_REQUEST['dom']=="choose")
					$dom=null;
				else
					$dom=$_REQUEST['dom'];
			}

			if(isset($_REQUEST['cor']))
			{
				if($_REQUEST['cor']=="choose")
					$cor=null;
				else
					$cor=$_REQUEST['cor'];
			}

			if(isset($_REQUEST['skill']))
			{
				if($_REQUEST['skill']=="choose")
					$skill=null;
				else
					$skill=$_REQUEST['skill'];
			}
					echo "<tr bgcolor=pink><td>uid</td><td>mob_no</td><td>Mail</td><td>collage name</td><td>10th marks</td><td>12th marks</td><td>CGPA </td><td>year of passing</td><td>domain</td><td>catagory</td><td>course</td><td>skills</td><td>select</td></tr>";
					$pdets=getregisteredcandidate($catg,$dom,$cor,$skill);
					$i=0;
					$jobids=array();
					foreach ($pdets as $pdet)
					{
						$str="<tr><td>$pdet[0]</td>";
						$str=$str."<td>$pdet[1]</td>";
						$str=$str."<td>$pdet[2]</td>";
						$str=$str."<td>$pdet[3]</td>";
						$str=$str."<td>$pdet[4]</td>";
						$str=$str."<td>$pdet[5]</td>";
						$str=$str."<td>$pdet[6]</td>";
						$str=$str."<td>$pdet[7]</td>";
						$str=$str."<td>$pdet[8]</td>";
						$str=$str."<td>$pdet[9]</td>";
						$str=$str."<td>$pdet[10]</td>";
						$str=$str."<td>$pdet[11]</td>";
						$str=$str."<td><input type=checkbox name=ch$pdet[0]></td>";


						echo $str;
						$jobids[$pdet[0]]=array($pdet[1],$pdet[2]);
					}
					$_SESSION['jobids']=$jobids;
		}


		?>


</table><br><br>
<!--</form>
<form name=all method=get action="" onload="this.form.submit()">!-->
	<input type="submit" name="display" id="display_button" value="CLICK HERE TO DISPLAY ALL THE REGISTERED CANDIDATES"><br>
<table border=1 bgcolor="cyan" >
	<?php
	$msg="";
	$type='user';
	$pdets2=array();
	if(isset($_REQUEST['display']))
	{
		echo "<tr bgcolor=pink><td>uid</td><td>mob_no</td><td>Mail</td><td>collage name</td><td>10th marks</td><td>12th marks</td><td>CGPA</td><td>year of passing</td><td>domain</td><td>catagory</td><td>course</td><td>skills</td><td>select</td></tr>";
					$pdets2=getcandidateDetailstodisplay($type);
					$i=0;
					$jobids=array();
					foreach ($pdets2 as $pdet)
					{
						$str="<tr><td>$pdet[0]</td>";
						$str=$str."<td>$pdet[1]</td>";
						$str=$str."<td>$pdet[2]</td>";
						$str=$str."<td>$pdet[3]</td>";
						$str=$str."<td>$pdet[4]</td>";
						$str=$str."<td>$pdet[5]</td>";
						$str=$str."<td>$pdet[6]</td>";
						$str=$str."<td>$pdet[7]</td>";
						$str=$str."<td>$pdet[8]</td>";
						$str=$str."<td>$pdet[9]</td>";
						$str=$str."<td>$pdet[10]</td>";
						$str=$str."<td>$pdet[11]</td>";
						$str=$str."<td><input type=checkbox name=ch$pdet[0]></td>";


						echo $str;
						$jobids[$pdet[0]]=array($pdet[1],$pdet[2]);
					}
					$_SESSION['jobids']=$jobids;

	}




	?>
</table><br>

	<!--</form>

<form name=all method=get action="" onload="this.form.submit()">!-->
	<input type="submit" name="dispappstud" id="display_button" value="CLICK HERE TO DISPLAY ALL THE CANDIDATES WHO APPLIED FOR JOB "><br>
<table border=1 bgcolor="cyan" >
	<?php
	$msg="";
	$status='applied';
	$type='user';
	$pdets2=array();
	$uid_by_status=array();
	//$uid_by_status=array();
	if(isset($_REQUEST['dispappstud']))
	{
		$uid_by_status=get_stud_by_status($status);$j=0;

		echo "<tr bgcolor=pink><td>uid</td><td>mob_no</td><td>Mail</td><td>collage name</td><td>10th marks</td><td>12th marks</td><td>CGPA</td><td>year of passing</td><td>domain</td><td>catagory</td><td>course</td><td>skills</td><td>select</td></tr>";

		foreach($uid_by_status as $uidd)
		{
		
					$pdets2=getappliedcandidateDetailstodisplay($uidd);
					$i=0;
					$jobids=array();
					foreach ($pdets2 as $pdet)
					{
						$str="<tr><td>$pdet[0]</td>";
						$str=$str."<td>$pdet[1]</td>";
						$str=$str."<td>$pdet[2]</td>";
						$str=$str."<td>$pdet[3]</td>";
						$str=$str."<td>$pdet[4]</td>";
						$str=$str."<td>$pdet[5]</td>";
						$str=$str."<td>$pdet[6]</td>";
						$str=$str."<td>$pdet[7]</td>";
						$str=$str."<td>$pdet[8]</td>";
						$str=$str."<td>$pdet[9]</td>";
						$str=$str."<td>$pdet[10]</td>";
						$str=$str."<td>$pdet[11]</td>";
						$str=$str."<td><input type=checkbox name=ch$pdet[0]></td>";


						echo $str;
						$jobids[$pdet[0]]=array($pdet[1],$pdet[2]);
					}

				}
				$_SESSION['jobids']=$jobids;

	}




	?>
</table><br>
<input type="text" name="jid" placeholder="enter the id of the job to select student for particular job" style="width: 100%;">
<input type="submit" name="select" id="display_button" value="click here to recruit the selected Students"><br>
<?php
if(isset($_REQUEST['select']))
{
	
	if(isset($_SESSION['jobids']))
	{
		
		$job_id=$_SESSION['jobids'];
		foreach ($job_id as $id => $jobid) 
		{
			$chname="ch".$id;
			if(isset($_REQUEST[$chname]))
			{
				$jid=$_REQUEST['jid'];
				$sid=get_selection_id();
				$uid=$id;
				$sel_date=date('Y-m-d');
				$i=0;
				foreach($jobid as $det)
				{
					$dets[$i]=$det;
					$i++;
				}
				$mob_no=$dets[0];
				$mail=$dets[1];
				if(!get_jiduid_from_seltable($uid,$jid))
				{
				if(select($sid,$uid,$jid,$mob_no,$mail,$sel_date)==true)
				{	
					$uid=$id;
					if(update_applinfo($uid,$jid)==true)
						$appl_msg="<font color=green>Selected Successfully</font>";
					else
					$appl_msg="<font color=red>Selected Unsuccessfully</font>";
				}
				else
					$appl_msg="<font color=red>Selected2 Unsuccessfully</font>";
				}
				else
					$appl_msg="<font color=red>Student already selected for this job </font>";


			}
		}
	}
}
?>
<span><?php echo $appl_msg; ?></span>

	</form><br>
</div>
<div style = "background-color:PaleGoldenRod; height:1000px; width:205px; float:right;">
            <div><b></b></div>
            ADS<br />
            INFO<br />
            NEWS
         </div> 
         <div style = "background-color:lightgrey; clear:both">
            <center>
               Project by [ Fathima Sunitha Thushar Zafar ]
            </center>
         </div> 
</div>
</body>
</html>