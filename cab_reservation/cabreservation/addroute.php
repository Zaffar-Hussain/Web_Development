<?php
require ('dbfun.php');
session_start();
$msg="";
$rid=getNewRouteid();
if(!isset($_SESSION['id']))
    header('location:error.php');
if(isset($_REQUEST['submit']))
{
	$src=$_REQUEST['src'];
	$dest=$_REQUEST['dest'];
	$dist=$_REQUEST['dist'];
	$det=$_REQUEST['det'];
	if(addRoute($rid,$src,$dest,$dist,$det))
	$msg="<font color=blue>Added</font>";
	else
		$msg="<font color=red>Not Added</font>";
}
?>

<html>
<head>
	<title>ADD ROUTE</title>
	<style type="text/css">
  body
  {
    background-image:url(c4.jpg);
    background-size:cover;
  }
  .aa
  {
    width:400px;
    height:350px;
    background-color:rgba(0,0,0,0.5);
    margin:0 auto;
    margin-top:50px;
    padding-top:10px;
    padding-left: 60px;
    border-radius:15px;
    color:white;
    font-weight:bolder;
    box-shadow:inset 4px 4px rgba(0,0,0,20);
  }
  .aa input[type="submit"]
  {
    width:100px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:skyblue;
    font-weight:bolder;
  }.aa input[type="reset"]
  {
    width:100px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:skyblue;
    font-weight:bolder;
  }
  .aa input[type="text"]
  {
    width:200px;
    height:25px;
    border:0;
    border-radius:5px;
    background-color:white;
  }
  .aa input[type="button"]
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

	<div class="aa">
	<form method="post" action="" >
    
		<h2><tr><td><font color=white><b>New Route ID:</b></font></td><td><span id="span1" name=id>
			<?php
		 //return the new product id
			echo "<font color=white>".$rid."</font><br>";
			?>
		</span></td></tr></h2><br>
    <table>
			<tr><td><font color=white>Source:</font></td><td><input type="text" size="10" name="src"></td></tr>
			<tr><td><font color=white>Destination:</font></td><td><input type="text" size="10" name="dest"></td></tr>
			<tr><td><font color=white>Distance:</font></td><td><input type="text" size="10" name="dist"></td></tr>
			<tr><td><font color=white>Route Details:</font></td><td><input type="text" size="20" name="det"></td></tr>

		</table><br><br>
		<tr><td><input type="submit" name="submit" value="Add Route"></td></tr>
		<tr><td><input type="reset" value="Reset"></td></tr>
    <tr><td><a href="adminhome.php"><input type="button" value="back" name="back"></a></td></tr>

	</form>
<?php
echo $msg;
?>
</div>
</body>
</html>