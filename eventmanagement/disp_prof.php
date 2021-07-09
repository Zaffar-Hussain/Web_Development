<?php 
	require('dbasefunct.php');
	session_start();
	$profdet=array("","","","","","","","","","","");
	$msg1="";
	if(isset($_SESSION['uid']))
	{
		$id=$_SESSION['uid'];
		$profdet=getProfileDetails($id);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Display Profile</title>
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
    height:520px;
    background-image: url('image/abt5.jpg');
  	background-size: cover;
  	background-repeat: no-repeat;
    background-color:rgba(0,0,0,0.5);
    margin:0 auto;
    margin-top:100px;
    padding-top:30px;
    padding-left: 60px;
    border-radius:15px;
    color:#67e6dc;
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
    height:25px;
    border:0;
    border-radius:5px;
    text-align: center;
    background-color:#a5b1c2;

  }

    .column input[type="button"]
  {
    width:100px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:skyblue;
    font-weight:bolder;  
}

</style>

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
		<h1> Display Profile</h1>
		<table>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name" value="<?php echo $profdet[1]; ?>" ></td>
				<!--<td><input type="submit" name="show" value="Submit ID"></td>!-->
			</tr>
			<tr>
				<td>User ID:</td>
				<td><input type="text" name="uid" value="<?php if(isset($_SESSION['uid'])) echo $_SESSION['uid'] ?>" ></td>
				<!--<td><input type="submit" name="show" value="Submit ID"></td>!-->
			</tr>
			<tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Security Question:</td>
				<td><input type="text" name="question" value='<?php echo $profdet[4]; ?>' readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Answer For The Security Question:</td>
				<td><input type="text" name="answer" value='<?php echo $profdet[5]; ?>' readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Mobile Number:</td>
				<td><input type="text" name="mob_no" value='<?php echo $profdet[6]; ?>' readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Mail ID:</td>
				<td><input type="text" name="mail" value='<?php echo $profdet[7]; ?>' readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Sem:</td>
				<td><input type="text" name="sem" value='<?php echo $profdet[8]; ?>' readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Branch:</td>
				<td><input type="text" name="branch" value='<?php echo $profdet[9]; ?>' readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Year:</td>
				<td><input type="text" name="year" value='<?php echo $profdet[10]; ?>' readonly ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr><td></td>
		<td><a href="userpage.php"><input type="button" name="back" value="Back"></a></td>
		</tr>
		</table>
	</form>
	</center>
</div>
</body>
</html>