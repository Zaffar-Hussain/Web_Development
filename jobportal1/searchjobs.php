<?php 
require('dbfunct.php');
session_start();
//$uid=$_SESSION['uid'];
$appl_msg="";
$kali="";
$kalii="";
$jobids=array();$k=0;
$iid=$_SESSION['uid'];
$url=$_SERVER['REQUEST_URI'];
$url="http://localhost".$url."";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Search For Jobs</title>
	<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0 auto;
  background-image: url('image/job14.png');
  background-size: cover;
  background-repeat: no-repeat;
}

/* Style the header */

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}


.column {
 width:450px;
    height:350px;
    background-color:rgba(0,0,0,0.5);
    margin:0 auto;
    margin-top:100px;
    padding-top:30px;
    padding-left: 60px;
    border-radius:15px;
    color:white;
    font-weight:bolder;
    box-shadow:inset 4px 4px rgba(0,0,0,20);
  
}
#display_button{
	width:70%;
	margin-top:10px;

	background-color:#27ae60;
	padding:5px;
	color:white;
	margin-left: 15%;
	text-align:center;
	font-size:18px;
	font-weight:bold;
	border-radius: 15px;
}
.display_button{
	width:100%;
	margin-top:10px;
	background-color:red;
	padding:5px;
	color:white;
	
	text-align:center;
	font-size:18px;
	font-weight:bold;
	
}
</style>
	<link rel="stylesheet" href="css/style.css">	
</head>

  <body>      
		<div class="topnav">
  		<a href="login.php">Home</a>
  		<a href=disp_prof.php>Display Profile</a>
  		<a href="edit_prof.php">Edit Profile</a>
  		<a href="applhistory.php">Application History</a>
  		<a href="logout.php">logout</a>
		</div>

	<form name=show method=get action="">
		<div id="display_button" style="background-color: #27ae60; text-align: left;"><br>
		<font color="white">Search Job By &nbsp&nbsp&nbsp&nbsp</font>	
		<font color="white">Category:</font>
		<select name=catg >
			<option>choose</option>
			<?php
				$catgs=getjobCatg();
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
			<option> choose</option>
			<?php
				$doms=getjobdom();
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
			<option> choose</option>
			<?php
				$cors=getjobcor();
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
			<option> choose</option>
			<?php
				$skills=getjobskill();
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
					$pdets=getpostedjobs($catg,$dom,$cor,$skill);
					$i=0;
					if(sizeof($pdets)==0)
						$kali="<font color=red>No jobs available for given search combination</font>";
					else
					{
					// "<tr bgcolor=pink><td>jid</td><td>j_title</td><td>job_desc</td><td>Comp_name</td><td>comp_det</td><td>location</td><td>no_of_vacancy</td><td>exp_needed</td><td>package</td><td>domain</td><td>catagory</td><td>course</td><td>skills</td><td>post_date</td><td>end_date</td><td>camp_inter_date</td><td>inter_req</td><td>select</td></tr>";
					//$jobids=array();$k=0;
					//$pdets=getpostedjobs($catg,$dom,$cor,$skill);
					//$i=0;
					foreach ($pdets as $pdet)
					{
						$str2="<br><div style=background-color:#4b6584; width:80%; border-radius=10px;><table><tr><td>JOB ID</td><td>$pdet[0]</td></tr>";
						$str2=$str2."<tr><td><font color=red><strong>JOB AVAILABLE FROM: </strong></font> </td><td><font color=red><strong>$pdet[13]</strong></font></td><td><font color=red><strong>TO: </strong></font></td><td><font color=red><strong>$pdet[14]</strong></font></td></tr>";
						$str2=$str2."<tr><td><strong>JOB TITLE</strong></td><td>$pdet[1]</td></tr>";
						$str2=$str2."<tr><td><strong>job description</strong></td><td>$pdet[2]</td></tr>";
						$str2=$str2."<tr><td><strong>Company name</strong></td><td>$pdet[3]</td></tr>";
						$str2=$str2."<tr><td><strong>company details</strong></td><td>$pdet[4]</td></tr>";
						$str2=$str2."<tr><td><strong>location</strong></td><td>$pdet[5]</td></tr>";
						$str2=$str2."<tr><td><strong>no_of_vacancy</strong></td><td>$pdet[6]</td></tr>";
						$str2=$str2."<tr><td><strong>exp_needed</strong></td><td>$pdet[7]</td></tr>";
						$str2=$str2."<tr><td><strong>package</strong></td><td>$pdet[8]</td></tr>";
						$str2=$str2."<tr><td><strong>domain</strong></td><td>$pdet[9]</td></tr>";
						$str2=$str2."<tr><td><strong>catagory</strong></td><td>$pdet[10]</td></tr>";
						$str2=$str2."<tr><td><strong>course</strong></td><td>$pdet[11]</td></tr>";
						$str2=$str2."<tr><td><strong>skills</strong></td><td>$pdet[12]</td></tr>";
						$str2=$str2."<tr><td><strong>post_date</strong></td><td>$pdet[13]</td></tr>";
						$str2=$str2."<tr><td><strong>end_date</strong></td><td>$pdet[14]</td></tr>";
						$str2=$str2."<tr><td><strong>camp_inter_date</strong></td><td>$pdet[15]</td></tr>";
						$str2=$str2."<tr><td><strong>inter_req</strong></td><td>$pdet[16]</td></tr>";
						$str2=$str2."<tr><td><strong>select</strong><input type=checkbox name=ch$pdet[0]></td></tr></table></div><br>";
						echo $str2;

						$jobids[$pdet[0]]=$pdet[0];
					}
					$_SESSION['jobids']=$jobids;
				}	
		}


		?>



