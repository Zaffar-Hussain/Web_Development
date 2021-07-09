<?php
	require('dbfunc.php');
	$msg="";
	$itemdet=array("","","","");
	$msg="";
	$edit="";


	if(isset($_REQUEST['upid']))
	{
	  $edit=$_REQUEST['upid'];
	  $itemdet=getProductDetails($edit);
	  
	}
	
	if(isset($_REQUEST['update']))
	{
		$item_id=$_REQUEST['item_id'];
		$item_name=$_REQUEST['item_name'];
		$item_detail=$_REQUEST['item_detail'];
		$item_price=$_REQUEST['item_price'];
		
		if(updateItemInfo($item_id,$item_name,$item_detail,$item_price))
		{
			$msg="<font color=green>Updated successfully</font>";
			//clearform();
		}
		else
			$msg="<font color=red> Not Updated</font>";
	}
?>
<html>
<body>
	<form name="upd" method="get">
	Item ID: <input type="text" name="item_id"   value='<?php echo $edit; ?>'><br><br>	
	Item Name:<input type="text" name="item_name"   value='<?php echo $itemdet[1]; ?>'><br><br>
	Item Detail:<input type="text"  name="item_detail"  value='<?php echo $itemdet[2]; ?>'><br><br>
	Item price:<input type="number" name="item_price"   value='<?php echo $itemdet[3]; ?>'><br><br>
	
	 
<input type="submit" name="update" value="Update">
	
	<?php 
	echo $msg ; 
	?>
		</form>
</body>
</html>