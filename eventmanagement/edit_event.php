<?php 
  require('dbfor_editevent.php');
  $msg='';
  $msg2='';
  $msg3='';
  session_start();

  $eventdet=array("","","","","","","");
  $msg1="";
  if(isset($_REQUEST['event_id']))
  {
    $event_id=$_REQUEST['event_id'];
    $eventdet=getEventDetails($event_id);
  }

  
  if(isset($_REQUEST['edit']))
  {
    $event_id=$eventdet[0];
    $catagory=$_REQUEST['catagory'];
    $event_name=$_REQUEST['event_name'];
    $event_det=$_REQUEST['event_det'];
    $event_date=$_REQUEST['event_date'];
    $event_venue=$_REQUEST['event_venue'];
    $event_rules=$_REQUEST['event_rules'];

    if(updateEvent($event_id,$catagory,$event_name,$event_det,$event_date,$event_venue,$event_rules))
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
  		<a href="adminpage.php">Home</a>
  		<a href=add_event.php>Add Event</a>
  		<a href="logout.php">logout</a>
		</div>
    <div class="column">
  <center>
    
  <form name="form2" action="" method="get">
    <h1>Enter the event details</h1>
    <table>
      <tr>
        <td>Event Id:</td><td><?php echo $eventdet[0]; ?></td>
      </tr>
      <tr>
        <td>Select Catagory:</td>
        <td><select name="catagory" class="sel"  required>
        <option value=""><?php echo $eventdet[1]; ?></option>
          <option value="sports">Sports</option>
          <option value="cultural">Cultural</option>
          <option value="technical">Technical</option>
          <option value="general">General</option>
      </select></td>
      </tr><tr></tr><tr></tr><tr></tr>
      <tr>
        <td>Name of the event:</td>
        <td><input type="text" name="event_name" value="<?php echo $eventdet[2]; ?>" required></td>
      </tr>
      <tr></tr><tr></tr><tr></tr>
      <tr>
        <td>Details:</td>
        <td><input type="text" name="event_det" value="<?php echo $eventdet[3]; ?>" required></td>
      </tr>
      <tr></tr><tr></tr><tr></tr>
      <tr>
        <td>Date:</td>
        <td><input type="text" name="event_date" value="<?php echo $eventdet[4]; ?>" placeholder="yyyy/mm/dd" required></td>
      </tr><tr></tr><tr></tr><tr></tr>
      <tr>
        <td>Venue:</td>
        <td><input type="text" name="event_venue" value="<?php echo $eventdet[5]; ?>" required></td>
      </tr><tr></tr><tr></tr><tr></tr>
      <tr>
        <td>Rules:</td>
        <td><input type="text" name="event_rules" value="<?php echo $eventdet[6]; ?>" required></td>
      </tr><tr></tr><tr></tr><tr></tr>
      
      
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