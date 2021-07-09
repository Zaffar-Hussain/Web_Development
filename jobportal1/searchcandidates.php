<?php 
require('dbfunct.php');
session_start();
$appl_msg="";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Search For Candidates</title>

	<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0 auto;
  background-image: url('image/bak1.jpg');
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
.display_button{
	width:50%;
	margin-top:10px;
	background-color:#27ae60;
	padding:5px;
	color:white;
	margin-left: 25%;
	text-align:center;
	font-size:18px;
	font-weight:bold;
	border-radius: 15px;
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
.tabl
{
	width: 300px;
	margin-left:40%; 
	border-radius: 10px;
	background-color: #8854d0;
}
.display_buttonn{
	width:65%;
	margin-top:10px;
	background-color:#27ae60;
	padding:5px;
	color:white;
	margin-left: 17%;
	text-align:center;
	font-size:18px;
	font-weight:bold;
	border-radius: 15px;
}

</style>
	<link rel="stylesheet" href="css/style.css">	
</head>
<body>
	
	<div class="topnav">
  		<a href="login.php">Home</a>
  		<a href="postjob.php">Post Job</a>
  		<a href="disp_job_info.php">Display Job</a>
  		<a href="edit_job.php">Edit Job</a>
  		<a href="sel_history.php">Selection History</a>
  		<a href="logout.php">logout</a>
		</div><br>
	
		
         
         
	<form name=show method=get action="">
		<div id="display_buttonn" style="background-color: #27ae60; text-align: left;"><br>
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
					//echo "<tr bgcolor=pink><td>uid</td><td>mob_no</td><td>Mail</td><td>collage name</td><td>10th marks</td><td>12th marks</td><td>CGPA </td><td>year of passing</td><td>domain</td><td>catagory</td><td>course</td><td>skills</td><td>select</td></tr>";
					$pdets=getregisteredcandidate($catg,$dom,$cor,$skill);
					$i=0;
					$jobids=array();
					foreach ($pdets as $pdet)
					{
						$str="<br><table class=tabl bgcolor=cyan><tr><td>uid</td><td>$pdet[0]</td></tr>";
						$str=$str."<tr><td>mob_no</td><td>$pdet[1]</td></tr>";
						$str=$str."<tr><td>Mail</td><td>$pdet[2]</td></tr>";
						$str=$str."<tr><td>collage name</td><td>$pdet[3]</td></tr>";
						$str=$str."<tr><td>10th marks</td><td>$pdet[4]</td></tr>";
						$str=$str."<tr><td>12th marks</td><td>$pdet[5]</td></tr>";
						$str=$str."<tr><td>CGPA</td><td>$pdet[6]</td></tr>";
						$str=$str."<tr><td>year of passing</td><td>$pdet[7]</td></tr>";
						$str=$str."<tr><td>domain</td><td>$pdet[8]</td></tr>";
						$str=$str."<tr><td>catagory</td><td>$pdet[9]</td></tr>";
						$str=$str."<tr><td>course</td><td>$pdet[10]</td></tr>";
						$str=$str."<tr><td>skills</td><td>$pdet[11]</td></tr>";
						$str=$str."<tr><td>select</td><td><input type=checkbox name=ch$pdet[0]></td></tr></table><br>";


						echo $str;
						$jobids[$pdet[0]]=array($pdet[1],$pdet[2]);
					}
					$_SESSION['jobids']=$jobids;
		}


		?>


</table><br><br>
<!--</form>
<form name=all method=get action="" onload="this.form.submit()">!-->
	<input type="submit" name="display" class="display_button" value="DISPLAY ALL THE REGISTERED CANDIDATES"><br>
