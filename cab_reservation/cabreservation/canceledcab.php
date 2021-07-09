<?php
require('dbfunuser.php');
session_start();
$bid="";
if(!isset($_SESSION['id']))
    header('location:error.php');
if(isset($_REQUEST['bid']))
{
	$bid=$_REQUEST['bid'];
}
//echo $bid;
$billdet=getBillD($bid);
//$_SESSION['bid']=$billdet[0];
//$bbid=$billdet[0];
//echo $bbid;
//print_r($billdet);
$rmark="";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Confirm Cancelling</title>
<style type="text/css">
  body
  {
    background-image:url(c4.jpg);
    background-size:cover;
  }
  .aa
  {
    width:450px;
    height:350px;
    background-color:rgba(0,0,0,0.5);
    margin:0 auto;
    margin-top:50px;
    padding-top:30px;
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
    width:150px;
    height:35px;
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
  .aa select[name="remark"]
  {
    width:300px;
    height:30px;
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
	<form action=""><table>
		<?php
			foreach ($billdet as $bdet) {
				$billno=$bdet[0];
				$_SESSION['bid']=$billno;
			echo "<tr><td><b>Bill No.:</b></td><td>$bdet[0]<br></td><tr>";
			echo "<tr><td><b>Booked Date:</b></td><td>$bdet[9]<br></td><tr>";
		}
		?>
	<?php
			foreach ($billdet as $bdet) {
				echo "<tr><td><b>Cab Details:</b></td><td>$bdet[1],$bdet[2],$bdet[3]<br></td></tr>";
				echo "<tr><td><b>Advance:</b></td><td>$bdet[7]<br></td></tr>";


		}
	?>
</table>
</form>
<form>
<table>
<br>Select Reason for Cancel*
<select align=center name="remark" onchange="this.form.submit()"  required>
	<option>  </option>
	<option>I'm getting better price elsewhere</option>
	<option>I'll not be able to take journey on that day</option>
	<option>Allowance is too high</option>
	<option>I booked cab by mistake</option>
	<option>I need to change journey date</option>
	<option>I need to change pick up point</option>
</select></center>
</table>
<?php
	if(isset($_REQUEST['remark']))
	{
		if($_REQUEST['remark']!=' ')
		{
			$rmark=$_REQUEST['remark'];
		}
	}
//echo $rmark;
$_SESSION['rm']=$rmark;

?>

	</form>

<br><tr><td><a href="cancelcab.php"><input type="button" value="back" name="back"></a></td></tr>

<button onclick="myfunction()"><input type=button name=confirmcancel value="Confirm Cancel"</button>
<p id='msg'></p>
<script>
	function myfunction()
	{
		var txt;
		if(confirm("Are you Sure?"))
		{
			window.location.assign("cancelled.php")
			
		}
		else
			window.location.assign("canceledcab.php")
		//document.getElementById("msg").innerHTML=txt;
	}
</script>
</div>
</body>
</html>