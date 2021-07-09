<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="css/style.css">


	<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 2px solid white ;
  text-align: left;
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
<body style="background-image: url(image/10.PNg);background-repeat:no-repeat ;background-size:cover">
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
				
				<td><a href="practice.php" style="margin-left:  150px;">services&pricing</a></td>
			 <td><a href="disp_user.php" >Display profile</a></td>
             <td><a href="update.php" >Edit Profile</a></td>
             
             <td><a href="login.php" >Logout</a></td>

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
/*require('funct.php');
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
	$pdets2=array('','','','','','','','','');$i=0;
	if(isset($_REQUEST['display']))
	{
		$pdets2=getjobDetailstodisplay();
		echo "<div style= background-color:lightblue;width:100%;><table><tr style= background-color:orange;><th><strong>JOB TITLE</strong></th><th><strong>job description</strong></th><th><strong>Company name</strong></th><th><strong>company details</strong></th><th><strong>location</strong></th><th><strong>no_of_vacancy</strong></th><th><strong>exp_needed</strong></th><th><strong>package</strong></th><th><strong>domain</strong></th></tr>";
		//if(sizeof($pdets2)==0)
			//$kalii="<font color=red>No available jobs</font>";
		//else
		//{
		
					
					foreach ($pdets2 as $pdet)
					{
						
						$str2="<tr><td>$pdet[1]</td>";
						$str2=$str2."<td>$pdet[2]</td>";
						$str2=$str2."<td>$pdet[3]</td>";
						$str2=$str2."<td>$pdet[4]</td>";
						$str2=$str2."<td>$pdet[5]</td>";
						$str2=$str2."<td>$pdet[6]</td>";
						$str2=$str2."<td>$pdet[7]</td>";
						$str2=$str2."<td>$pdet[8]</td>";
						$str2=$str2."<td>$pdet[8]</td></tr>";
						
						echo $str2;
						//$jobids[$pdet[0]]=$pdet[0];
					}
					echo "</table></div>";
					//$_SESSION['jobids']=$jobids;
				//}
	}*/
?>
