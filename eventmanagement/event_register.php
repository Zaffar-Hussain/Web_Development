<?php
  session_start(); 
  require('dbasefunct.php');
  $t_id=get_team_id();
  $msg='';
  $msg2='';
  $msg3='';
  if(isset($_REQUEST['event_name']))
  {
    $event_id=$_REQUEST['event_name'];
    $_SESSION['event_name']=$event_id;
  }
  if(isset($_REQUEST['register']))
  { 
    
    $t_id=get_team_id();
    $event_name=$_SESSION['event_name'];
    $usn=$_REQUEST['usn'];
    $t_name=$_REQUEST['t_name'];
    $f_mobno=$_REQUEST['f_mobno'];
    $s_mobno=$_REQUEST['s_mobno'];
    $date=date('Y-m-d');
    
    if(register_event($t_id,$event_name,$usn,$t_name,$f_mobno,$s_mobno,$date))
      $msg="<font color=yellow>Registered Successfully</font>";
    else
      $msg="<font color=red>Unsuccessfull Registration</font>";
    
  }


?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Events</title>
	<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0 auto;
  background-image: url('image/job1.jpg');
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
    width:550px;
    height:450px;
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

.column input[type="text"]
  {
    width:200px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:white;
  }

.column input[type="Date"]
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

.column input[type="submit"]
  {
    width:100px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:skyblue;
    font-weight:bolder;
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
    <h1>Enter the registration details</h1>
    <table>
      <tr>
        <td>Team Id:</td>
        <td><?php echo $t_id;  ?></td>
      </tr>
      <tr></tr><tr></tr><tr></tr>
      <tr>
        <td>Team Name:</td>
        <td><input type="text" name="t_name" value="" required></td>
      </tr>
      <tr></tr><tr></tr><tr></tr>
      <tr>
        <td>USN:</td>
        <td><input type="text" name="usn" value="" placeholder="enter the USN " required></td>
      </tr>
      <tr></tr><tr></tr><tr></tr>
      <tr>
        <td>Mobile Number(1):</td>
        <td><input type="text" name="f_mobno" value="" required></td>
      </tr>
      <tr></tr><tr></tr><tr></tr>
      <tr>
        <td>Mobile Number(2):</td>
        <td><input type="text" name="s_mobno" value="" required></td>
      </tr>
      <tr></tr><tr></tr><tr></tr>    
    <tr><td></td>
    <td>
    <input type="submit" name="register" value="Register"></td>
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