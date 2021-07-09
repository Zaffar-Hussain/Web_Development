<?php
	require('prodbfunct.php');
	$prodet=array("","","","");
	if(isset($_REQUEST['show']))
	{
		$cat=$_REQUEST['cat'];
		$prodet=getprodbycat($cat);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>product catagory</title>
</head>
<body>
	<center>
		Catagory:<select name="cat">
			<option value="select">Select</option>
			<?php
				$cat=getprocat();
				foreach($cat as $values){
					if($_REQUEST['cat']==$values && $_REQUEST['show'] )
						echo "<option selected>".$values."</option>";	
					else
						echo "<option>".$values."</option>"	;	
				}
			?>
		</select>
		<input type="submit" name="show" value="Show"><br><br>
		<table>
			<tr><th>ID</th><th>PNAME</th><th>PDET</th><th>PRICE</th></tr>
			<tr>
				<td><?php echo $prodet[0]; ?></td>
				<td><?php echo $prodet[1]; ?></td>
				<td><?php echo $prodet[2]; ?></td>
				<td><?php echo $prodet[3]; ?></td>
			</tr>
		</table>

	</center>
</body>
</html>