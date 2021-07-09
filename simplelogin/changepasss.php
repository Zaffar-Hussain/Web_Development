<?php
	//require'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>registration Page</title>
<link rel="stylesheet" href="css/styling.css">
</head>
<body style="background-color:#81ecec">

	<div id="main-wrapper">
	<center><h2>SIGN UP FORM</h2></center>
	<center>
	<img src="image/avatar.png" class="avatar"/>
	</center>
	
	
	<form class="myform" action="changepass.php" method="post">
	<label><b>Admin:</b></label><br>
	<input name="admin" type="text" class="inputvalue" placeholder="type admin name" required/><br>
	<label><b>Password:</b></label><br>
	<input name="password" type="password" class="inputvalue" placeholder="your password" required/><br>
	<label><b>Confirm Password:</b></label><br>
	<input name="cpassword" type="password" class="inputvalue" placeholder="cofirm password" required/><br>
	<input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"/><br>
	<a href="index.php"><input type="button" id="back_btn" value="Back"/></a><br>
   </form>