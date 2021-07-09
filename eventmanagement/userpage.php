<?php 
require('dbasefunct.php');
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
	<title>event registration</title>
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


.column1{
    width:950px;
    height:350px;
    background-repeat: no-repeat;
    background-image: url('image/sports4.jpg');
    background-size: all;
    background-color:rgba(0,0,0,0.5);
    margin:0 auto;
    margin-top:50px;
    padding-top:30px;
    padding-left: 60px;
    padding-right: 60px;
    padding-bottom: 30px;
    border-radius:15px;
    border:2px solid black;
    color:white;
    font-weight:bolder;
    
  
}
.column2{
    width:950px;
    height:350px;
    background-repeat: no-repeat;
    background-image: url('image/front1.jpg');
    background-size: cover;
    background-color:rgba(0,0,0,0.5);
    margin:0 auto;
    margin-top:100px;
    padding-top:30px;
    padding-left: 60px;
    padding-right: 60px;
    padding-bottom: 30px;
    border-radius:15px;
    border:2px solid black;
    color:white;
    font-weight:bolder;
    
  
}
.column3{
    width:950px;
    height:350px;
    background-repeat: no-repeat;
    background-image: url('image/tech2.jpg');
    background-size: cover;
    background-color:rgba(0,0,0,0.5);
    margin:0 auto;
    margin-top:100px;
    padding-top:30px;
    padding-left: 60px;
    padding-right: 60px;
    padding-bottom: 30px;
    border-radius:15px;
    border:2px solid black;
    color:white;
    font-weight:bolder;
  
}
.column4{
    width:950px;
    height:350px;
    background-repeat: no-repeat;
    background-image: url('image/job22.jpg');
    background-size: cover;
    background-color:rgba(0,0,0,0.5);
    margin:0 auto;
    margin-top:100px;
    padding-top:30px;
    padding-left: 60px;
    padding-right: 60px;
    padding-bottom: 30px;
    border-radius:15px;
    border:2px solid black;
    color:white;
    font-weight:bolder;
    
  
}
table{
  font-size: 20px;
}
table th{
  background-color: green;
}
table tr{
  padding: 20px;
}
.but
{
  width:100px;
  background-color:red;
  color:white;
  text-align:center;
  font-size:18px;
  font-weight:bold;
  border-radius: 10px;
}
#display_button{
	width:50%;
	margin-top:10px;

	background-color:#27ae60;
	padding:5px;
	color:white;
	
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
  		<a href="userpage.php">Home</a>
  		<a href=disp_prof.php>Display Profile</a>
  		<a href="edit_prof.php">Edit Profile</a>
      <a href="history.php">History</a>
  		<a href="logout.php">logout</a>
		</div>
    <div style="width: 100%;height: 30px;">
      <center><h1 style="color: white;">COLLAGE EVENT MANAGEMENT</h1></center>
    </div>

<?php

if(isset($_SESSION['uid']))
{
  $url=$_SERVER['REQUEST_URI'];
  $url="http://localhost".$url."";
  $uid=$_SESSION['uid'];
  $events=geteventDetails();
  $eventids=array();
  $i=0;
  foreach($events as $event)
  {
    if($event[1]=='Sports' || $event[1]=='sports')
    {
    $str1="<div class=column1 ><font color=yellow><table>";
    $str1=$str1."<tr><td>EVENT CATAGORY:</td><td>$event[1]</td></tr>";
    $str1=$str1."<tr><td>EVENT NAME:</td><td>$event[2]</td></tr>";
    $str1=$str1."<tr><td>EVENT DESCRIPTION:</td><td>$event[3]</td></tr>";
    $str1=$str1."<tr><td>TO BE HELD ON: </td><td>$event[4]</td></tr>";
    $str1=$str1."<tr><td>VENUE:</td><td>$event[5]</td></tr>";
    $str1=$str1."<tr><td>RULES AND REGULATIONS:</td><td>$event[6]</td></tr>";
    $str1=$str1."<tr><td colspan=2></td><td><a href=event_register.php?event_name=$event[2]><button class=but>register</a></button></td></tr></table></font></div>";
    echo $str1;
    $eventids[$event[0]]=$event[3];
    }

    if($event[1]=='Cultural' || $event[1]=='cultural')
    {
    $str1="<div class=column2 ><font color=white><table>";
    $str1=$str1."<tr><td>EVENT CATAGORY:</td><td>$event[1]</td></tr>";
    $str1=$str1."<tr><td>EVENT NAME:</td><td>$event[2]</td></tr>";
    $str1=$str1."<tr><td>EVENT DESCRIPTION:</td><td>$event[3]</td></tr>";
    $str1=$str1."<tr><td>TO BE HELD ON: </td><td>$event[4]</td></tr>";
    $str1=$str1."<tr><td>VENUE:</td><td>$event[5]</td></tr>";
    $str1=$str1."<tr><td>RULES AND REGULATIONS:</td><td>$event[6]</td></tr>";
    $str1=$str1."<tr><td colspan=2></td><td><a href=event_register.php?event_name=$event[2]><button class=but>register</a></button></td></tr></table></font></div>";
    echo $str1;
    $eventids[$event[0]]=$event[3];
    }

    if($event[1]=='Technical' || $event[1]=='technical')
    {
    $str1="<div class=column3 ><table>";
    $str1=$str1."<tr><td>EVENT CATAGORY:</td><td>$event[1]</td></tr>";
    $str1=$str1."<tr><td>EVENT NAME:</td><td>$event[2]</td></tr>";
    $str1=$str1."<tr><td>EVENT DESCRIPTION:</td><td>$event[3]</td></tr>";
    $str1=$str1."<tr><td>TO BE HELD ON: </td><td>$event[4]</td></tr>";
    $str1=$str1."<tr><td>VENUE:</td><td>$event[5]</td></tr>";
    $str1=$str1."<tr><td>RULES AND REGULATIONS:</td><td>$event[6]</td></tr>";
    $str1=$str1."<tr><td colspan=2></td><td><a href=event_register.php?event_name=$event[2]><button class=but> register</a></button></td></tr></table></div>";
    echo $str1;
    $eventids[$event[0]]=$event[3];
    }

    if($event[1]=='General' || $event[1]=='general')
    {
    $str1="<div class=column4 ><font color=black><table>";
    $str1=$str1."<tr><td>EVENT CATAGORY:</td><td>$event[1]</td></tr>";
    $str1=$str1."<tr><td>EVENT NAME:</td><td>$event[2]</td></tr>";
    $str1=$str1."<tr><td>EVENT DESCRIPTION:</td><td>$event[3]</td></tr>";
    $str1=$str1."<tr><td>TO BE HELD ON: </td><td>$event[4]</td></tr>";
    $str1=$str1."<tr><td>VENUE:</td><td>$event[5]</td></tr>";
    $str1=$str1."<tr><td>RULES AND REGULATIONS:</td><td>$event[6]</td></tr>";
    $str1=$str1."<tr><td colspan=2></td><td><a href=event_register.php?event_name=$event[2]><button class=but >register</a><button></td></tr></table></font></div>";
    echo $str1;
    $eventids[$event[0]]=$event[3];
    }

  }
    $_SESSION['eid']=$eventids;
}
?>
    
 	</body>
</html>