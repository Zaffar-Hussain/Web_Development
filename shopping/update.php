<?php
$msg="";
require('connection.php');
$productdetail=array("","","","","","","","","","");
if(isset($_REQUEST['edi']))
{
	$num=$_REQUEST['edi'];

	$productdetail=getdetails($num);

}
	
if(isset($_REQUEST['update']))
{
$num=$_REQUEST['num'];
	$id=$_REQUEST['id'];
	$pwd=$_REQUEST['pwd'];
	$address=$_REQUEST['address'];
	$type=$_REQUEST['type'];
	$name=$_REQUEST['name'];
	$ques=$_REQUEST['ques'];
	$ans=$_REQUEST['ans'];
	$mn=$_REQUEST['mn'];
	$did=$_REQUEST['did'];
	if(updatedetails($num,$id,$pwd,$address,$type,$name,$ques,$ans,$mn,$did))
	{
		$msg="<font color=green >updated successfully.........</font>";
		//clearform();

	}
	else
		$msg="<font color=red>not updated</font>";

}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form name=upd method=get>




	

	<strong>Customer number:</strong><input type="text" name="num"  class="inputvalues1"  value='<?php 
if(isset($_GET['edi']))
$num=$_GET['edi'];
echo $num;?>'required><br><br>
	<strong>Email:</strong>&nbsp;&nbsp;<input type="text" required="Required" class="inputvalues3" name="id" value='<?php echo $productdetail[1];?>'><br><br>
	<strong>Password:</strong><input type="password" name="pwd"  class="inputvalues3" required="Required" minlength="8" maxlength="15"  title="Must contain more than 8 and less than 15 characters" value='<?php echo $productdetail[2];?>'><br><br>
		<strong>Address:</strong><input type="text" required="Required"   class="inputvalues3" name="address" value='<?php echo $productdetail[3];?>'><br><br>
			<strong>Type:</strong>&nbsp;&nbsp;
				<select name="type" value='<?php echo $productdetail[4];?>'>

			<option >Select</option>
		<option  >home</option>
		<option>business</option>
</select><br><br>
		<strong>Customer name:</strong>&nbsp;&nbsp;<input type="text" required="Required"  class="inputvalues3"  name="name" value='<?php echo $productdetail[5];?>'><br><br>
				
				<strong>Security question:</strong>&nbsp;&nbsp;
	<select name="ques" value='<?php echo $productdetail[6];?>'>
		<option >Select</option>
		<option  >What is your favorite place?</option>
		<option>What is your nick name?</option>
		<option >What is your nationality?</option>
		<option >What is your favourite food?</option>
		<option>When is your birthday?</option>
		<option>Who is your favourite color?</option>
		<option>Which is your favourite movie?</option>
	</select><br><br>
	<strong>Answer the question:</strong>&nbsp;&nbsp;<input type="text"   class="inputvalues3" name="ans" value='<?php echo $productdetail[7];?>'><br><br>
	<strong>Mobile number:</strong>&nbsp;&nbsp;<input type="text" name="mn" required="Required"  maxlength="10"  pattern="[0-9]{10}" title="Enter your mobile number" value='<?php echo $productdetail[8];?>'><br><br>
	<strong>distributor id:</strong>&nbsp;&nbsp;<input type="text" name="did" class="inputvalues1" required="Required" value='<?php echo $productdetail[9];?>'><br><br>
	
<input name=update type="submit"  value="update"/><br><br>
	<input type="reset"  name="reset"><br><br>
	<a href="login.php">login?</a>
	<?php
echo "$msg <br>";
?>
		</form>
</body>
</html> 