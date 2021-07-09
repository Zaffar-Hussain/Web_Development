<?php
require('dbfunctions.php');
$msg="";

$pid=getNewRoomid();

if(isset($_REQUEST['submit']))
{
	$filename=$_FILES['filetoupload']['name'];
	$file_temp=$_FILES['filetoupload']['tmp_name'];
	$path_parts=pathinfo($_FILES['filetoupload']['name']);
	//die($path_parts);
	$extension=$path_parts['extension'];
	if(!($extension=="jpg" || $extension=="png" || $extension=="bmp"))
		die("file format is not correct");
	if($filename!="")
	{
		//$target_dir="images/";
		$newfilename=$_REQUEST['id'].".jpg";
		move_uploaded_file($file_temp,"image/".$newfilename);
		
	}
	else
		die("error");
}


if(isset($_REQUEST['add']))
{
$pid=$_REQUEST['pid'];
	$rname=$_REQUEST['rname'];
	$rtype=$_REQUEST['rtype'];
	$rcategory=$_REQUEST['rcategory'];
	$rrate=$_REQUEST['rrate'];
	$rstatus=$_REQUEST['rstatus'];
	$rdet=$_REQUEST['rdet'];
	$rpics=$_REQUEST['rpics'];
	if (addRoom($rid,$rname,$rtype,$rcategory,$rrate,$rstatus,$rdet,$rpics))
	{
		header("location:selectroom.php");
	}
	else
		$msg="<font color=red> not Added</font>";
	
}
?>
<html>
<body>
	<form action="" method="post" enctype="multipart/form-data">
    Select images to upload:
    Image ID:<input type="text" name="id" size=10><br>
    <input type="file" name="filetoupload" id="filetoupload">
    <input type="submit" value="Upload Image" name="submit"><br>

	<strong> new room id:</strong>
	<span id=span1 name=id>
		<?php
		echo $pid;
		?>
		room name:
		<input type=text size=10 name=rname><br>
		<strong>Room Type:</strong>
		<select name="rtype">
			<option></option>
			<option>AC</option>
			<option>non-AC</option>
			
		</select><br><br>
		<strong>Room category:</strong>
		<select name="rcategory">
			<option></option>
			
			<strong><option>single</option></strong>
			<strong><option>double</option></strong>
			<strong><option>deluxe</option></strong>
			<strong><option> super deluxe</option></strong>
			<strong><option>king</option></strong>
			<strong><option>queen</option></strong>
		</select><br><br>
		
		<strong>Room Rate:</strong>
		<input type=text size=10 name=rrate><br>
		<strong>Room status:</strong>
		<select name="rstatus">
		   <option></option>
			<option>Not Available</option>
			<option>Available</option>
			
		</select><br><br>
		<strong>Room Detail:</strong>
		<input type=text size=10 name=rdet><br>
		<strong>Room Pics:</strong>
		<input type=text size=10 name=rpics><br>
		<input type="submit" value="add" name="add"><br>
	
	</form>
	<?php
	echo $msg;
	?>

</body>
</html>