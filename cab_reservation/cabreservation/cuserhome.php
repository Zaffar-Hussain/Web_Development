<?php
  require('dbfun.php');
  session_start();
  $msg="";
  if(!isset($_SESSION['id']))
    header('location:error.php');
  if(isset($_REQUEST['searchcab']))
  	header('location:addcab.php');
  if(isset($_REQUEST['cancel']))
  	header('location:addroute.php');
 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="ISO-8859-1">
	<title>Home Page</title>
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
#section
{
 width: 75%;
  float: left;
  padding: 5px;  
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
  <h2>WELCOME TO USER HOME PAGE</h2>


</div>
<section>
  <p>
    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="searchcab.php">BOOK CAB</a>
  <a href="cancelcab.php">CANCEL CAB</a>
  <a href="editprofile.php">Edit Profile</a>
  <a href="login.php">LOGOUT</a>
</div>

  </p>
</section>
<div id=navigation>
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span></div>
<div id=section>
  <h2>About Us</h2>
  <p>     Good things happen when people can move, whether across town or towards their dreams. Opportunities appear, open up, become reality. What started as a way to tap a button to get a ride has led to billions of moments of human connection as people around the world go all kinds of places in all kinds of ways with the help of our technology.</p><br>
  <h2>Safe rides, safer cities</h2>
  <p>Whether you’re in the back seat or behind the wheel, your safety is essential. We are committed to doing our part, and technology is at the heart of our approach. We partner with safety advocates and develop new technologies and systems to help create a world where it’s safe and easy for everyone to get around.
  </p>  
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