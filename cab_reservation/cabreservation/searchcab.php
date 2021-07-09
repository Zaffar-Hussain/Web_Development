<?php
  require('dbfunuser.php');
   session_start();
 $sources=array();
 $desti=array();
$source1="";
$dest1="";
$via1="";
  $msg="";
  if(!isset($_SESSION['id']))
    header('location:error.php');
  //$sel=$ds=
?>


<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
  body
  {
    background-image:url(c4.jpg);
    background-size:cover;
  }
  .aa
  {
    width:400px;
    height:400px;
    background-color:rgba(0,0,0,0.5);
    margin:0 auto;
    margin-top:80px;
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
    width:200px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:white;
  }
  .aa input[type="date"]
  {
    width:200px;
    height:30px;
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
  .aa select[name="src"]
  {
    width:200px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:white;
  }
  .aa select[name="dest"]
  {
    width:200px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:white;
  }
  .aa select[name="via"]
  {
    width:200px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:white;
  }


  
  </style>
</head>
<body>

  <div class="aa">
	<font color=white><h2>SEARCH CAB</h2></font>
		<form name=show method=get action="">
      <table>
      <tr><td><font color=white>FROM:</font></td>
	       <td><select name=src  onchange="this.form.submit()">
		          <option >select</option>
	           <?php
			           $srcs= getSources();
			             $source="";
              			if(isset($_REQUEST['src']))
              				$source=$_REQUEST['src'];
              			foreach ($srcs as  $src) 
              			{
              				if($source==$src)
              					{
              						echo "<option selected>".$src."</option>";
              						$source1=$src;
              					}
              				else
              					echo "<option>".$src."</option>";
              			} 
        	     ?>
        		</select></td</tr>



	<tr><td><font color=white>TO:</font></td>
  	<td><select name=dest  onchange="this.form.submit()">
    		<option >select</option>
    	   <?php
    			$dests= getdests($source1);

    			$dest="";
    			if(isset($_REQUEST['dest']))
    			  $dest=$_REQUEST['dest'];
    			foreach ($dests as  $des) 
    			{
    				if($dest==$des)
    				{
    					echo "<option selected>".$des."</option>";
    					$dest1=$des;
    				}
    				else
    					echo "<option>".$des."</option>";
    			} 
    			 ?>
  </select></td></tr>



	<tr><td><font color=white>VIA:</font></td>
	   <td><select name=via  onchange="this.form.submit()">
		<option >select</option>
	   <?php
			$vias= getvia($source1,$dest1);

			$via="";
			if(isset($_REQUEST['via']))
			  $via=$_REQUEST['via'];
			foreach ($vias as  $rvia) 
			{
				if($via==$rvia)
				{
					echo "<option selected>".$rvia."</option>";
					$via1=$rvia;
				}
				else
					echo "<option>".$rvia."</option>";
			} 
			 ?>

</select></td></tr>
		<?php
			$km=getDistance($source1,$dest1,$via1);
		?>
			<tr><td><font color=white>Distance in km:</font></td>
        <td><input type="text" name="km"  size="20" placeholder=" " onchange="this.form.submit()" value="<?php echo $km ; ?>" readonly ></td></tr>

			<tr><td><font color=white>DATE:</font></td>
        <td><input type="date" name="jdate"  size="20" placeholder=" "  onchange=""></td></tr>
      </table><br>
      <tr><td><a href='cuserhome.php'><input type='button' name='back' value=Back></a></td></tr>

			 <?php 
			 $jdate="";
			 	if(isset($_REQUEST['jdate'])) 
			 	{
			 	$jdate=$_REQUEST['jdate'];
			 	$_SESSION['jdate']=$jdate;
			 	//die('date:'.$_SESSION['jdate']);
			   }
			 ?>
			 <?php
             $str="cablist.php?source=$source1&dest=$dest1&via=".urlencode($via1)."&jdate=".urlencode($jdate);
			 echo "<tr><td><a href=$str><input type=button value=Search name=search</a></td>
              <td><input type='reset' name='reset'></td></tr>";
			 ?>
			 </form>
			 <?php 

			 		$rid=getRouteId($source1,$dest1,$via1);
			 		$_SESSION['rid']=$rid;


			 ?>

</div>
</body>
</html>