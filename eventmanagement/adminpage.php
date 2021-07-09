<?php  
  session_start();
  require('dbasefunct.php');
  if(isset($_REQUEST['delete']))
  {
    $delete=$_REQUEST['delete'];
    $str=deleteEvent($delete);
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
  <title>Post events</title>
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
      <a href="adminpage.php">Home</a>
      <a href=add_event.php>Add Event</a>
      <a href="logout.php">logout</a>
    </div>
    

<div class="column">
<table border=1 >
<?php

if(isset($_SESSION['uid']))
{
  echo "<tr bgcolor=green><th >event_id</th><th>catagory</th><th>event_name</th><th>event_det</th><th>event_date</th><th>event_venue</th><th>event_rule</th><th>edit event</th><th>remove event</th></tr>";
  $url=$_SERVER['REQUEST_URI'];
  $url="http://localhost".$url."";
  $uid=$_SESSION['uid'];
  $events=geteventDetails();
  $eventids=array();
  $i=0;
  foreach($events as $event)
  {
    $str1="<tr bgcolor=darkpink ><td>$event[0]</td>";
    $str1=$str1."<td>$event[1]</td>";
    $str1=$str1."<td>$event[2]</td>";
    $str1=$str1."<td>$event[3]</td>";
    $str1=$str1."<td>$event[4]</td>";
    $str1=$str1."<td>$event[5]</td>";
    $str1=$str1."<td>$event[6]</td>";
    $str1=$str1."<td><a href=edit_event.php?event_id=$event[0]>edit</a></td>";
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