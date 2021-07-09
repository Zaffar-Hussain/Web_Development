<!DOCTYPE html>
<html>
<head>
	<title>Search For Jobs</title>
	<link rel="stylesheet" href="css/style.css">


	<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 2px solid white ;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>	
	<style>
#example1 {                     /* header*/
 
  padding: 45px;
  background-color: #00264d;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>
<body >
	<div id="example1">
</div>
	<div style = "width:100%; "> 
		<div style = "width:100%;  position:absolute; top:40px; right:-800px">
			<style>
a:link, a:visited {
  background-color: #00264d;
  color: white;
  padding: 14px 23px;
  text-align: center;     /*profile*/
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: #336699;
}
</style>
			<tr>
			 <td><a href="disp_user.php" >Display profile</a></td>
             <td><a href="update.php" style="margin-left: : 100px;">Edit Profile</a></td>
             <td><a href="user-register.php">Register</a></td>
             <td><a href="logout.php" >Logout</a></td>

	<style>
	.btn {
  color: white;          /*all job*/
  color: white;
  background:#00264d;
  font-weight: bold;
  
}

.btn:hover {
  color: #FFF;
  background: #336699;
}
.button {               /*clickhere for aplied job*/
  color: white;
  background:#00264d;
  font-weight: bold;
  
}

.button:hover {  /*clickhere for aplied job*/
  color: #FFF;
  background:#ff9900;
}
</style>
             
         </tr>
     </div>
</div>
         <div style = " position:absolute; top:100px;width:80%; " >
         	<style>
 select {
  width: 18%;
  padding: 12px 14px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

</style>
	<form name=show method=get action="">
		
		<tr><tr><tr></tr></tr></tr>
		<div style="text-align:right; "><br>
		</select>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		
 
		<style>
.btnExample {
  color: white;
  background: #3399ff;  /*search button*/
  font-weight: bold;
 
}

.btnExample:hover {
  
  background:#0066ff;
}
	#searchbutton {
    width: 7em;  height: 3em;
}
</style>
</div>
</form>
</div>
</body>
</html>
<?php 

session_start();
?>