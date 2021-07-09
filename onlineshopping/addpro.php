<?php
	session_start();
	
	require('dbfunct.php');
	$pid=get_pro_id();
	$msg='';
	if(isset($_REQUEST['submit']))
	{
		$pname=$_REQUEST['pname'];
		$pdet=$_REQUEST['pdet'];
		$price=$_REQUEST['price'];
		$cat=$_REQUEST['cat'];
		if(add_pro($pname,$pdet,$price,$cat))
			$msg="<font color=green>added successfully</font>";
		else
			$msg="<font color=red>addition unsuccessfull</font>";
	$filename=$_FILES['filetoupload']['name'];
	$file_tmp=$_FILES['filetoupload']['tmp_name'];
	$path_parts=pathinfo($_FILES['filetoupload']['name']);
	$extension=$path_parts['extension'];
	if (!($extension=="jpg" || $extension=="png" || $extension=="bmp")) {
		die("file format is not correct");
	}
	if ($filename!="") {
		$target_dir="image/";
		$newfilename=$pid.".jpg";
		move_uploaded_file($file_tmp,$target_dir.$newfilename);
	}
	}
	session_destroy();
?>

<?php

	$proddet=array("","","","");
	$msg1="";
	if(isset($_REQUEST['show']))
	{
		$id=$_REQUEST['p_id'];
		if($id!="select")
		{
			$proddet=getProductDetails($id);
		}
		else 
			$msg1="please select id";

	}
	
	if(isset($_REQUEST['update']))
	{
		$id=$_REQUEST['p_id'];
		$p_name=$_REQUEST['p_name'];
		$p_det=$_REQUEST['p_det'];
		$p_price=$_REQUEST['p_price'];
		if(updateProduct($id,$p_name,$p_det,$p_price))
		{
			$msg1="<font color=blue>Updated Successfully...</font>";
			//clearform();
		}
		else
			$msg1="<font color=blue>Not Updated</font>";
	}


	

?>
<!DOCTYPE html>
<html>
<head>
	<title>add products</title>
</head>
<body>

	<form method="post" action="" enctype="multipart/form-data">
		New Product ID :
		<span id=span1 name=pid>
			<?php
				
				echo $pid;
			?>
		</span><br>
		Product Name: <input type="text" size="10" name="pname"><br>
		Product Details: <input type="text" size="10" name="pdet"><br>
		Product Price: <input type="text" size="10" name="price"><br>
		Product Catagory: <input type="text" size="10" name="cat"><br>
		Select Image to upload:
		Image Id:
		<input type="text" name="id" size="10"><br>
		<input type="file" name="filetoupload" id="filetoupload">
		<!--<input type="submit" name="submit_img" value="submit"><br><!-->
		<input type="submit" name="submit" value="add">
		<input type="reset" value="reset"><br><br>
		<?php echo $msg; ?><br><br><br>



		<h1>Update Product</h1>
		Product ID:<SELECT name=p_id>
		<option value="select">select</option>
		<?php
			$id_array= getAllProductIds();
			foreach ($id_array as  $id) 
			{
				if($_REQUEST['p_id']==$id && $_REQUEST['show'])
					echo "<option selected>".$id."</option>";
				else
					echo "<option>".$id."</option>";
			}
		?>
		</SELECT>
				<input type="submit" name="show" value=Show>
	<br><br>Product Name:<input type="text" name="p_name" size=10 value='<?php echo $proddet[1]; ?>' ><br>
	<br>Product Details:<input type="text" name="p_det" size=10 value='<?php echo $proddet[2]; ?>'><br>
	<br>Product Price:<input type="text" name="p_price" size=10 value='<?php echo $proddet[3]; ?>'><br>
	<br><input type="submit" name="update" value=Update><br>
	<?php echo $msg1; ?>


	</form>
	


</body>
</html>