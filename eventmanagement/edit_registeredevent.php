<?php 
  require('dbfor_editevent.php');
  $msg='';
  $msg2='';
  $msg3='';
  session_start();

  $eventdet=array("","","","","","","");
  $msg1="";
  if(isset($_REQUEST['team_id']))
  {
    $team_id=$_REQUEST['team_id'];
    $_SESSION['team_id']=$team_id;
    $eventdet=getregisteredEventDetails($team_id);
  }

  
  if(isset($_REQUEST['edit']))
  {
    $team_id=$_SESSION['team_id'];
    $event_name=$eventdet[1];
    $usn=$_REQUEST['usn'];
    $t_name=$_REQUEST['t_name'];
    $f_mobno=$_REQUEST['f_mobno'];
    $s_mobno=$_REQUEST['s_mobno'];
    $date=date('Y-m-d');

    if(updateregisteredEvent($team_id,$event_name,$usn,$t_name,$f_mobno,$s_mobno))
        $msg="<font color=lightgreen>Editted Successfully</font>";
    else
      $msg="<font color=red>Editted Unsuccessfully</font>";
    
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit event</title>
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
    height:450px;
    background-image: url('image/ed1.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-color:rgba(0,0,0,0.5);
    margin:0 auto;
    margin-top:100px;
    padding-top:30px;
    padding-left: 60px;
    padding-right: 60px;
    border-radius:15px;
    color:white;
    font-weight:bolder;
    box-shadow:inset 4px 4px rgba(0,0,0,20);
  
}

.column input[type="submit"]
  {
    width:100px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:skyblue;
    font-weight:bolder;
  }
   .column input[type="text"]
  {
    width:200px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:white;
  }
  .column input[type="password"]
  {
    width:200px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:white;
  }
.column select
  {
    width:200px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:white;
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
  <center>
    
  <form name="form2" action="" method="get">
    <h1>Edit registered event details</h1>
    <table>
      <tr>
        <td>Event Name:</td>
        <td><?php echo $eventdet[1];  ?></td>
      </tr>
      <tr>
        <td>Team Id:</td>
        <td><?php echo $team_id;  ?></td>
      </tr>
      <tr></tr><tr></tr><tr></tr>
      <tr>
        <td>Team Name:</td>
        <td><input type="text" name="t_name" value="<?php echo $eventdet[3]; ?>" required></td>
      </tr>
      <tr></tr><tr></tr><tr></tr>
      <tr>
        <td>USN:</td>
        <td><input type="text" name="usn" value="<?php echo $eventdet[2]; ?>" placeholder="enter the USN of the captain" required></td>
      </tr>
      <tr></tr><tr></tr><tr></tr>
      <tr>
        <td>Mobile Number(1):</td>
        <td><input type="text" name="f_mobno" value="<?php echo $eventdet[4]; ?>" required></td>
      </tr>
      <tr></tr><tr></tr><tr></tr>
      <tr>
        <td>Mobile Number(2):</td>
        <td><input type="text" name="s_mobno" value="<?php echo $eventdet[5]; ?>" required></td>
      </tr>
      <tr></tr><tr></tr><tr></tr>    
    <tr><td></td>
    <td>
    <input type="submit" name="edit" value="Edit"></td>
    </tr>

    <tr><td></td>
    <td>
    <?php echo $msg; ?></td>
    </tr>
    
    </table>
  </form>
  </center>
</div>
 	</body>
</html>