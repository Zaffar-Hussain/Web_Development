<?php
	require('dbfun.php');
	session_start();
	$msg="";
	$edit="";
	$cabdet=array();
  if(!isset($_SESSION['id']))
    header('location:error.php');
	if(isset($_REQUEST['edit']))
	{

		$edit=$_REQUEST['edit'];
		$cabdet=getCabDetails($edit);
	}
	
	/*if(isset($_REQUEST['show']))
	{
		$cid=$_REQUEST['cid'];
			$cabdet=getCabDetails($cid);
	}*/
	//$cabdet=array("","","","","","","","","","","","");

		

	
	if(isset($_REQUEST['update']))
	{
		$cid=$_REQUEST['cid'];
		$cname=$_REQUEST['cname'];
		$cat=$_REQUEST['cat'];
		$dname=$_REQUEST['dname'];
		$dnum=$_REQUEST['dnum'];
		$reg=$_REQUEST['reg'];
		$status=$_REQUEST['status'];
		$nos=$_REQUEST['nos'];
		$type=$_REQUEST['type'];
		$rate=$_REQUEST['rate'];
		$adv=$_REQUEST['adv'];
		$allowance=$_REQUEST['allowance'];
		if(updateCab($cid,$cname,$cat,$dname,$reg,$dnum,$status,$nos,$type,$rate,$adv,$allowance))
		{
			$msg="<font color=blue>Updated Successfully...</font>";
			//clearform();
		}
		else
			$msg="<font color=blue>Not Updated</font>";
		$cabdet=array("","","","","","","","","","","","");
	}
?>

<html>
<head><title>Edit Cab Information</title><style type="text/css">
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
<form name=upd method=get>
  <table>
	<tr><td><font color=white>Cab ID:</font></td><td><input type="text" size="10" name="cid" value='<?php echo $edit; ?>'>
	<?php
		$cid=$edit;
			
	?>
				
		  <tr><td><font color=white>Cab Name:</font></td>
        <td><input type="text" size="10" name="cname" value='<?php echo $cabdet[1]; ?>'></td></tr>
	    <tr><td><font color=white>Category:</font></td>
        <td><input type="text" size="10" name="cat" value='<?php echo $cabdet[2]; ?>'></td></tr>
			<tr><td><font color=white>Driver Name:</font></td>
        <td><input type="text" size="10" name="dname" value='<?php echo $cabdet[3]; ?>'></td></tr>
			<tr><td><font color=white>Reg.Number:</font></td>
        <td><input type="text" size="10" name="reg" value='<?php echo $cabdet[4]; ?>'></td></tr>
			<tr><td><font color=white>Driver Number:</font></td>
        <td><input type="text" size="10" name="dnum" value='<?php echo $cabdet[5]; ?>'></td></tr>
			<tr><td><font color=white>Status:</font></td>
        <td><input type="text" size="10" name="status" value='<?php echo $cabdet[6]; ?>'></td></tr>
			<tr><td><font color=white>Number of Seats:</font></td>
        <td><input type="number" size="10" name="nos" value='<?php echo $cabdet[7]; ?>'></td></tr>
			<tr><td><font color=white>Type:</font></td>
        <td><input type="text" size="10" name="type" value='<?php echo $cabdet[8]; ?>'>></td></tr>
			<tr><td><font color=white>Rate/Km:</font></td>
        <td><input type="text" size="10" name="rate" value='<?php echo $cabdet[9]; ?>'></td></tr>
			<tr><td><font color=white>Advance:</font></td>
        <td><input type="text" size="10" name="adv" value="<?php echo $cabdet[10]; ?>"></td></tr>
			<tr><td><font color=white>Allowance:</font></td>
        <td><input type="text" size="10" name="allowance" value='<?php echo $cabdet[11]; ?>'></td></tr>

		</table>	
	<tr><td><input type="submit" name="update" value="Update Cab"></td></tr>
  <tr><td><a href="viewcab.php"><input type="button" value="back" name="back"></a></td></tr>

	<?php echo $msg; ?>


</form>
</div>
</body>
</html>