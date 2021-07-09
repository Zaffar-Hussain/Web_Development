<?php
	require('dbfunctions.php');
	$msg="";
	
	$edit="";

if(isset($_REQUEST['upid']))
	{
	  $edit=$_REQUEST['upid'];
	  $roomsdet=getRoomDetail($edit);
	  
	}
	
	if(isset($_REQUEST['show']))
	{
		$rid=$_REQUEST['rid'];

		//if($food_id!="select")
			
		
	
		//else
			//$msg="please select food_id";
	}
	if(isset($_REQUEST['update']))
	{
		$rid=$_REQUEST['rid'];
		$rname=$_REQUEST['rname'];
		$rtype=$_REQUEST['rtype'];
		$rcategory=$_REQUEST['rcategory'];
		$rrate=$_REQUEST['rrate'];
		$rstatus=$_REQUEST['rstatus'];
		$rdet=$_REQUEST['rdet'];
		$rpics=$_REQUEST['rpics'];

		if(updateRoomInfo($rid,$rname,$rtype,$rcategory,$rrate,$rstatus,$rdet,$rpics))
		{
			$msg="<font color=green>Updated successfully</font>";
			//clearform();
		}
		else
			$msg="<font color=red> Not Updated</font>";
		$roomsdet=array("","","","","","","","");
	}

?>
<html>
<body>
	<form name="upd" method="get">
		Room ID: <input type="text" name="rid"   value='<?php echo $edit; ?>'>
		
	
	Room Name:<input type="text" name="rname"   value='<?php echo $roomsdet[1]; ?>'><br><br>
	Room Type:<input type="text" name="rtype"  value='<?php echo $roomsdet[2]; ?>'><br><br>
Room Category:<input type="text"  name="rcategory"  value='<?php echo $roomsdet[3]; ?>'><br><br>
	Room Rate:<input type="number" name="rrate"   value='<?php echo $roomsdet[4]; ?>'><br><br>
	
	Room status:<input type="text"  name="rstatus"  value='<?php echo $roomsdet[5]; ?>'><br><br>
	Room details:<input type="text"  name="rdet"  value='<?php echo $roomsdet[6]; ?>'><br><br>
	Room's Picture:<input type="text"  name="rpics"  value='<?php echo $roomsdet[7]; ?>'><br><br>
	 
<input type="submit" name="update" value="Update">
	
	<?php 
	echo $msg ; 
	?>
		</form>
</body>
</html>