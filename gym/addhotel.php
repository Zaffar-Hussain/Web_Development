<?php  
	require ('dbfunc.php');
    include('adminpage.php');
	$msg='';

	if (isset($_REQUEST['add'])) 
	{
		//$bid=$_REQUEST['bid'];
        $hid=$_REQUEST['hid'];
        $hname=$_REQUEST['hname'];
        $loc=$_REQUEST['loc'];
        $city=$_REQUEST['city'];
        $state=$_REQUEST['state'];
        $phone=$_REQUEST['phone'];
        $type=$_REQUEST['type'];
        $hdetails=$_REQUEST['hdetails'];
        
	
		
		if (addhotel($hid,$hname,$loc,$city,$state,$phone,$type,$hdetails)) 
		{
			$msg="<font color=black>Added</font>";
		}
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
    $newfilename=$hid.".jpg";
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
	<title>ADD PG</title>
</head>
<body>
	<center>
	 <h2>Adding PG</h2>
	<form action="" method="post" enctype="multipart/form-data">
			
				<table>
				
					<tr>
						<td>
				<b>PG ID:</b>
			</td>
			<td>
				<input type="text" placeholder="Enter PG id" name="hid" required><br><br>
			</td>
		</tr>
		<tr>
			<td>
				<b>PG Name:</b>
			</td>
			<td>
				<input type="text" placeholder="Enter PG Name" name="hname" required><br><br>
			</td>
		</tr>
		<tr>
			<td>
				<b>Location:</b>
			</td>
			<td>
				<input type="text" placeholder="Enter Location" name=" loc" required><br><br>
			</td>
			</tr>
			<tr>
			<td>	
				<b>City:</b>
			</td>
			<td>
				<input type="text" placeholder="Enter City" name="city" required><br><br>
			</td>
			</tr>
			<tr>
			<td>	
				<b>State:</b>
			</td>
			<td>
				<input type="text" placeholder="Enter State" name="state" required><br><br>
		    </td>
		    </tr>
		    <tr>
		    <td>		
				<b>Phone Number:</b>
				</td>
				<td>
				<input type="text" placeholder="Enter phone number" name="phone" required><br><br></td>
			</tr>
			<tr>
				<td>
				<b>Type:</b>
			</td>
			<td>
				<input type="text" placeholder="Enter Type" name="type" required><br><br>
				</td>
			</tr>
			<tr>
				<td>
				<b>Hotel Details:</b>
			</td>
			<td>
				<input type="text" placeholder="Enter Hotel Details " name="hdetails" required><br><br>
			</td>
		</tr>
		</tr>
			<tr>
				<td>
				<b>Upload Image:</b>
			</td>
			<td>
			<input type="file" name="fileToUpload" id="fileToUpload"><br>
			</td>
		</tr>
	</table>
				
				<br><button name="add" type="submit">ADD</button>
				<?php echo  $msg;?>
		
		</form>
</center>

</body>
</html>