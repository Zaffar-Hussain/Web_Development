<?php
require('dbfunctions.php');
session_start();
$rids=array();
$rprice="";

$uri="";
?>
<?php
if(isset($_REQUEST['droomid']))
{
	$id=$_REQUEST['droomid'];
		if(DeleteRoomDetails($id))
		{
			$msg="deleted successfully";
					}
		else
			$msg="not deleted";
	
}
?>
<?php
if(isset($_SESSION['rid']))
	header ("location:error.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	td {
    height: 42px;
    width: 78px;
}
</style>
<body>
	<a href=logout.php>logout</a>
<form name="show" method="get" action="">

	room category:
	<select name=categry onchange="this.form.submit()">
		<option>choose</option>


		<?php

			$catgs=getRoomcategory();
			$categry="";
			if(isset($_REQUEST['categry']))
				$categry=$_REQUEST['categry'];
			foreach ($catgs as $value)
			{
				if($categry==$value)
					echo "<option selected>".$value."</option>";
				else	
					echo "<option>".$value."</option>";
			}
		?>
		</select><br>
  		
  				
		<?php
		$msg="";
		$catgs="";
		$roomdets=array();
			if(isset($_REQUEST['categry']))
				if($_REQUEST['categry']!='choose')
				{
					
					echo "<table border=1 bgcolor=cyan><tr bgcolor=pink>
  				<td>rid</td>
  				<td>rname</td>
  				<td>rtype</td>
  				<td>rrate</td>
  				<td>rstatus</td>
  				<td>rdet</td>
  				<td>rpics</td>
  				
  				</tr>";


					$catgs=$_REQUEST['categry'];
					$roomdets=getRoomBycategory($catgs);
					$roomids=array("","","","","","","","","");
					$i=0;
					$str="";
					foreach ($roomdets as $roomdet) 
					{
						//$filesrc="images/$pdet[0]".".jpg";
						//$str="<tr><td><img height=100 width=100 src=$filesrc></td>";
						$str=$str."<tr><td>$roomdet[0]</td>";
						$str=$str."<td>$roomdet[1]</td>";
						$str=$str."<td>$roomdet[2]</td>";
//str=$str."<td>$roomdet[3]</td>";
						$str=$str."<td>$roomdet[4]</td>";
						$str=$str."<td>$roomdet[5]</td>";
						$str=$str."<td>$roomdet[6]</td>";
						$str=$str."<td><img src=image/".$roomdet[0].".jpg height=100 width=100</td>";
						//$str=$str."<td>$roomdet[7]</td>";
						//$str=$str."<td><input type=checkbox name=ch$fooddet[0]></td>";
						
						$str=$str."<td><a href='updroom.php?upid=$roomdet[0]'>Edit</a></td>";
						$uri=$_SERVER['REQUEST_URI'];
						$pos=strpos($uri,"droomid");
						//die($pos);
						//die(substr($uri,0,$pos-1));
                        if(strpos($uri,"droomid")>0)
                        	$uri=substr($uri,0,$pos-1);
						$str=$str."<td><a href=".$uri."&droomid=".$roomdet[0].">Delete</a></td></tr>";

						$id=$roomdet[0];
					/*	$foodids[$fooddet[0]]=$fooddet[3];
						$_SESSION['foodids']=$foodids;
						if(isset($_REQUEST['food_id']))
							$msg=$fooddet[2];*/
					}

						$str = $str."</table>";
						echo $str;    
				}
				else
					$msg="please select the category";
  					


		?>
</table></br>
<input type=submit value="Add" name=ADD>

	


</form>	
<?php
echo $msg;
?>
</body>
</html> 