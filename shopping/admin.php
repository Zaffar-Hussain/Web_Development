<?php 
require('dbfunc.php');
session_start();
if(!isset($_SESSION['id']))
	header('location:error.php');
$id=$_SESSION['id'];

if(isset($_REQUEST['delete'])){
	
		$delete=$_REQUEST['delete'];
		$str=deleteProduct($delete);

}

 ?>
<!DOCTYPE html>
<html> 
<body>Welcome
	<?php
	echo $id;
	?>...............<a href="logout.php">Logout</a>
	<hr color=blue>
<h1>This is admin page</h1>

<form name="show" method="get" action="">
		Category:
		<select name="cat" onchange="this.form.submit()">
			<option> Choose</option>
		
			<?php 
			$category=getProductCategory();
			$cat="";
			if(isset($_REQUEST['cat']))
				$cat=$_REQUEST['cat'];
			foreach($category as $value)
			{
				if($cat==$value)
			
			echo "<option selected >".$value."</option>";
			else
				echo "<option>".$value."</option>";
		}
			?>
		</select><br><br>
		<table border="1" bgcolor="cyan">
		<?php
		$msg3="";
		$msg="";
		$catg="";
		
		if(isset($_REQUEST['cat']))
			if($_REQUEST['cat']!='Choose')
			{
				echo "<tr bgcolor=pink><td>Id</td><td>Name</td><td>Price</td><td>Details</td><td>Edit</td><td>Delete</td></tr>";
				$catg=$_REQUEST['cat'];
				$pdets=array("","","","","","","","");
				$pdets=getProductByCatgs($catg);
				$url=$_SERVER['REQUEST_URI'];
				$url="http://localhost".$url."";     
				foreach ($pdets as $pdet) {
					$str="<tr><td>$pdet[0]</td>";
					$str=$str."<td>$pdet[1]</td>";
					$str=$str."<td>$pdet[3]</td>";
					$str=$str."<td>$pdet[2]</td>";
					
					$str=$str."<td><a href='upditem.php?upid=$pdet[0]'>Edit</a></td>";
					$str=$str."<td><a href=".$url."&delete=$pdet[0]>delete</a></td></tr>";
					//$pos=strpos($url,"id");

					echo $str;
}

			}
			else
				echo "Please select the category";
		?>
		</table>
		
<hr color=magenta>
	<?php
if(isset($_REQUEST['upid']))
{	

	$edit=$_REQUEST['edit'];
	$cat=$_REQUEST['cat'];
	$pdets=getProductByCatgs($catg);
	echo "<br>Product ID:<input type=text name=id value=$pdet[0]><br><br>
	Name:<input type=text name=iname size=10 value=$pdet[1]><br><br>
	Details:<input type=text name=det value=$pdet[2]><br><br>
	Price:<input type=text name=iprice value=$pdet[3]><br><br>
	<input type=submit name=update value=update>";
	$id=$pdet[0];
	$str=getProductDetails($id);
}
if (isset($_REQUEST['update'])) 
{
	$id=$_REQUEST['id'];
	$iname=$_REQUEST['iname'];
	$det=$_REQUEST['det'];
	$iprice=$_REQUEST['iprice'];
	$cat=$_REQUEST['cat'];
	if(updateProduct($id,$iname,$det,$iprice,$cat))
	{
		$msg="<font color=green>Updated Successfully</font><br><br>";
		//clearform();
	}
	else
		$msg="<font color=green>Not Updated </font><br><br>";
}
echo $msg;
?>
<span><?php echo $msg3; ?></span>
</body>
</html>