<table border=1 bgcolor="cyan" >
	<?php
	$msg="";
	$type='user';
	$pdets2=array();
	if(isset($_REQUEST['display']))
	{
		//echo "<tr bgcolor=pink><td>uid</td><td>mob_no</td><td>Mail</td><td>collage name</td><td>10th marks</td><td>12th marks</td><td>CGPA</td><td>year of passing</td><td>domain</td><td>catagory</td><td>course</td><td>skills</td><td>select</td></tr>";
					$pdets2=getcandidateDetailstodisplay($type);
					$i=0;
					$jobids=array();
					foreach ($pdets2 as $pdet)
					{
						$str="<br><table class=tabl bgcolor=cyan><tr><td>uid</td><td>$pdet[0]</td></tr>";
						$str=$str."<tr><td>mob_no</td><td>$pdet[1]</td></tr>";
						$str=$str."<tr><td>Mail</td><td>$pdet[2]</td></tr>";
						$str=$str."<tr><td>collage name</td><td>$pdet[3]</td></tr>";
						$str=$str."<tr><td>10th marks</td><td>$pdet[4]</td></tr>";
						$str=$str."<tr><td>12th marks</td><td>$pdet[5]</td></tr>";
						$str=$str."<tr><td>CGPA</td><td>$pdet[6]</td></tr>";
						$str=$str."<tr><td>year of passing</td><td>$pdet[7]</td></tr>";
						$str=$str."<tr><td>domain</td><td>$pdet[8]</td></tr>";
						$str=$str."<tr><td>catagory</td><td>$pdet[9]</td></tr>";
						$str=$str."<tr><td>course</td><td>$pdet[10]</td></tr>";
						$str=$str."<tr><td>skills</td><td>$pdet[11]</td></tr>";
						$str=$str."<tr><td>select</td><td><input type=checkbox name=ch$pdet[0]></td></tr></table><br>";


						echo $str;
						$jobids[$pdet[0]]=array($pdet[1],$pdet[2]);
					}
					$_SESSION['jobids']=$jobids;

	}




	?>
</table><br>

	<!--</form>

<form name=all method=get action="" onload="this.form.submit()">!-->
	<input type="submit" name="dispappstud" class="display_button" value="DISPLAY ALL THE CANDIDATES WHO APPLIED FOR JOB "><br>
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

		//echo "<tr bgcolor=pink><td>uid</td><td>mob_no</td><td>Mail</td><td>collage name</td><td>10th marks</td><td>12th marks</td><td>CGPA</td><td>year of passing</td><td>domain</td><td>catagory</td><td>course</td><td>skills</td><td>select</td></tr>";

		foreach($uid_by_status as $uidd)
		{
		
					$pdets2=getappliedcandidateDetailstodisplay($uidd);
					$i=0;
					$jobids=array();
					foreach ($pdets2 as $pdet)
					{
						$str="<br><table class=tabl bgcolor=cyan><tr><td>uid</td><td>$pdet[0]</td></tr>";
						$str=$str."<tr><td>mob_no</td><td>$pdet[1]</td></tr>";
						$str=$str."<tr><td>Mail</td><td>$pdet[2]</td></tr>";
						$str=$str."<tr><td>collage name</td><td>$pdet[3]</td></tr>";
						$str=$str."<tr><td>10th marks</td><td>$pdet[4]</td></tr>";
						$str=$str."<tr><td>12th marks</td><td>$pdet[5]</td></tr>";
						$str=$str."<tr><td>CGPA</td><td>$pdet[6]</td></tr>";
						$str=$str."<tr><td>year of passing</td><td>$pdet[7]</td></tr>";
						$str=$str."<tr><td>domain</td><td>$pdet[8]</td></tr>";
						$str=$str."<tr><td>catagory</td><td>$pdet[9]</td></tr>";
						$str=$str."<tr><td>course</td><td>$pdet[10]</td></tr>";
						$str=$str."<tr><td>skills</td><td>$pdet[11]</td></tr>";
						$str=$str."<tr><td>select</td><td><input type=checkbox name=ch$pdet[0]></td></tr></table><br>";


						echo $str;
						$jobids[$pdet[0]]=array($pdet[1],$pdet[2]);
					}

				}
				$_SESSION['jobids']=$jobids;

	}




	?>
</table><br>
<input type="text" name="jid" placeholder="enter the id of the job to select student for particular job" style="width: 25%; margin-left: 35%; border-radius: 10px;">
<input type="submit" name="select" class="display_button" value="RECRUIT THE SELECTED CANDIDATES"><br>
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


</body>
</html>