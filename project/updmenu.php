<?php
	require('dbfunctions.php');
	$msg="";
	
	$msg="";
	$edit="";


	if(isset($_REQUEST['upid']))
	{
	  $edit=$_REQUEST['upid'];
	  $menusdet=getMenuDetail($edit);
	  
	}
	
	if(isset($_REQUEST['show']))
	{
		$food_id=$_REQUEST['food_id'];

		//if($food_id!="select")
			
		
	
		//else
			//$msg="please select food_id";
	}
	if(isset($_REQUEST['update']))
	{
		$food_id=$_REQUEST['food_id'];
		$food_name=$_REQUEST['food_name'];
		$food_category=$_REQUEST['food_category'];
		$food_price=$_REQUEST['food_price'];
		
		if(updateMenuInfo($food_id,$food_name,$food_category,$food_price))
		{
			$msg="<font color=green>Updated successfully</font>";
			//clearform();
		}
		else
			$msg="<font color=red> Not Updated</font>";
		$menusdet=array("","","","");
	}
?>
<html>
<body>
	<form name="upd" method="get">
	Food ID: <input type="text" name="food_id"   value='<?php echo $edit; ?>'>
		
		
		
	
	Food Name:<input type="text" name="food_name"   value='<?php echo $menusdet[1]; ?>'><br><br>
Food Category:<input type="text"  name="food_category"  value='<?php echo $menusdet[2]; ?>'><br><br>
	Food price:<input type="number" name="food_price"   value='<?php echo $menusdet[3]; ?>'><br><br>
	
	 
<input type="submit" name="update" value="Update">
	
	<?php 
	echo $msg ; 
	?>
		</form>
</body>
</html>