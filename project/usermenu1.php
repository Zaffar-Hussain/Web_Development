<?php
require_once('dbfunctions.php');
session_start();
//$moreid="";
$foodids=array();
$tfoodprice=0;
$tfoodprice1=0;
$tfoodprice2=0;
$tfoodprice3=0;
$str="";
$rid="";
$i=0;
$j=0;
$k=0;
/*if(!isset($_SESSION['id']))
header('location:error.php');
if(isset($_REQUEST['moreid']))
{
	$moreid=$_REQUEST['moreid'];
	$str=getpdetail($moreid);

}*/

?>
<html>
<body>
	<form name="show" method="get" action="">	
Room id:<input type="text" name="rid" value="<?php if(isset($_REQUEST['rid'])) echo $_REQUEST['rid'];
else echo ""; ?>">

category:<select name="category" onchange="this.form.submit()">
<option>choose</option>	
<?php
$category=getProductCatg();
$category1="";
if(isset($_REQUEST['category']))
	$category1=$_REQUEST['category'];
foreach ($category as $value) 
{
	if($category1==$value)
		echo "<option selected>".$value."</option>";
		else
			echo "<option>".$value."</option>";

	

		

}
?></select>
category:<select name="category1" onchange="this.form.submit()">
<option>choose</option>	
<?php
$category=getProductCatg();
$category1="";
if(isset($_REQUEST['category1']))
	$category1=$_REQUEST['category1'];
foreach ($category as $value) 
{
	if($category1==$value)
		echo "<option selected>".$value."</option>";
		else
			echo "<option>".$value."</option>";


}?></select>

category:<select name="category2" onchange="this.form.submit()">
<option>choose</option>	
<?php
$category=getProductCatg();
$category1="";
if(isset($_REQUEST['category2']))
	$category1=$_REQUEST['category2'];
foreach ($category as $value) 
{
	if($category1==$value)
		echo "<option selected>".$value."</option>";
		else
			echo "<option>".$value."</option>";		

}
?>
</select><br>


