<?php 
  session_start();
  require('dbasefunct.php');
  if(isset($_REQUEST['delete']))
  {
    $delete=$_REQUEST['delete'];
    $str=delete_registeredEvent($delete);
  }
  if(isset($_REQUEST['event_id']))
  {
    $event_id=$_REQUEST['event_id'];
    $_SESSION['event_id']=$event_id;
  }
  
?>
<!DOCTYPE html>
<html>
<head>
	<title>History</title>
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


.column{
    width:950px;
    height:350px;
    background-image: url('image/hst1.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-color:rgba(0,0,0,0.5);
    margin:0 auto;
    margin-top:100px;
    padding-top:30px;
    padding-left: 60px;
    padding-right: 60px;
    padding-bottom: 30px;
    border-radius:15px;
    color:white;
    font-weight:bolder;
    box-shadow:inset 4px 4px rgba(0,0,0,20);
  
}
table th{
  background-color: green;
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
    

<div class="column">
<table border=1 >
<?php

if(isset($_SESSION['uid']))
{
  echo "<tr bgcolor=green><th >Team id</th><th>Team Name</th><th>Event Name</th><th>USN(captain)</th><th>Mobile Number(1)</th><th>Mobile Number(2)</th><th>Registered On</th><th>Edit</th><th>Remove Event</th></tr>";
  $url=$_SERVER['REQUEST_URI'];
  $url="http://localhost".$url."";
  $uid=$_SESSION['uid'];
  $events=getregisteredeventDetails();
  $eventids=array();
  $i=0;
  foreach($events as $event)
  {
    $str1="<tr bgcolor=darkpink ><td>$event[0]</td>";
    $str1=$str1."<td>$event[3]</td>";
    $str1=$str1."<td>$event[1]</td>";
    $str1=$str1."<td>$event[2]</td>";
    $str1=$str1."<td>$event[4]</td>";
    $str1=$str1."<td>$event[5]</td>";
    $str1=$str1."<td>$event[6]</td>";
    $str1=$str1."<td><a href=edit_registeredevent.php?team_id=$event[0]>edit</a></td>";
    $str1=$str1."<td><a href=".$url."?delete=$event[0]>delete</a></td></tr>";
    echo $str1;
    $eventids[$event[0]]=$event[3];
  }
    $_SESSION['eid']=$eventids;
}
?>
</table>
    </div>
 	</body>
</html>