<?php 
	require('dbasefunct.php');
	$msg='';
	$msg2='';
	$msg3='';
	session_start();
	$profdet=array("","","","","","","","","","","");
	$msg1="";
	if(isset($_SESSION['uid']))
	{
		$id=$_SESSION['uid'];
		{
			$profdet=getProfileDetails($id);
		}
	}

	
	if(isset($_REQUEST['edit']))
	{
		$uid=$_REQUEST['uid'];
		$name=$_REQUEST['name'];
		$pwd=$_REQUEST['pwd'];
		$cpwd=$_REQUEST['cpwd'];
		$type="user";
		$question=$_REQUEST['question'];
		$answer=$_REQUEST['answer'];
		$mob_no=$_REQUEST['mob_no'];
		$mail=$_REQUEST['mail'];
		$sem=$_REQUEST['sem'];
		$branch=$_REQUEST['branch'];
		$year=$_REQUEST['year'];
		$date=date('Y-m-d');

		if($pwd==$cpwd)
		{
			if(updateprofile($uid,$name,$pwd,$question,$answer,$mob_no,$mail,$sem,$branch,$year))
				$msg="<font color=green>Editted Successfully</font>";
			else
				$msg="<font color=red>Editted Unsuccessfully</font>";
		}
		else
			$msg2="<font color=red>Confirm Password does Not Match the Password</font>";
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
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
    height:590px;
    background-image: url('image/ed1.jpg');
  	background-size: cover;
  	background-repeat: no-repeat;
    background-color:rgba(0,0,0,0.5);
    margin:0 auto;
    margin-top:50px;
    padding-top:30px;
    padding-left: 60px;
    padding-right: 60px;
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
    .column select
  {
    width:200px;
    height:25px;
    border:0;
    border-radius:5px;
    background-color:#a5b1c2;

  }
   .column input[type="password"]
  {
    width:200px;
    height:30px;
    border:0;
    border-radius:5px;
    text-align: center;
    background-color:#a5b1c2;
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
	<form name="form2" action="" method="post">
		<h1>Edit Your Profile</h1>
		<table>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name" value="<?php echo $profdet[1]; ?>" required></td>
			</tr>
			<tr></tr><tr></tr><tr></tr>
			<tr>
				<td>User ID:</td>
				<td><input type="text" name="uid" value="<?php if(isset($_SESSION['uid'])) echo $_SESSION['uid'] ?>" required></td>
			</tr>
			<tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="pwd" value='<?php echo $profdet[2]; ?>' ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Confirm Password:</td>
				<td><input type="password" name="cpwd" value="<?php echo $profdet[2]; ?>" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Security Question:</td>
				<td><input type="text" name="question" value='<?php echo $profdet[4]; ?>' ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Answer For The Security Question:</td>
				<td><input type="text" name="answer" value='<?php echo $profdet[5]; ?>' ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Mobile Number:</td>
				<td><input type="text" name="mob_no" value='<?php echo $profdet[6]; ?>' ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Mail ID:</td>
				<td><input type="text" name="mail" value='<?php echo $profdet[7]; ?>' ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Sem:</td>
				<td><input type="text" name="sem" value='<?php echo $profdet[8]; ?>' ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Branch:</td>
				<td><input type="text" name="branch" value='<?php echo $profdet[9]; ?>' ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Year:</td>
				<td><input type="text" name="year" value='<?php echo $profdet[10]; ?>' ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
		<td></td><td><input type="submit" name="edit" value="Edit"></td></tr>
		<tr><td></td><td><a href="userpage.php"><input type="button" name="back" value="Back"></a></td></tr>
		
		
		<tr><td></td>
			<td><?php echo $msg; ?>
				<?php echo $msg2; ?>
			</td>
		</tr>
		</table>
	</form>
	</center>
</div>
</body>
</html>