<?php

		$msg="";
		
		$category="";
		$food_names = array();
		if(isset($_REQUEST['category']))
			if($_REQUEST['category']!='Choose')
			{
				echo "<table border=1 bgcolor=cyan>
			<tr bgcolor=pink>
				
				<td>food id</td>
				<td> food name</td>
				<td>Select</td>
				<td>No of items</td>
				<td>Select</td>
				
			</tr>";
				$category=$_REQUEST['category'];
				$food_names=getProductsByCatg($category);
				$foodids=array();
				
				$i=0;
					foreach ($food_names as $food_name ) {
						
							echo "<tr>
							<td>$food_name[0]</td>
							<td>$food_name[1]</td>
							<td>$food_name[2]</td>
							<td><select name=noi$food_name[0]>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
							</select></td>
							<td><input type=checkbox name=ch$food_name[0]></td>
							</tr>";
							
							
							$foodids[$food_name[0]]=$food_name[2];
							$_SESSION['fids']=$foodids;
							if(isset($_REQUEST['food_id']))
							{
								$msg=$food_name[1];
							}
				}}
			
			else
				echo "Please select the category";
		
		?>
		<?php 
		$input="";
		if(isset($_REQUEST['tfoodprice']))
		{ 
		$url=$_SERVER['REQUEST_URI'];
		//die('uri:'.$url);

		$fids=$_SESSION['fids'];

		
		

		foreach ($fids as $food_id => $food_name) 
		{	
			$chname1="ch".$food_id;

			if(isset($_REQUEST[$chname1]))
			{	
				
					$pqty="noi".$food_id;
					$noqty=$_REQUEST[$pqty];
					
					$tfoodprice1=$noqty*$food_name+$tfoodprice1;
					//echo $tfoodprice1;
					
					$array1[$i++]=array($food_id,$noqty,$tfoodprice1);
					if(isset($_REQUEST['rid']))
				$rid=$_REQUEST['rid'];
			

			$nor=addtprice($tfoodprice,$food_id,$rid);



				}	
			}

		}?>
		<br><br>
		<?php

		$msg="";
		
		$category="";
		$food_names = array();
		if(isset($_REQUEST['category1']))
			if($_REQUEST['category1']!='Choose')
			{
				echo "<table border=1 bgcolor=cyan>
			<tr bgcolor=pink>
				
				<td>food id</td>
				<td> food name</td>
				<td>Select</td>
				<td>No of items</td>
				<td>Select</td>
				
			</tr>";
				$category=$_REQUEST['category1'];
				$food_names=getProductsByCatg($category);
				$foodids=array();
				
				$i=0;
					foreach ($food_names as $food_name ) {
						
							echo "<tr>
							<td>$food_name[0]</td>
							<td>$food_name[1]</td>
							<td>$food_name[2]</td>
							<td><select name=noi$food_name[0]>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
							</select></td>
							<td><input type=checkbox name=ch$food_name[0]></td>
							</tr>";
							$foodids[$food_name[0]]=$food_name[2];
							$_SESSION['fids']=$foodids;
							if(isset($_REQUEST['food_id']))
							{
								$msg=$food_name[1];
							}
				}}
			
			else
				echo "Please select the category";
		
		?>
		<?php 
		$input="";
		if(isset($_REQUEST['tfoodprice']))
		{ 
		$url=$_SERVER['REQUEST_URI'];
		//die('uri:'.$url);

		$fids=$_SESSION['fids'];
		$tfoodprice=0;
		
		

		foreach ($fids as $food_id => $food_name) 
		{	
			$chname2="ch".$food_id;

			if(isset($_REQUEST[$chname2]))
			{	
				
					$pqty="noi".$food_id;
					$noqty=$_REQUEST[$pqty];
					
					$tfoodprice2=$noqty*$food_name+$tfoodprice2;
					echo "$tfoodprice2";
					$array2[$j++]=array($food_id,$noqty,$tfoodprice2);
					if(isset($_REQUEST['rid']))
				$rid=$_REQUEST['rid'];
			

			$nor=addtprice($tfoodprice,$food_id,$rid);



				}	
			}

		}
		?>
		<br><br>
		<?php

		$msg="";
		
		$category="";
		$food_names = array();
		if(isset($_REQUEST['category2']))
			if($_REQUEST['category2']!='Choose')
			{
				echo "<table border=1 bgcolor=cyan>
			<tr bgcolor=pink>
				
				<td>food id</td>
				<td> food name</td>
				<td>Select</td>
				<td>No of items</td>
				<td>Select</td>
				
			</tr>";
				$category=$_REQUEST['category2'];
				$food_names=getProductsByCatg($category);
				$foodids=array();
				
				$i=0;
					foreach ($food_names as $food_name ) {
						
							echo "<tr>
							<td>$food_name[0]</td>
							<td>$food_name[1]</td>
							<td>$food_name[2]</td>
							<td><select name=noi$food_name[0]>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
							</select></td>
							<td><input type=checkbox name=ch$food_name[0]></td>
							</tr>";
							$foodids[$food_name[0]]=$food_name[2];
							$_SESSION['fids']=$foodids;
							if(isset($_REQUEST['food_id']))
							{
								$msg=$food_name[1];
							}
				}}
			
			else
				echo "Please select the category";
		
		?>
		<br><br>



		</table>
		<span><?php  
			echo $str; ?></span>
		<br><br>
		<input type="submit"  name="tfoodprice" value="Show Amount">
		
		<table border="1">
		<?php 
		$input="";
		if(isset($_REQUEST['tfoodprice']))
		{ 
		$url=$_SERVER['REQUEST_URI'];
		//die('uri:'.$url);

		$fids=$_SESSION['fids'];
		
		
		

		foreach ($fids as $food_id => $food_name) 
		{	
			$chname="ch".$food_id;

			if(isset($_REQUEST[$chname]))
			{	
				
					$pqty="noi".$food_id;
					$noqty=$_REQUEST[$pqty];
					
					$tfoodprice3=$noqty*$food_name+$tfoodprice3;
					
					$array3[$k++]=array($food_id,$noqty,$tfoodprice3);
					if(isset($_REQUEST['rid']))
				$rid=$_REQUEST['rid'];
			

			$nor=addtprice($tfoodprice,$food_id,$rid);



				}	
			}

		}echo "<br><tr>
					<td>id</td>
					<td>noi</td>
					<td>price</td>

				</tr>";

		foreach ($fids as $food_id => $food_name) 
		{	
			$chname="ch".$food_id;

			if(isset($_REQUEST[$chname]))
			{	
				
					$pqty="noi".$food_id;
					$noqty=$_REQUEST[$pqty];
					
				
					
					
					foreach($array1 as $a)
					{
						
						echo "<tr><td>$a[0]</td>
						<td>$a[1]</td>
						<td>$a[2]</td></tr>";
					}
					foreach ($array2 as $b) {
						echo "<tr><td>$b[0]</td>
						<td>$b[1]</td>
						<td>$b[2]</td></tr>";
					}
					foreach($array3 as $c)
					{
						echo "<tr><td>$c[0]</td>
						<td>$c[1]</td>
						<td>$c[2]</td></tr>";
					}
					echo "</table>";
					if(isset($_REQUEST['rid']))
				$rid=$_REQUEST['rid'];
			$tfoodprice=$tfoodprice1+$tfoodprice2+$tfoodprice3;

			$nor=addtprice($tfoodprice,$food_id,$rid);
}
}

		
		?>

	
		</table><br>
<?php 
?>
		<span><?php echo $tfoodprice ?></span><br>
		
		
	</form>
	<?php
	echo "$msg";
	?>

	
</body>
</html>