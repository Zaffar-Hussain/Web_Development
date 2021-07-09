<?php 

require('dbfun1.php');
session_start();
$productids=array();








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
						$str=$str."<td><input type=checkbox name=ch$pdet[0].></td>";
						$str=$str."<td><select name=noi$pdet[0]><option>1</option><option>2</option><option>3</option><option>4</option></select></td></tr>";


						echo $str;
						$productids[$i++]=$pdet[0];
						$_SESSION['pids']=$productids;

					}
				}
				else
					$msg="Please select the category";


		?>


</table><br><br>
<input type="submit" value="Show Amount" name=tprice><br>
<table border=1>
<?php
if(isset($_REQUEST['tprice']))
{
	if(isset($_SESSION['ids']))
	{ 
		 $ids=$_SESSION['ids'];
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
<span><?php echo $tprice; ?></span>


</table>
</form>
</body>
</html>