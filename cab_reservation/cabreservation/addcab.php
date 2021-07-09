<?php
session_start();
require ('dbfun.php');
$msg="";
$cid=getNewCabid();
if(!isset($_SESSION['id']))
    header('location:error.php');
if(isset($_REQUEST['submit']))
{
	$cname=$_REQUEST['cname'];
	$cat=$_REQUEST['cat'];
	$dname=$_REQUEST['dname'];
	$reg=$_REQUEST['reg'];
	$dnum=$_REQUEST['dnum'];
	$status=$_REQUEST['status'];
	$nos=$_REQUEST['nos'];
	$type=$_REQUEST['type'];
	$rate=$_REQUEST['rate'];
	$adv=$_REQUEST['adv'];
	$allowance=$_REQUEST['allowance'];
	if(addCab($cid,$cname,$cat,$dname,$reg,$dnum,$status,$nos,$type,$rate,$adv,$allowance))
	$msg="<font color=blue>Added</font>";
	else
		$msg="<font color=red>Not Added</font>";
}
?>

<html>
<head>
	<title>ADD CAB</title>
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
	<form method="post" action="" ><font color=green>
    
		<font color=white>New Cab ID:<span id="span1" name=id>
			<?php
		 //return the new product id
			echo $cid."<br>";
			?>
			</font>
		</span><br>
			<tr><td><font color=white>Cab Name:</font></td>
				<td><input type="text" size="10" name="cname" class="inputvalues" required></td></tr><br><br>
			<tr><td><font color=white>Category:</font></td>
				<td><select name="cat" onchange="this.form.submit()"></td>
				<option> Select</option>
				<option> Prime</option>
				<option> SUV</option>
				<option> Sedan</option>
				<option> Mini</option></select></td></tr><br><br>
			<tr><td><font color=white>Driver Name:</font></td>
				<td><input type="text" size="10" name="dname" class="inputvalues" required></td></tr><br><br>
			<tr><td><font color=white>Reg.Number:</font></td>
				<td><input type="text" size="10" name="reg" class="inputvalues" required></td></tr><br><br>
			<tr><td><font color=white>Driver Number:</font></td>
				<td><input type="text" size="10" name="dnum" class="inputvalues" required></td></tr><br><br>
			<tr><td><font color=white>Status:</font></td>
				<td><select name="status" onchange="this.form.submit()"></td>
				<option> Select</option>
				<option> Available</option>
				<option> Not Available</option></select></td></tr><br><br>
			<tr><td><font color=white>Type:</td>
				<td><select name="type" onchange="this.form.submit()"></td>
				<option> Select</option>
				<option> AC</option>
				<option> Non-AC</option></select></td></tr><br><br>
			<tr><td><font color=white>Number of Seats:</font></td>
				<td><input type="number" size="10" name="nos" class="inputvalues" required></td></tr><br><br>
			
			<tr><td><font color=white>Rate/Km:</font></td>
				<td><input type="text" size="10" name="rate" class="inputvalues" required></td></tr><br><br>
			<tr><td><font color=white>Advance:</font></td>
				<td><input type="text" size="10" name="adv" class="inputvalues" required></td></tr><br><br>
			<tr><td><font color=white>Allowance:</font></td>
				<td><input type="text" size="10" name="allowance" class="inputvalues" required></td></tr><br><br>

      </table>
			<tr><td><input type="submit" name="submit" value="Add Cab"></td></tr> 
			<tr><td><input type="reset" value="Reset" name="reset"></td></tr>
			<tr><td><a href="adminhome.php"><input type="button" value="back" name="back"></a></td></tr>

	</form>
<?php
echo $msg;
?>
</div>
</body>
</html>