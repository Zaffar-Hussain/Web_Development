<?php
	session_start();
	$id=$_SESSION['pid'];
	require('prodbfunct.php');
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
	}
	session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title>add products</title>
</head>
<body>

	<form method="get" action="">
		New Product ID :
		<span id=span1 name=pid>
			<?php
				$pid=get_pro_id();
				echo $pid;
			?>
		</span><br>
		Product Name: <input type="text" size="10" name="pname"><br>
		Product Details: <input type="text" size="10" name="pdet"><br>
		Product Price: <input type="text" size="10" name="price"><br>
		Product Catagory: <input type="text" size="10" name="cat"><br>
		<input type="submit" name="submit" value="add">
		<input type="reset" value="reset">


	</form>
	<?php echo $msg; ?>
</body>
</html>