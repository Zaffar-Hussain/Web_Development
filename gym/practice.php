<!DOCTYPE html>
<html>
<head>
	
	<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;


}

td, th {
  border: 1px solid black ;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>	
	<style>
#example1 {                     /* header*/
 
  padding: 45px;
  background-color: #00264d;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>
<body style="background-image: url(image/2.jpg);background-repeat:no-repeat ;background-size:cover ">
	<div id="example1">
</div>
	<div style = "width:100%; "> 
		<div style = "width:100%;  position:absolute; top:40px; right:-650px">
			<style>
a:link, a:visited {
  background-color: #00264d;
  color: white;
  padding: 14px 23px;
  text-align: center;     /*profile*/
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: #336699;
}
</style>
			<tr>
				
				<td><a href="practice.php" >services&pricing</a></td>
			 <td><a href="disp_user.php" >Display profile</a></td>
             <td><a href="update.php" >Edit Profile</a></td>
             
             <td><a href="home.php" style="margin-left: : 150px;" >Logout</a></td>

	<style>
	
.button {               /*clickhere for aplied job*/
  color: white;
  background:#00264d;
  font-weight: bold;
  
}

.button:hover {  /*clickhere for aplied job*/
  color: #FFF;
  background:#ff9900;
}
</style>
             
         </tr>
     </div>
</div>
         <div style = " position:absolute; top:100px;width:80%; " >
         	<style>
 select {
  width: 18%;
  padding: 12px 14px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

</style>
	
		
 
		<style>
.btnExample {
  color: white;
  background: #3399ff;  /*search button*/
  font-weight: bold;
 
}

.btnExample:hover {
  
  background:#0066ff;
}
	#searchbutton {
    width: 7em;  height: 3em;
}
</style>
</div>
</form>
</div>
</body>
</html>
<?php 
require('funct.php');
session_start();
//$uid=$_SESSION['uid'];
$appl_msg="";
$kali="";
$kalii="";
$jobids=array();$k=0;
?>


<?php
	$msg="";
	$disp="yes";
	$pdets2=array('','','','');$i=0;
	//if(isset($_REQUEST['display']))
	//{
		$pdets2=getspDetailstodisplay();
		//echo "<div style= background-color:lightblue;width:100%;><table><tr style= background-color:orange;><th><strong>Name</strong></th><th><strong>Mail Id</strong></th><th><strong>Mobile No</strong></th><th><strong>Gender</strong></th><th><strong>Membership Time</strong></th><th><strong>Join Date</strong></th><th><strong>Gym Time</strong></th><th><strong>Occupation</strong></th><th><strong>Fees Mode</strong></th></tr>";
		//if(sizeof($pdets2)==0)
			//$kalii="<font color=red>No available jobs</font>";
		//else
		//{
		
					
					foreach ($pdets2 as $pdet)
					{
						$str2="<br><div ><tr><td></td><td></td></tr>";

					$str2=$str2."<table align='center'><tr><td><font color=red><strong>SERVICES </strong></font> </td><td><font color=red><strong>PRICING</strong></font></td>";

						
$str2=$str2."<tr><td><strong>1 MONTH</strong></td><td colspan=2><strong>$pdet[0]</strong></td></tr>";
$str2=$str2."<tr><td><strong>3 MONTH</strong></td><td colspan=2><strong>$pdet[1]</strong></td></tr>";
$str2=$str2."<tr><td><strong>6 MONTH</strong></td><td colspan=2><strong>$pdet[2]</strong></td></tr>";
$str2=$str2."<tr><td><strong>1 YEAR</strong></td><td colspan=2><strong>$pdet[3]</strong></td></tr>";
                       //$str2=str2."<tr><td>$pdet[0]</td>";
						//$str2=$str2."<td>$pdet[1]</td>";
						//$str2=$str2."<td>$pdet[2]</td>";
						//$str2=$str2."<td>$pdet[3]</td>";
						
						
						echo $str2;
						//$jobids[$pdet[0]]=$pdet[0];
					}
					echo "</table></div>";
					//$_SESSION['jobids']=$jobids;
				//}
	//}
?>
<!--$str2="<br><div style= background-color:lightblue;width:80%;><tr><td></td><td></td></tr>";
						$str2=$str2."<table><tr><td><font color=red><strong>JOB AVAILABLE FROM: </strong></font> </td><td><font color=red><strong>$pdet[13]</strong></font></td><td><font color=red><strong>TO: </strong></font></td><td><font color=red><strong>$pdet[14]</strong></font></td></tr>";
						$str2=$str2."<tr><td ><strong>JOB TITLE</strong></td><td colspan=3>$pdet[1]</td></tr>";
						$str2=$str2."<tr><td><strong>job description</strong></td><td colspan=3>$pdet[2]</td></tr>";
						$str2=$str2."<tr><td><strong>Company name</strong></td><td colspan=3>$pdet[3]</td></tr>";
						$str2=$str2."<tr><td><strong>company details</strong></td><td colspan=3>$pdet[4]</td></tr>";
						$str2=$str2."<tr><td><strong>location</strong></td><td colspan=3>$pdet[5]</td></tr>";
						$str2=$str2."<tr><td><strong>no_of_vacancy</strong></td><td colspan=3>$pdet[6]</td></tr>";
						$str2=$str2."<tr><td><strong>exp_needed</strong></td><td colspan=3>$pdet[7]</td></tr>";
						$str2=$str2."<tr><td><strong>package</strong></td><td colspan=3>$pdet[8]</td></tr>";
						$str2=$str2."<tr><td><strong>domain</strong></td><td colspan=3>$pdet[9]</td></tr>";
						$str2=$str2."<tr><td><strong>catagory</strong></td><td colspan=3>$pdet[10]</td></tr>";
						$str2=$str2."<tr><td><strong>course</strong></td><td colspan=3>$pdet[11]</td></tr>";
						$str2=$str2."<tr><td><strong>skills</strong></td><td colspan=3>$pdet[12]</td></tr>";
						$str2=$str2."<tr><td><strong>post_date</strong></td><td colspan=3>$pdet[13]</td></tr>";
						$str2=$str2."<tr><td><strong>end_date</strong></td><td colspan=3>$pdet[14]</td></tr>";
						$str2=$str2."<tr><td><strong>camp_inter_date</strong></td><td colspan=3>$pdet[15]</td></tr>";
						$str2=$str2."<tr><td><strong>inter_req</strong></td><td colspan=3>$pdet[16]</td></tr>";
						$str2=$str2."<tr><td  colspan=4><strong>select</strong><input type=checkbox name=ch$pdet[0]></td></tr></table></div><br>";
						echo $str2;
						$jobids[$pdet[0]]=$pdet[0];
					}

					$_SESSION['jobids']=$jobids;
				}
	}-->