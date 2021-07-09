<?php
	require('dbfun.php');
	session_start();
	$msg="";
	$edit="";
  if(!isset($_SESSION['id']))
    header('location:error.php');
	if(isset($_REQUEST['edit']))
	{
		$edit=$_REQUEST['edit'];
		$routedet=getRouteDetails($edit);
	}
	/*if(isset($_REQUEST['show']))
	{
		$rid=$_REQUEST['rid'];
			$routedet=getRouteDetails($rid);
	}*/
	
	if(isset($_REQUEST['update']))
	{
		$id=$_REQUEST['rid'];
		$src=$_REQUEST['src'];
		$dest=$_REQUEST['dest'];
		$dist=$_REQUEST['dist'];
		$rdet=$_REQUEST['rdet'];
	
		if(updateRoute($id,$src,$dest,$dist,$rdet))
		{
			$msg="<font color=blue>Updated Successfully...</font>";
		}
		else
			$msg="<font color=blue>Not Updated</font>";
		$routedet=array("","","","","");
	}
?>

<html>
<head><title>Edit Route Information</title><style type="text/css">
  body
  {
    background-image:url(c4.jpg);
    background-size:cover;
  }
  .aa
  {
    width:400px;
    height:550px;
    background-color:rgba(0,0,0,0.5);
    margin:0 auto;
    margin-top:5px;
    padding-top:10px;
    padding-left: 60px;
    border-radius:15px;
    color:white;
    font-weight:bolder;
    box-shadow:inset 4px 4px rgba(0,0,0,20);
  }
  .aa input[type="submit"]
  {
    width:100px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:skyblue;
    font-weight:bolder;
  }.aa input[type="reset"]
  {
    width:100px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:skyblue;
    font-weight:bolder;
  }
  .aa input[type="text"]
  {
    width:120px;
    height:25px;
    border:0;
    border-radius:5px;
    background-color:white;
  }
  .aa input[type="button"]
  {
    width:100px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:skyblue;
    font-weight:bolder;

  }
  .aa input[type="number"]
  {
    width:120px;
    height:25px;
    border:0;
    border-radius:5px;
    background-color:white;
  }
  
  </style>
</head>
<body>

	<div class="aa">
<form name=upd method=get>
  <table>
	<tr><td><font color=white>Route ID:</font></td>
        <td><input type="text" size="10" name="rid" value='<?php echo $edit; ?>'>
	<?php
	$rid=$edit;		
	?>
				
		  <tr><td><font color=white>Source:</font></td>
        <td><input type="text" size="10" name="src" value="<?php echo $routedet[1]; ?>"></td></tr>
	    <tr><td><font color=white>Destination:</font></td>
        <td><input type="text" size="10" name="dest" value='<?php echo $routedet[2]; ?>'></td></tr>
			<tr><td><font color=white>Distance:</font></td>
        <td><input type="text" size="10" name="dist" value='<?php echo $routedet[3]; ?>'></td></tr>
			<tr><td><font color=white>Route Details:</font></td>
        <td><input type="text" size="20" name="rdet" value='<?php echo $routedet[4]; ?>'></td></tr>
	
  </table>		
	<tr><td><input type="submit" name="update" value="Update Route"></td></tr>
  <tr><td><a href="viewroute.php"><input type="button" value="back" name="back"></a></td></tr>

	<?php echo $msg; ?>


</form>
</div>
</body>
</html>