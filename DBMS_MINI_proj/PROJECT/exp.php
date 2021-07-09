<?php
$servername="localhost";
$username="root";
$password="";
$dbname="dbproj";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
	die('connection error:'.mysqli_connect_error);
}

$connectDb=mysqli_select_db($conn,'dbproj');

$result=mysqli_query($conn,'select firstname,lastname from emp_details');


while($row=mysqli_fetch_array($result))
{
	
?>
	firstname:&nbsp
	<input type="text" name="firstname" value="<?php echo $row['firstname']; ?>">
	<br>lastname:&nbsp
	<input type="text" name="lasttname" value="<?php echo $row['lastname']; ?>">
	<?php
}
          <label><b>SSN:</b></label><br>
	<textarea name="message" rows="10" cols="30" style="width:430px;height:20px">
		<?php echo $_SESSION['ssn']?>
		</textarea>