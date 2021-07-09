<?php
if (isset($_REQUEST['add'])) 
	{
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
  
    move_uploaded_file($file_tmp,$target_dir);
}
}
    ?>
    <!DOCTYPE html>
    <html>
    
    <body>
    <form action="" method="post" enctype="multipart/form-data">
<input type="file" name="fileToUpload" id="fileToUpload">
<button name="add" type="submit">ADD</button>
    </body>
    </html>