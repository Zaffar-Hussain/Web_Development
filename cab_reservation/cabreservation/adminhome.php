<?php
  require('dbfun.php');
  session_start();
  $msg="";
  if(!isset($_SESSION['id']))
    header('location:error.php');
  if(isset($_REQUEST['addcab']))
  	header('location:addcab.php');
  if(isset($_REQUEST['addroute']))
  	header('location:addroute.php');
  if(isset($_REQUEST['updatecab']))
  	header('location:updatecab.php');
  if(isset($_REQUEST['updateroute']))
  	header('location:updateroute.php');
  if(isset($_REQUEST['deletecab']))
  	header('location:deletecab.php');
  if(isset($_REQUEST['viewcab']))
  	header('location:viewcab.php');
  if(isset($_REQUEST['viewroute']))
  	header('location:viewroute.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="ISO-8859-1">
	<title>Admin Home</title>
	<style type="text/css">
  body
   {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
    background-image:url(c3.jpg);
    background-size:cover;
  }

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #eb9605;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  color: black;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: yellow;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
    background-color: black;
    color: white;
    font-size: 30px;
    text-align: center;

  padding: 6px;
}
#navigation
{
  line-height: 40px;
  height: 500px;
  width: 175px;
  float: left;
  padding: 5px; 
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>


  
  <div id="main">
  <h2>WELCOME TO ADMIN HOME PAGE</h2>
</div>
<section>
  <p>
    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="addcab.php">ADD CAB</a>
  <a href="addroute.php">ADD ROUTE</a>
  <a href="viewcab.php">VIEW CAB</a>
  <a href="viewroute.php">VIEW ROUTE</a>
  <a href="editprofile.php">EDIT PROFILE</a>
  <a href="billdet.php">BILL DETAILS</a>
  <a href="login.php">LOGOUT</a>
</div>

  </p>
</section>
<div id=navigation>
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "200px";
  document.getElementById("main").style.marginLeft = "200px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
   
</body>
</html> 

</body>
</html>