<?php 
require('dbfunct.php');
session_start();
$productids=array();
$tprice=0;
//if(!isset($_SESSION['uid']))
	//header('location:error.php');


?>

<!DOCTYPE html>
<html>
<body>
	<a href="logout.php">logout</a>
	<form name=show method=get action="">
		Category:
		<select name=catg onchange="this.form.submit()">
			<option> choose</option>
			<?php
				$catgs=getProductCatg();
				$catg="";
				if(isset($_REQUEST['catg']))
					$catg=$_REQUEST['catg'];
				foreach ($catgs as  $value) 
				{
					if($catg==$value)
					echo "<option selected>".$value."</option>";
					else
					echo "<option>".$value."</option>";
			
				}



			?>

		</select><br><br>
		<!-- ************** FROM HERE THE CODE FOR CHECK BOX SELECTION STARTS ***************** !-->
		
		<table border=1 bgcolor="cyan" >	
		<?php
		$msg="";
		$catg="";
		$pdets=array();
			if(isset($_REQUEST['catg']))
				if($_REQUEST['catg']!='choose')
				{
					echo "<tr bgcolor=pink><td>ID</td><td>Name</td><td>Details</td><td>Price</td><td>select</td><td>NOI</td></tr>";
					$catg=$_REQUEST['catg'];
					$pdets=getProductByCatg($catg);
					$productids=array();
					$i=0;
					foreach ($pdets as $pdet)
					{
						$str="<tr><td>$pdet[0]</td>";
						$str=$str."<td>$pdet[1]</td>";
						$str=$str."<td>$pdet[2]</td>";
						$str=$str."<td>$pdet[3]</td>";
						$str=$str."<td><input type=checkbox name=ch$pdet[0]></td>";
						$str=$str."<td><select name=noi$pdet[0]><option>1</option><option>2</option><option>3</option><option>4</option></select></td></tr>";


						echo $str;
						$productids[$pdet[0]]=$pdet[3];
					}
						$_SESSION['pid']=$productids;

					
				}
				else
					$msg="Please select the category";


		?>


</table><br><br>
<input type="submit" value="Show Amount" name=tprice><br>
<table border=1>
<?php
echo "<tr><th>id</th><th>noqty</th><th>price</th></tr>";
if(isset($_REQUEST['tprice']))
{
	if(isset($_SESSION['pid']))
	{ 
		 $ids=$_SESSION['pid'];
	   $tprice=0;
	   foreach ($ids as $id => $price) 
	{
		$chname="ch".$id;
		if(isset($_REQUEST[$chname]))
		{
			$pqty="noi".$id;
			$noqty=$_REQUEST[$pqty];
			$tprice=$noqty*$price+$tprice;
			
			echo "<tr><td>$id</td><td>$noqty</td><td>$price</td></tr>";
		}
	}
   }
}
?>
</table>
<br><span><?php echo "Total Price is: ".$tprice; ?></span><br><br>


<input type="submit" value="Add To Cart" name=acart><br>
<!--<table border=1>!-->
<?php
//echo "<tr><th>id</th><th>noqty</th><th>price</th><th>userid</th></tr>";
$msg='';
if(isset($_REQUEST['acart']))
{
	if(isset($_SESSION['pid']))
	{
		$ids=$_SESSION['pid'];
		foreach ($ids as $id => $price) 
		{
			$chname="ch".$id;
			if(isset($_REQUEST[$chname]))
			{
				$pqty="noi".$id;
				$noqty=$_REQUEST[$pqty];
				$pprice=$price;	
				$uid=$_SESSION['uid'];
				if(add_to_cart($id,$noqty,$pprice,$uid)==true)
				{
					$msg="<font color=green>Products added to cart successfully</font>";
				}
				else
					$msg="<font color=red>Products are not added to cart successfully</font>";
			}
		}

	}
}
?>
<br><span><?php echo $msg; ?></span><br><br>
<!--</table>!-->

<input type="submit" value="Show Cart" name=scart><br>
<table border=1>
<?php

if(isset($_REQUEST['scart']))
{
	echo "<tr><th>id</th><th>noqty</th><th>price</th><th>userid</th><th>remove product</th></tr>";
	$uid=$_SESSION['uid'];
	$products=get_cart_by_uid($uid);
	$productids=array();
	$i=0;
	foreach($products as $product)
	{
		$str1="<tr><td>$product[0]</td>";
		$str1=$str1."<td>$product[1]</td>";
		$str1=$str1."<td>$product[2]</td>";
		$str1=$str1."<td>$product[3]</td>";
		$str1=$str1."<td><input type=checkbox name=ch$product[0]></td>";
		echo $str1;
		$productids[$product[0]]=$product[3];
	}
		$_SESSION['pid']=$productids;
}
?>
</table>

<input type="submit" value="Delete From Cart" name=dcart><br>
<!--<table border=1>!-->
<?php
//echo "<tr><th>id</th><th>noqty</th><th>price</th><th>userid</th></tr>";
$msg1='';
if(isset($_REQUEST['dcart']))
{
	if(isset($_SESSION['pid']))
	{
		$ids=$_SESSION['pid'];
		foreach ($ids as $idd => $price) 
		{
			$chname="ch".$idd;
			if(isset($_REQUEST[$chname]))
			{
				$uid=$_SESSION['uid'];
				if(delete_from_cart($idd)==true)
				{
					$msg1="<font color=green>Products deleted from cart successfully</font>";
				}
				else
					$msg1="<font color=red>Products are not deleted from cart successfully</font>";
			}
		}

	}
}
?>
<br><span><?php echo $msg1; ?></span><br><br>

</form>
</body>
</html>