<span><?php echo $kali; ?></span><br>
<!--</form>
<form name=all method=get action="" onload="this.form.submit()"><!-->
	<input type="submit" name="display" class="display_button" value="ALL AVAILABLE JOBS"><br>


	<?php
	$msg="";
	$disp="yes";
	$pdets2=array();
	if(isset($_REQUEST['display']))
	{
		$pdets2=getjobDetailstodisplay($disp);
		$i=0;
		if(sizeof($pdets2)==0)
			$kalii="<font color=red>No available jobs</font>";
		else
		{
		
					
					foreach ($pdets2 as $pdet)
					{
						$str2="<br><div style=background-color:#4b6584; width:300px; border-radius=10px;><table><tr><td>jid</td><td>$pdet[0]</td></tr>";
						$str2=$str2."<tr><td>job title</td><td>$pdet[1]</td></tr>";
						$str2=$str2."<tr><td>job description</td><td>$pdet[2]</td></tr>";
						$str2=$str2."<tr><td>Company name</td><td>$pdet[3]</td></tr>";
						$str2=$str2."<tr><td>company details</td><td>$pdet[4]</td></tr>";
						$str2=$str2."<tr><td>location</td><td>$pdet[5]</td></tr>";
						$str2=$str2."<tr><td>no_of_vacancy</td><td>$pdet[6]</td></tr>";
						$str2=$str2."<tr><td>exp_needed</td><td>$pdet[7]</td></tr>";
						$str2=$str2."<tr><td>package</td><td>$pdet[8]</td></tr>";
						$str2=$str2."<tr><td>domain</td><td>$pdet[9]</td></tr>";
						$str2=$str2."<tr><td>catagory</td><td>$pdet[10]</td></tr>";
						$str2=$str2."<tr><td>course</td><td>$pdet[11]</td></tr>";
						$str2=$str2."<tr><td>skills</td><td>$pdet[12]</td></tr>";
						$str2=$str2."<tr><td>post_date</td><td>$pdet[13]</td></tr>";
						$str2=$str2."<tr><td>end_date</td><td>$pdet[14]</td></tr>";
						$str2=$str2."<tr><td>camp_inter_date</td><td>$pdet[15]</td></tr>";
						$str2=$str2."<tr><td>inter_req</td><td>$pdet[16]</td></tr>";
						$str2=$str2."<tr><td>select</td><td><input type=checkbox name=ch$pdet[0]></td></tr></table></div><br>";
						echo $str2;
						$jobids[$pdet[0]]=$pdet[0];
					}

					$_SESSION['jobids']=$jobids;
				}
	}
?>

<span><?php echo $kalii; ?></span><br>

	<input type="submit" name="apply" class="display_button"  value="APPLY FOR THE JOB"><br>
<?php
if(isset($_REQUEST['apply']))
{
	
	if(isset($_SESSION['jobids']))
	{
		
		$job_id=$_SESSION['jobids'];
		foreach ($job_id as $id => $jobid) 
		{
			$chname="ch".$id;
			if(isset($_REQUEST[$chname]))
			{
				$aid=get_application_id();
				$uid=$_SESSION['uid'];
				$status="applied";
				$appl_date=date('Y-m-d');
				$job_status="not seen by recruiter ";
				$remarks="nill";
				$job_id=$jobid;
				if(!get_jid_from_appltable($uid,$job_id))
				{
					if(apply($aid,$uid,$job_id,$status,$appl_date,$job_status,$remarks)==true)
						$appl_msg="<font color=green>Applied Successfully</font>";
					else
						$appl_msg="<font color=red>Applied Unsuccessfully</font>";
				}
				else
					$appl_msg="<font color=red>already applied for this job</font>";
			}
		}
	}
}
?>
<span><?php echo $appl_msg; ?></span>

	</form>
	</div>
 

</body>
</html>