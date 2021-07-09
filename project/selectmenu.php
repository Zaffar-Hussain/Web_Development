<?php
require('dbfunctions.php');
session_start();
$foodids=array();
$foodprice="";
$uri="";
?>

<?php
if(isset($_REQUEST['dmenuid']))
{
	$id=$_REQUEST['dmenuid'];
		if(DeleteDetails($id))
		{
			$msg="deleted successfully";
					}
		else
			$msg="not deleted";
	
}
?>

<?php

if(isset($_SESSION['food_id']))
	header ("location:error.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href=logout.php>logout</a>
<form name="show" method="get" action="">

	Menu category:
	<select name=categry onchange="this.form.submit()">
		<option>choose</option>


		<?php

			$catgs=getMenucategory();
			$categry="";
			if(isset($_REQUEST['categry']))

				{
					$categry=$_REQUEST['categry'];
					

				}
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
		$fooddets=array();
			if(isset($_REQUEST['categry']))
				if($_REQUEST['categry']!='choose')
				{
					
					echo "<table border=1 bgcolor=cyan><tr bgcolor=pink>
  				<td>food_id</td>
  				<td>food_name</td>
  				<td>food_price</td>
  				<td>Modify</td>
  				<td>Remove</td>
  				
  				</tr>";


					$catgs=$_REQUEST['categry'];
					$fooddets=getMenuBycategory($catgs);
					$foodids=array("","","","");
					$i=0;
					$str="";
					
					foreach ($fooddets as $fooddet) 
					{
						//$filesrc="images/$pdet[0]".".jpg";
						//$str="<tr><td><img height=100 width=100 src=$filesrc></td>";
						$str=$str."<tr><td>$fooddet[0]</td>";
						$str=$str."<td>$fooddet[1]</td>";
						$str=$str."<td>$fooddet[2]</td>";
//str=$str."<td>$roomdet[3]</td>";
						
						//$str=$str."<td><input type=checkbox name=ch$fooddet[0]></td>";
						$str=$str."<td><a href='updmenu.php?upid=$fooddet[0]'>Edit</a>/td>";
						$uri=$_SERVER['REQUEST_URI'];
						$pos=strpos($uri,"dmenuid");
						//die($pos);
						//die(substr($uri,0,$pos-1));
                        if(strpos($uri,"dmenuid")>0)
                        	$uri=substr($uri,0,$pos-1);
						$str=$str."<td><a href=".$uri."&dmenuid=".$fooddet[0].">Delete</a></td></tr>";
						$id=$fooddet[0];
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