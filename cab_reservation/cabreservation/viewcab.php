<?php
require('dbfun.php');
session_start();
$str="";
$cabids=array();
$msg="";
if(!isset($_SESSION['id']))
    header('location:error.php');
if(isset($_REQUEST['delid']))
{
	$id=$_REQUEST['delid'];
	deleteCab($id);
}

?>
<html>
<head>
	<title>View Cab Information</title>
<style type="text/css">
  body
  {
    background-image:url(c4.jpg);
    background-size:cover;
  }
  .aa
  {
    width:900px;
    height:550px;
    background-color:rgba(0,0,0,0.5);
    margin:0 auto;
    margin-top:50px;
    padding-top:30px;
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
  .aa select[name="cat"]
  {
    width:120px;
    height:25px;
    border:0;
    border-radius:5px;
    background-color:white;
  }
  .aa select[name="type"]
  {
    width:120px;
    height:25px;
    border:0;
    border-radius:5px;
    background-color:white;
  }
  .aa select[name="status"]
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
	<form name="show" method="get" action="">
		Category:
		<select name="cat" onchange="this.form.submit()">
			<option> Choose</option>
			
			<?php 
			$category=getCabCatg();
			$catg="";
			if(isset($_REQUEST['cat']))
				$catg=$_REQUEST['cat'];
			foreach($category as $value)
			{
				if($catg==$value)
			
					echo "<option selected >".$value."</option>";
				else
					echo "<option>".$value."</option>";
			}
    ?>
		</select>
    <tr><td><a href="adminhome.php"><input type="button" value="back" name="back"></a></td></tr>
		
<?php


		$msg="";
		
		$catg="";
		$pdets = array();
		if(isset($_REQUEST['cat']))
			if($_REQUEST['cat']!='Choose')
			{
					echo "<br><br><table border=1 bgcolor=black>
				<tr bgcolor=white>
				<td><font color=green>Cab ID</font></td>
        <td><font color=green>Cab Name</font></td>
        <td><font color=green>Driver Name</font></td>
        <td><font color=green>Reg.Number</font></td>
        <td><font color=green>Phone</font></td>
        <td><font color=green>Status</font></td>
        <td><font color=green>Seats</font></td>
        <td><font color=green>type</font></td>
        <td><font color=green>Rate/km</font></td>
        <td><font color=green>Advance</font></td>
        <td><font color=green>Allowance</font></td></tr>";
					$catg=$_REQUEST['cat'];
					$cdets=getCabByCatg($catg);;
					$cabids=array();
					$i=0;
					$uri=$_SERVER['REQUEST_URI'];
					//$pos=strpos($uri,"delid");
					//$uri=substr($uri, 0,$pos);
					//die($uri);
					foreach ($cdets as $cdet) {
						echo "<tr bgcolor=black>
							<td><font color=white>$cdet[0]</font></td>
							<td><font color=white>$cdet[1]</font></td>
							<td><font color=white>$cdet[2]</font></td>
							 <td><font color=white>$cdet[3]</font></td>
							 <td><font color=white>$cdet[4]</font></td>
							 <td><font color=white>$cdet[5]</font></td>
							 <td><font color=white>$cdet[6]</font></td>
							 <td><font color=white>$cdet[7]</font></td>
							 <td><font color=white>$cdet[8]</font></td>
							 <td><font color=white>$cdet[9]</font></td>
							 <td><font color=white>$cdet[10]</font></td>
							 <td><a href=$uri"."&delid=".$cdet[0]." ><font color=red>Delete</font></a></td>
							 <td><a href='updatecab.php?edit=$cdet[0]'><font color=green>Edit</font></a></td>
							</tr>";	
							$id=$cdet[0];	

				}
			}
			else
				echo "Please select the category";
		?>
		</table>

		
	</form>
	<?php
	echo "$msg";
	?>
</div>
</body>
</html>