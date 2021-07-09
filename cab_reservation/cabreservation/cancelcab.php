<?php
	require('dbfunuser.php');
   	session_start();
	$uid=$_SESSION['id'];
	$bill=getBillDetails($uid);
	$history=array();
	$date=date("Y-m-d");
	//echo "$date";
	//$jdate=$bill[3];
	if(!isset($_SESSION['id']))
    header('location:error.php');
?>
<html>
<head>
	<title>Cancel Cab</title>
<style type="text/css">
  body
  {
    background-image:url(c4.jpg);
    background-size:cover;
  }
  .aa
  {
    width:1000px;
    height:750px;
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
	<form><center><b>Booking History</b></center>
		<table border="1" align="center">
			<tr bgcolor=white><th><font color=green>Bill No.</font></th>
				<th><font color=green>Cab Name</font></th>
				<th><font color=green>Category</font></th>
				<th><font color=green>Type</font></th>
				<th><font color=green>Source</font></th>
				<th><font color=green>Destination</font></th>
				<th><font color=green>Advance Paid</font></th>
				<th><font color=green>Journey Date</font></th>
				<th><font color=green>Booking Date</font></th></tr>
			<?php
				$history=getBookHistory($uid);
				//print_r($history);

				foreach ($history as $billdet) {
									//$jdate=$billdet[8];
					//echo $jdate;
					
					if(!$billdet[10])
					{
						if($billdet[8]>=$date)
						{
							echo "<tr bgcolor=black><td><font color=white>$billdet[0]</font></td>
									<td><font color=white>$billdet[1]</font></td>
									<td><font color=white>$billdet[2]</font></td>
									<td><font color=white>$billdet[3]</font></td>
									<td><font color=white>$billdet[4]</font></td>
									<td><font color=white>$billdet[5]  $billdet[6]</font></td>
									<td><font color=white>$billdet[7]</font></td>
									<td><font color=white>$billdet[8]</font></td>
									<td><font color=white>$billdet[9]</font></td>
									<td><a href='canceledcab.php?bid=$billdet[0]'>Cancel</a></td></tr>";
						}
						else 
						{
							echo "<tr bgcolor=black>><td><font color=white>$billdet[0]</font></td>
									<td><font color=white>$billdet[1]</font></td>
									<td><font color=white>$billdet[2]</font></td>
									<td><font color=white>$billdet[3]</font></td>
									<td><font color=white>$billdet[4]</font></td>
									<td><font color=white>$billdet[5]  $billdet[6]</font></td>
									<td><font color=white>$billdet[7]</font></td>
									<td><font color=white>$billdet[8]</font></td>
									<td><font color=white>$billdet[9]</font></td>
									<td><font color=white>Travelled</font></td></tr>";
						}
					}
					else
					{
						echo "<trbgcolor=black>><td><font color=white>$billdet[0]</font></td>
								<td><font color=white>$billdet[1]</font></td>
								<td><font color=white>$billdet[2]</font></td>
								<td><font color=white>$billdet[3]</font></td>
								<td><font color=white>$billdet[4]</font></td>
								<td><font color=white>$billdet[5]  $billdet[6]</font></td>
								<td><font color=white>$billdet[7]</font></td>
								<td><font color=white>$billdet[8]</font></td>
								<td><font color=white>$billdet[9]</font></td>
								<td><font color=white>Canceled</font></td></tr>";
					}
					 
				}
			?>
		</table>
	</form>
<p id='msg'></p>

<script>
	function myfunction()
	{
		var txt;
		if(confirm("Do you want to Cancel?"))
		{
			txt="Canceled......"
			
		}
		else
			window.location.assign("cancelcab.php")
		document.getElementById("msg").innerHTML=txt;
	}

</script>
	<tr><td><a href="cuserhome.php"><input type="button" value="back" name="back"></a></td></tr>

</div>
</body>
</html>
