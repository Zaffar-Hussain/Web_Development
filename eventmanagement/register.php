<?php 
	require('dbasefunct.php');
	$msg='';
	$msg2='';
	$msg3='';
	if(isset($_REQUEST['register']))
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
		$user_registered="yes";
		
		if($pwd==$cpwd)
		{
			if(register($uid,$name,$pwd,$type,$question,$answer,$mob_no,$mail,$sem,$branch,$year,$date,$user_registered))
				$msg="<font color=green>Registered Successfully</font>";
			else
				$msg="<font color=red>unsuccessfull Registration</font>";
		}
		else
			$msg2="<font color=red>Confirm Password does Not Match the Password</font>";
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0 auto;
  background-image: url('image/reg1.jpg');
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
 	width:590px;
    height:580px;
    background-color:rgba(0,0,0,0.5);
    margin:0 auto;
    margin-top:50px;
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
    background-color:#a5b1c2;
  }

</style>
</head>
<body>

	<div class="topnav">
  		<a href="login.php">Home</a>
  		<a href="register.php">Register</a>
  		<a href="editpwd.php">Edit Password</a>
  		<a href="aboutus.php">About Us</a>
	</div>

	<div class="column">
	<center>
		
	<form name="form2" action="" method="get">
		<h1>Welcome to Registration Page</h1>
		<table>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name" value="" required></td>
			</tr>
			<tr></tr><tr></tr><tr></tr>
			<tr>
				<td>User Id:</td>
				<td><input type="text" name="uid" value="" required></td>
			</tr>
			<tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="pwd" value="" required></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Confirm Password:</td>
				<td><input type="password" name="cpwd" value="" required></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Select Security Question:</td>
				<td><select name="question" style="width:200px;" required>
				<option value=""></option>
  				<option value="Name of the first school you studied?">Name of the first school you studied?</option>
  				<option value="Your nick name?">Your nick name?</option>
  				<option value="Favorite movie?">Favorite movie?</option>
  				<option value="Best friends name?">Best friends name?</option>
			</select></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Answer For The Security Question:</td>
				<td><input type="text" name="answer" value="" required></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Mobile Number:</td>
				<td><input type="text" name="mob_no" value="" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Mail ID:</td>
				<td><input type="text" name="mail" value="" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Sem:</td>
				<td><input type="text" name="sem" value="" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Branch:</td>
				<td><input type="text" name="branch" value="" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			<tr>
				<td>Year:</td>
				<td><input type="text" name="year" value="" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			
		<tr><td></td>
		<td><a href="login.php"><input type="button" name="back" value="Back"></a>&nbsp&nbsp&nbsp&nbsp
		<input type="submit" name="register" value="Register"></td>
		</tr>
		<tr><td></td>
			<td><span><?php echo $msg; ?>
				<?php echo $msg2; ?>
			</span></td>
		</tr>
		</table>
	</form>
	</center>
</div>
</body>
</html>