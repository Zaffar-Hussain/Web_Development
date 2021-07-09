<?php
if(isset($_REQUEST['submit']))
{
	$filename=$_FILES['filetoupload']['name'];
	$file_tmp=$_FILES['filetoupload']['tmp_name'];
	$path_parts=pathinfo($_FILES['filetoupload']['name']);
	$extension=$path_parts['extension'];
	if (!($extension=="jpg" || $extension=="png" || $extension=="bmp")) {
		die("file format is not correct");
	}
	if ($filename!="") {
		$target_dir="image/";
		$newfilename=$_REQUEST['id'].".jpg";
		move_uploaded_file($file_tmp,$target_dir.$newfilename);
		die('upload success');
	}
	else
		die('error');
/*if($_FILES['filetoupload']['name'])!="")
{

	$target_dir="image.php";
	$file=$_FILES['filetoupload']['name'];
	$filename=$_REQUEST['id'];
	$ext="jpg";
	$path_filename_ext=$target_dir.$filename.",".$ext;
	if (file_exists($path_filename_ext)) 
	{
		echo "sorry file already exhist";
	}
}*/
}
?>
<html>
<head>
	<title>image uploading</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		Select Image to upload:<br>
		Image Id;
		<input type="text" name="id" size="10"><br>
		<input type="file" name="filetoupload" id="filetoupload">
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>