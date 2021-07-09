<?php 
	require('funct.php');
	$msg='';
	$msg2='';
	$msg3='';
	if(isset($_REQUEST['uregister']))
	{
		$name=$_REQUEST['name'];
		$mail=$_REQUEST['mail'];
		$pwd=$_REQUEST['pwd'];
		$cpwd=$_REQUEST['cpwd'];
		$type="user";
        $question=$_REQUEST['question'];
		$answer=$_REQUEST['answer'];
		$mob_no=$_REQUEST['mob_no'];
		$gender=$_REQUEST['gender'];
		$memb_time=$_REQUEST['memb_time'];
		$join_date=$_REQUEST['join_date'];
		$gym_time=$_REQUEST['gym_time'];
		$occup=$_REQUEST['occup'];
		$f_mode=$_REQUEST['f_mode'];
		
		/*if ($_REQUEST['question']=='select') {
			echo '<script type="text/javascript">  alert("please select the Security question "); </script>';
		}*/
		
			if(userregister($name,$mail,$pwd,$type,$question,$answer,$mob_no,$gender,$memb_time,$join_date,$gym_time,$occup,$f_mode))
				$msg="<font color=green>Registered Successfully</font>";
			else
				$msg="<font color=red>unsuccessfull Registration</font>";
		
		
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<style type="text/css">

    select {

        width: 172px;

        margin: 0px;

    }

    select:focus {

        min-width: 172px;

        width: auto;

    } 
   /* .bg-img {
  /* The image used */
  background-image: url("img_nature.jpg");

  min-height: 380px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
    </style>   
</head>
<body style="background-image: url(image/1.jpg);background-repeat:no-repeat ;background-size:cover " >

	<center>
		
	<form name="form2" action="" method="get">
		<h1>Welcome to Registration Page</h1>
		<table>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name" value="" required></td>
			</tr><tr></tr><tr></tr><tr></tr>

			<tr>
				<td>Mail Id:</td>
				<td><input type="text" name="mail" value="" required></td>
			</tr><tr></tr><tr></tr><tr></tr>
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
				<td><select name="question" required>
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
				<td>Gender:</td>
				<td><input type="radio" name="gender" value="Male">male
					<input type="radio" name="gender" value="Female">Female
				</td>
			</tr><tr></tr><tr></tr><tr></tr>
			
			<tr>
				<td>Membership Time:</td>
				<td><input type="text" name="memb_time" value=""></td>
			</tr><tr></tr><tr></tr><tr></tr>

			<tr>
				<td>Join Date:</td>
				<td><input type="date" name="join_date" value="" ></td>
			</tr><tr></tr><tr></tr><tr></tr>
			
			<tr>
				<td>Gym Time:</td>
				<td><input type="text" name="gym_time" value="" ></td>
			</tr><tr></tr><tr></tr><tr></tr>

			<tr>
				<td>Occupation:</td>
				<td><input type="text" name="occup" value="" ></td>
			</tr><tr></tr><tr></tr><tr></tr>

			<tr><td>Fees Mode:</td>
				<td><input type="radio" name="f_mode" value="Month">Month<br>
				</td></tr>
				<tr><td><td><input type="radio" name="f_mode" value="Half-Year">Half-Year<br></td></td></tr>
				 <tr><td><td> <input type="radio" name="f_mode" value="Year">Year<br></td></td></tr>
			</tr><tr></tr><tr></tr><tr></tr>

		<tr><td></td>
		<td><a href="all.php"><input type="button" name="back" value="Back"></a>&nbsp&nbsp&nbsp&nbsp
		<input type="submit" name="uregister" value="Register"></td>
		</tr>
		</table>
	</form>
	</center>
</body>
</html>