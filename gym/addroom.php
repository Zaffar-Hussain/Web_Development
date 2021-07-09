<?php  
	require ('dbfunc.php');
	include('adminpage.php');

	$msg='';
	if (isset($_REQUEST['add'])) 
	{
		//$bid=$_REQUEST['bid'];
        $rid=$_REQUEST['rid'];
        $hid=$_REQUEST['hid'];
        $rno=$_REQUEST['rno'];
        $rtype=$_REQUEST['rtype'];
        $btype=$_REQUEST['btype'];
        $rprice=$_REQUEST['rprice'];
        $rdetails=$_REQUEST['rdetails'];      
	
		
		if (addroom($rid,$hid,$rno,$rtype,$btype,$rprice,$rdetails)) 
	
			$msg="<font color=black>Added</font>";
		
		else 
			$msg="<font color=black>Not Added</font>";

		$filename=$_FILES["fileToUpload"]["name"];
$file_tmp=$_FILES["fileToUpload"]["tmp_name"];
$path_parts=pathinfo($_FILES["fileToUpload"]["name"]);
//die($path_parts);
$extension=$path_parts['extension'];
if(!($extension=="jpg" || $extension=="png" || $extension=="bmp"))
 die("file format is not correct");
if ($filename!="")
 {
    $target_dir = "images/";
    $newfilename=$rid.".jpg";
    move_uploaded_file($file_tmp,$target_dir.$newfilename);
   // die("Uploaded Successfully..!");

 //}
//else
   // die("error..!");
} 
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>addroom</title>
</head>
<body>
	<center>
	 <h2>Adding Room</h2>
	<form action="" method="post" enctype="multipart/form-data">
			    <table>
			    	<tr>
			    		<td>
				<b>Room ID:</b>
			</td>
			<td>
				<input type="text" placeholder="Enter Roomid" name="rid" required><br><br>
			</td>
		</tr>
		<tr>
			<td>
				<b>PG ID:</b>
			</td>
			<td>
				<input type="text" placeholder="Enter Hotelid" name="hid" required><br><br>
			</td>
			</tr>
			<tr>
			<td>	
				<b>Room Number:</b>
			</td>
			<td>	
				<input type="number" placeholder="Enter Room number" name="rno" required><br><br>
			</td>
			</tr>
			<tr>
			<td>	
				<b>Room Type:</b>
			</td>
			<td>	
				<input type="text" placeholder="Enter room type " name=" rtype" required><br><br>
			</td>
			</tr>
			<tr>
			<td>	

				<b>Bed Type:</b>
			</td>
			<td>
				<input type="text" placeholder="Enter Bed Type " name="btype" required><br><br>
			</td>
			</tr>	
            <tr>
            	<td>
				<b>Room Rate:</b>
			</td>
			<td>
				<input type="number" placeholder="Enter Room Rate " name="rprice" required><br><br>
			</td>
		</tr>
		<tr>
			<td>
				<b>Room Details:</b>
			</td>
			<td>	
				<input type="text" placeholder="Enter Room Details " name="rdetails" required><br><br>
			</td>
			</tr>
			<tr>
				<td>
				<b>Upload image:</b>
			</td>
			<td>
			<input type="file" name="fileToUpload" id="fileToUpload"><br>
			</td>
		</tr>
			</table>	
				<br><button name="add" type="submit">ADD</button>
				<?php echo  $msg;?>
			</center>
		</form>
</body>
</html>