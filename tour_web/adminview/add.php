<?php

include 'header.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>CarHub >> ADD CAR</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<link rel="stylesheet" href="css/style.css">
  	<style type="text/css">
  		body {
  			margin: 0 auto;
  			background-image: url('images/car3.jpg');
  			background-size: cover;
  			background-repeat: no-repeat;
		}
  		.main-container {
  			width:60%;
    		height:360px;
    		background-color:rgba(0,0,0,0.7);
    		margin:0 auto;
    		margin-top:150px;
    		margin-bottom:240px;
    		margin-left:20%;
    		margin-right:20%;
    		padding-top:30px;
    		padding-bottom:40px;
    		padding-left: 60px;
    		padding-right: 60px;
    		border-radius:15px;
    		color:green;
    		font-weight:bolder;
			
  		}
  	</style>
</head>
<body>
	<div class="main-container">
		<center>
			<form name="form" action="" method="get">
				<h1>ADD NEW CAR</h1>
				<table class='table table-hover table-responsive table-bordered'>
					<tr>
						<td>CAR ID:</td>
						<td><input type="text" name="car_id" value="<?php echo $car_id; ?>" readonly></td>
					</tr>
					<tr>
						<td>CAR NAME:</td>
						<td><input type="text" name="car_name" value="" ></td>
					<tr>
						<td>CAR IMAGE:</td>
						<td><input type="text" name="car_image" value="" ></td>
					<tr>
						<td></td>
						<td><a href="admin.php?op=disp"><input type="button" name="back" value="BACK"></a>
						<input type="submit" name="submit" value="ADD CAR"></td>
					</tr>
				</table>
			</form>
		</center>
	</div>
</body>
</html>
<?php
include 'footer.php';
?>