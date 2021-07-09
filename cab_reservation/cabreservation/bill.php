<?php
  require('dbfunuser.php');
   session_start();
   if(!isset($_SESSION['id']))
    header('location:error.php');
$uid=$_SESSION['id'];
//echo $uid;
$rid=$_SESSION['rid'];
$cabid=$_SESSION['cid'];
$jdate=$_SESSION['jdate'];
$tamt=$_SESSION['tamt'];
$bid=getNewBillid();
//echo $tamt;
$bdate=date("Y/m/d");
//echo $jdate;
$adv=$tamt*0.20;
//echo $adv;
AddToBill($bid,$uid,$cabid,$rid,$jdate,$adv,$bdate);
$ramt=$tamt-$adv;
$cdet=getcab($cabid);
$rdet=getRouteDetails($rid);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bill</title>

<style type="text/css">
  body
  {
    background-image:url(c4.jpg);
    background-size:cover;
  }
  .aa
  {
    width:400px;
    height:550px;
    background-color:rgba(0,0,0,0.5);
    margin:0 auto;
    margin-top:5px;
    padding-top:10px;
    padding-left: 60px;
    border-radius:15px;
    color:white;
    font-weight:bolder;
    box-shadow:inset 4px 4px rgba(0,0,0,20);
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
		<h1>
		Thanks for Booking...
	</h1>
	<div>
		<table>
			<tr><td><b>User Name</b></td><td><?php echo $uid; ?></td></tr>
			<tr><td><b>Bill No.</b></td><td><?php echo $bid; ?></td></tr>
			<tr><td><b>Cab Name</b></td><td><?php echo $cdet[0]; ?></td></tr>
			<tr><td><b>Driver Name</b></td><td><?php echo $cdet[2]; ?></td></tr>
			<tr><td><b>Driver Phone</b></td><td><?php echo $cdet[3]; ?></td></tr>
			<tr><td><b>Source</b></td><td><?php echo $rdet[0]; ?></td></tr>
			<tr><td><b>Destination</b></td><td><?php echo $rdet[1]; ?></td></tr>
			<tr><td><b>Journey Date</b></td><td><?php echo $jdate; ?></td></tr>
			<tr><td><b>Distance in Km</b></td><td><?php echo $rdet[3]; ?></td></tr>
			<tr><td><b>Total Amount</b></td><td><?php echo $tamt; ?></td></tr>
			<tr><td><b>Remaining Bal.</b></td><td><?php echo $ramt; ?></td></tr>
		</table>
    <tr><td><a href=cuserhome.php><input type=button name=done value=Done></a></td></tr>
	</div>



</body>
</html>