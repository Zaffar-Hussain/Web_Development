<?php
require('dbfunuser.php');
session_start();
$cids="";
$cabdet=array();
$jdate="";
if(!isset($_SESSION['id']))
    header('location:error.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Cab Lists</title>

<style type="text/css">
  body
  {
    background-image:url(c4.jpg);
    background-size:cover;
  }
  .aa
  {
    width:500px;
    height:550px;
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
    <h2>SELECT CAB</h2>
	<form name="" method="get" action="">

<table border=1 bgcolor=black>
				<tr bgcolor=white>
				<td><font color=green>Cab Id</td><td><font color=green>Cab Name</td><td><font color=green>Category</td><td><font color=green>Seats</td><td><font color=green>Type</td><td><font color=green>Rate/Km</font></td></tr>
				<?php
				//$cdets=getcabdetails($jdate);;
				if(isset($_REQUEST['jdate']))
				{

					$jdate=$_REQUEST['jdate'];


				}
					

				$cabdet=getCabDetails($jdate);
				
				foreach ($cabdet as $cdet) {
					
						echo "<tr>
							<td>$cdet[0]</td>
							<td>$cdet[1]</td>
							<td>$cdet[2]</td>
							 <td>$cdet[3]</td>
							 <td>$cdet[4]</td>
							 <td>$cdet[5]</td>
							 <td><a href='selectedcab.php?cabid=$cdet[0]'><font color=cyan>Select</font></a></td></tr>";
							}
			
				?>
			</table><br>
      <tr><td><a href='searchcab.php'><input type='button' name='back' value=Back></a></td></tr>

		</form>
	</div>
</body>
</html>