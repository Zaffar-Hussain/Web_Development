<?php
require('dbfunctions.php');
$msg="";
$pid=getNewMenuid();
if(isset($_REQUEST['submit']))
{
	$food_name=$_REQUEST['food_name'];
	$food_category=$_REQUEST['food_category'];
	$food_price=$_REQUEST['food_price'];
	if (addMenu($food_name,$food_category,$food_price))
		$msg="<font color=green>Added</font>";
	else
		$msg="<font color=red> not Added</font>";
}
?>
<html>
<body>
	<form  method="post" action="">
		New product id:<span id=span1 name=id>
			<?php
			
			echo $pid;


			?>
		</span><br>
		Food name:
		<input type=text size=10 name=food_name><br>
		<strong>Food category:</strong>
		<select name="food_category">
			<option>Select</option>
			<option>breakfast</option>
			<option>lunch</option>
			<option>Dinner</option>
		</select><br><br>
		
		Food price:
		<input type=number size=10 name=food_price><br>
		
		<input type=submit name=submit value="Add">
		<input type=reset value=Reset>
	</form>
	<?php
	echo $msg;
	?>

</body>
</html>