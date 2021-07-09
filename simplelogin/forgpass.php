<?php
	//require'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Password Reset</title>
<link rel="stylesheet" href="css/styling.css">
</head>
<body style="background-color:#81ecec">

	<div id="main-wrapper">
	<center><h2>FORGOT PASSWORD? :( </h2></center>
	<form class="myform" action="forgpass.php" method="post">
	<label><b>Select Security Question:</b></label><br>
	<select name="question" class="inputvalue" placeholder="select security question">
  		<option value="volvo">Name of the first school you studied?</option>
  		<option value="saab">Your nick name?</option>
  		<option value="opel">Favorite movie?</option>
  		<option value="audi">Best friends name?</option>
	</select>
	<label><b>Your Answer?:</b></label><br>
	<input name="answer" type="text" class="inputvalue" placeholder="your answer" required/><br>
	<input name="submit_btn" type="submit" id="signup_btn" value="Submit the answer then click Change Password"/><br>
	<a href="changepass.php"><input type="button" id="signup_btn" value="Change Password"/></a><br>
	<a href="index.php"><input type="button" id="back_btn" value="Back"/></a><br>
   </form>