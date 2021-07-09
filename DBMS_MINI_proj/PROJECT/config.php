<?php
    $user="root";
	$password=" ";
	$db="dbproj";
	$con= mysqli_connect("localhost",$user,$password,$db) or die("unable to connect");
	mysqli_select_db($con,"dbproj");
	
	
?>