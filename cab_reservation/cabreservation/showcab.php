<?php
  require('dbfunuser.php');
  session_start();
  $msg="";
  $source="";
  $dest="";
  $via="";
  $cabdets=array();
  $cabid="";
if(!isset($_SESSION['id']))
    header('location:error.php');
  if(isset($_REQUEST['source'],$_REQUEST['dest'],$_REQUEST['via']))
	{

		$source=$_REQUEST['source'];
		$dest=$_REQUEST['dest'];
		$via=$_REQUEST['via'];

		
		$rid=getRouteId($source,$dest,$via);
		
		$cabid=getCabId($rid);
		foreach ($cabids as  $value) {
		$cabdets=getCabDetails($value);
	}
	}
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cab Lists</title>
<style type="text/css">
  body
  {
    background-image:url(c6.jpg);
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
    background-color:rgba(15,90,90,10);
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
	<?php
	echo "<table border=1 bgcolor=cyan>
				<tr bgcolor=pink>
				<td>Cab Name</td><td>Category</td><td>Seats</td><td>Type</td></tr>";
				//$cid=$cabid;
				//$cabdets=getCabDetails($cid);
				print_r($cabdets);
				foreach ($cabdets as $cabdet) 
				{
					echo "<tr><td>$cabdet[0]</td>
							<td>$cabdet[1]</td>
							<td>$cabdet[2]</td>
							 <td>$cabdet[3]</td></tr>";
				}
?>
</div>
</body>
</html>