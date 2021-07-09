<?php
require('dbfun.php');
session_start();
$cabids=array();
if(!isset($_SESSION['id']))
    header('location:error.php');
if(isset($_REQUEST['delid']))
{
	$id=$_REQUEST['delid'];
	deleteRoute($id);
}



?>
<html>
<head>
	<title>View Route Details</title>
<style type="text/css">
  body
  {
    background-image:url(c4.jpg);
    background-size:cover;
  }
  .aa
  {
    width:450px;
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
  .aa select[name="cat"]
  {
    width:120px;
    height:25px;
    border:0;
    border-radius:5px;
    background-color:white;
  }
  .aa select[name="src"]
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
		Source:
		<select name="src" onchange="this.form.submit()">
			<option> Choose</option>
			
			<?php 
			$src=getRouteSource();
			$srce="";
			if(isset($_REQUEST['src']))
				$srce=$_REQUEST['src'];
			foreach($src as $value)
			{
				if($srce==$value)
			
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
		if(isset($_REQUEST['src']))
			if($_REQUEST['src']!='Choose')
			{
					echo "<table border=1 bordercolor=black bgcolor=black>
				<tr bgcolor=black>
				<td><font color=yellow>Route ID</font></td>
        <td><font color=yellow>Destination</font></td>
        <td><font color=yellow>Distance</font></td>
        <td><font color=yellow>Route Details</font></td></tr>";
					$srce=$_REQUEST['src'];
					$rdets=getRouteBySource($srce);
					$rids=array();
					$i=0;
					$uri=$_SERVER['REQUEST_URI'];
					foreach ($rdets as $rdet) {
						echo "<br><tr>
							<td><font color=white>$rdet[0]</font></td>
							<td><font color=white>$rdet[1]</font></td>
							<td><font color=white>$rdet[2]</font></td>
							<td><font color=white>$rdet[3]</font></td>
               
							 <td><font color=red><a href=$uri"."&delid=".$rdet[0]." ><font color=red>Delete</font></a></font></td>
							 <td><font color=blue><a href='updateroute.php?edit=$rdet[0]'><font color=green'>Edit</font></a></font></td>
							</tr>";	
							$id=$rdet[0];	

				}
			}
			else
				echo "Please select the Source";
		?>
		</table>
	</form>
	<?php
	echo "$msg";
	?>
</div>
</body>
</html>