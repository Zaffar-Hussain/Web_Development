<?php
require('dbfunuser.php');
session_start();
if(!isset($_SESSION['id']))
   header('location:error.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Bill details</title>
	<style type="text/css">
  body
  {
    background-image:url(c4.jpg);
    background-size:cover;
  }
  .aa
  {
    width:800px;
    height:700px;
    background-color:rgba(0,0,0,0.5);
    margin:0 auto;
    margin-top:20px;
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
    width:120px;
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
  .aa input[type="number"]
  {
    width:120px;
    height:25px;
    border:0;
    border-radius:5px;
    background-color:white;
  }
  .aa select[name="cat"]
  {
    width:120px;
    height:25px;
    border:0;
    border-radius:5px;
    background-color:white;
  }
  .aa select[name="type"]
  {
    width:120px;
    height:25px;
    border:0;
    border-radius:5px;
    background-color:white;
  }
  .aa select[name="status"]
  {
    width:120px;
    height:25px;
    border:0;
    border-radius:5px;
    background-color:white;
  }


  
  </style>
</head>
<body>
<div class="aa">
    <h2>Bill Details</h2>
	<form name="" method="get" action="">

<table border=1>
				<tr bgcolor=white>
				<td><font color=green>Bill No</td><td><font color=green>Username</td><td><font color=green>Cab ID</td><td><font color=green>Route Id</td><td><font color=green>Journey Date</td><td><font color=green>Advance</font></td><td><font color=green>Book Date</font></td><td><font color=green>Cancel date</font></td><td><font color=green>Remarks</font></td></tr>
				<?php
					

				$billdet=getBillDet();
				//print_r($billdet);
				foreach ($billdet as $bdet) {
					$un=$bdet[1];
					$uname=getUserName($un);
					$remark=$bdet[8];
					if($remark)
					{
						echo "<tr>
							<td>$bdet[0]</td>
							<td>$uname</td>
							<td>$bdet[2]</td>
							 <td>$bdet[3]</td>
							 <td>$bdet[4]</td>
							 <td>$bdet[5]</td>
							 <td>$bdet[6]</td>
							 <td>$bdet[7]</td>
							 <td>$bdet[8]</td></tr>";
							}
					
					else
						{
						echo "<tr>
							<td>$bdet[0]</td>
							<td>$uname</td>
							<td>$bdet[2]</td>
							 <td>$bdet[3]</td>
							 <td>$bdet[4]</td>
							 <td>$bdet[5]</td>
							 <td>$bdet[6]</td>
							 <td>-</td>
							 <td>-</td></tr>";
							}

			}
				?>
</body>
</html>