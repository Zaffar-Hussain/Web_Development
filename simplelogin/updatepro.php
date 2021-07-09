<?php
	require('prodbfunct.php');
	$prodet=array("","","","");
	if(isset($_REQUEST['show']))
	{
		$id=$_REQUEST['pid'];
		$prodet=getprodet($id);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>updation</title>
</head>
<body>
	<form name=upd method=get>
		Product ID:<select name="pid">
			<option value="select">Select</option>
			<?php
				$id=getpids();
				foreach($id as $values){
					if($_REQUEST['pid']==$values && $_REQUEST['show'])
						echo "<option selected>".$values."</option>";	
					else
						echo "<option>".$values."</option>"	;	
				}
			?>
		</select>
		<input type="submit" name="show" value="Show"><br><br>
		Product Name:<input type="text" name="pname" size="10" value="<?php echo $prodet[1]; ?>"><br><br>
		Product Details:<input type="text" name="pdet" size="10" value="<?php echo $prodet[2]; ?>"><br><br>
		Product Price:<input type="text" name="price" size="10" value="<?php echo $prodet[3]; ?>"><br><br>
		Product Catagory:<input type="text" name="price" size="10" value="<?php echo $prodet[4]; ?>"><br><br>
		<input type="submit" name="submit" value="Modify">
		<input type="reset" name="" value="Reset">
	</form>

</body>
</html>