<?php
require('dbfunuser.php');
session_start();
$cabdet="";
$cabid="";
if(!isset($_SESSION['id']))
    header('location:error.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Selected Cab Page</title>
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
  


  
  </style>
</head>
<body>

	<div class="aa">
    <h2>Seleced Cab Information</h2>
	<form>
	<table align="center">
		<?php
			if(isset($_REQUEST['cabid']))
				{
					$cabid=$_REQUEST['cabid'];
					$cabdet=getcab($cabid);
					$_SESSION['cid']=$cabid;
					//print_r($cabdet);
					$rate=$cabdet[6];
				}

		?>
			<tr><td>Category</td><td ><?php echo $cabdet[1];?></td></tr>

			<tr><td>Cab name</td><td><?php echo $cabdet[0];?></td></tr><tr><td>Seats</td><td><?php echo $cabdet[4];?></td></tr><tr><td>Type</td><td ><?php echo $cabdet[5];?></td></tr>
			<?php
				$rid=$_SESSION['rid'];
				$routedet=getRouteDetails($rid);
				echo "<tr><td>$routedet[0]</td><td>$routedet[1]</td><td>$routedet[2]</td><td>$routedet[3]</td></tr>";
				//echo $rid
				$km=$routedet[3];
			?>
			<tr><td>Rate/Km</td><td><?php echo $cabdet[6]; ?></td> </tr>
			<?php
				$bamt="";
				$bamt=$rate*$km;
				$tamt=$bamt+$cabdet[7];
				echo "<tr><td>Base Amount</td><td>$bamt</td></tr>";
				echo "<tr><td>Total Amount</td><td>$tamt</td></tr>";
				//echo "<input type='submit' name='submit' value='BOOK NOW'>";
				$_SESSION['tamt']=$tamt;
				//die('amt:'.$_SESSION['tamt']);
			?>
			
			


	</table>
	
</form><br>
<center><tr><td><button onclick="myfunction()"><input type=button name=book value="BOOK NOW"></button></td></tr>
  <tr><td><a href=cablist.php><input type=button name=back value="Back"></button></a></td></tr></center>
<p id='msg'></p>
<script>
	function myfunction()
	{
		var txt;
		if(confirm("Confirm Booking.."))
		{
			window.location.assign("bill.php")
			
		}
		else
			window.location.assign("selectedcab.php")
		//document.getElementById("msg").innerHTML=txt;
	}

</script>

<?php
				//if(isset($_REQUEST['submit']))
				//{
				//	echo "Confirm Booking <br><input type='submit' name='yes' value='yes'><input type='submit' name='no' value='no'>";
				//}
			?>
</div>
</body>
</html>