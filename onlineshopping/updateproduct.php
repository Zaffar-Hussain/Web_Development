<?php
	require('dbfun1.php');
	$proddet=array("","","","");
	$msg="";
	if(isset($_REQUEST['show']))
	{
		$id=$_REQUEST['pid'];
		if($id!="select")
		{
			$proddet=getProductDetails($id);
		}
		else 
			$msg="please select id";

	}
	
	if(isset($_REQUEST['update']))
	{
		$id=$_REQUEST['pid'];
		$pname=$_REQUEST['pname'];
		$det=$_REQUEST['det'];
		$price=$_REQUEST['price'];
		if(updateProduct($id,$pname,$det,$price))
		{
			$msg="<font color=blue>Updated Successfully...</font>";
			//clearform();
		}
		else
			$msg="<font color=blue>Not Updated</font>";
	}
?>

<html>
<body>
<form name=upd method=get>
	Product ID:<SELECT name=pid>
		<option value="select">select</option>
		<?php
			$idarray= getAllProductIds();
			foreach ($idarray as  $id) 
			{
				if($_REQUEST['pid']==$id && $_REQUEST['show'])
					echo "<option selected>".$id."</option>";
				else
					echo "<option>".$id."</option>";
			}
		?>
		</SELECT>
				<input type="submit" name="show" value=Show>
	<br><br>Product Name:<input type="text" name="pname" size=10 value='<?php echo $proddet[1]; ?>' ><br>
	<br>Product Details:<input type="text" name="det" size=10 value='<?php echo $proddet[2]; ?>'><br>
	<br>Product Price:<input type="text" name="price" size=10 value='<?php echo $proddet[3]; ?>'><br>
	<br><input type="submit" name="update" value=Update>
	<?php echo $msg; ?>


</form>
</body>
</html>