<?php
//functions used to injecting data
//include()-if resource r nt avlaible in page it will continue, 
//include_once()-when calling include(),contents multiple times.
// require()-if resrc r nt available it will nt continue, 
//require_once()-no need to define multiple times.define once call mlyiple times.
include('header.php');
require('basicfunction.php');

echo "<hr color=red>";
echo "Welcome to home page<br><br>";
$msg='';
if (isset($_REQUEST['submit'])) {
	# code...
	$prin=$_REQUEST['principal'];
	$year=$_REQUEST['years'];
	$intrest=$_REQUEST['intrestrate'];
	$intamt=calc_intrest_amt($prin,$year,$intrest);
	$msg="interest amount is: ".$intamt;
}

?>
<form name="simple" method="get" action="">
	Enter principal:<input type="text" name="principal"  value="<?php if(isset($_GET['principal'])) echo $_GET['principal'] ?> " /><br><br>
	Enter years:<input type="text" name="years" value="<?php if(isset($_GET['years'])) echo $_GET['years'] ?> " /> <br><br>
	Enter intrest rate:<input type="text" name="intrestrate" value="<?php if(isset($_GET['intrestrate'])) echo $_GET['intrestrate'] ?> " /> <br><br>
	<input type="submit" name="submit" value="submit" />
	<input type="reset"  value=reset /><br><br>

<?php
	echo "<font color=green>".$msg."</font>";
?>
</form>
<?php
include('footer.php');

?>