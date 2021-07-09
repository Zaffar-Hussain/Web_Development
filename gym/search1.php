<?php
require('dbfunc.php');
session_start();
$productIds=array();
if(isset($_REQUEST['but']))
 {

  header('location: hotels.php?hid='.$_REQUEST['but']);

 } 
 if(isset($_REQUEST['button']))
 {
  header('location: availrooms.php?hid='.$_REQUEST['button']);
 }

?>
<html>
<head>
    <style>
    body{
      background: url('images/00.jpg');
      background-size: cover;
    }
  table
  {
   border-collapse: collapse;
   width: 100%;
  }
  th,td{
    text-align: left;
    padding: 8px;
  }
  tr:nth-child(even)
  {
    background-color: #f2f2f2;

  }
  tr:nth-child(odd)
  {
    background-color: pink;

  }
  th
  {
    background-color:grey;
    
  }
    .navbar {
  overflow: hidden;
 background-color:gray;
  font-family: Arial, Helvetica, sans-serif;

 }


 

.navbar a {
  border-right:1px solid gray;
  border-radius: 2px;
  float:right;
  font-size: 16px;
  color: white;
  text-align: left;
  padding: 18px 16px;
  text-decoration: none;
}
.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
  background-color: gray;

}
</style>
  
 </head>
<body>
   <div class="navbar"
   style=" height: 42px;">
 
  <a href="login.php">Logout</a>    


</div>
 
  

 
<form name=show method=get action=""><br><br><br>
<b><font color="white">City:</b>
<select name=city onchange="this.form.submit()">
<option> Choose</option>
<?php
$citys=gethotelcity();
$city="";
if(isset($_REQUEST['city']))
    $city=$_REQUEST['city'];
foreach ($citys as $value)
{
  if($city==$value)
          echo "<option selected>".$value."</option>";
      else
         echo "<option >".$value."</option>";
}
?>
</select>&nbsp;&nbsp;
<br><br>




<table >

<?php
$msg="";
$city="";
$cdets=array();
if(isset($_REQUEST['city']))
{
  

    if($_REQUEST['city']!='Choose') 
    {
        echo "<tr> <th>IMAGES</th><th>PG ID</th><th>PG NAME</th><th>LOCATION</th><th>CITY</th><th>STATE</th><th>PHONENO</th><th>TYPE</th><th>PGDETAILS</th><th>CHECK</td></tr>";
         $city=null;
        $keyword=null;
        $min=null;
        $max=null;
        if(isset($_REQUEST['city']))
          if($_REQUEST['city']!="Choose")
        $city=$_REQUEST['city'];

  ?>
  <?php
        $cdets=gethotelbycity($city);
        $productIds=array();
        $i=0;
        foreach ($cdets  as $cdet) 
        {

          if(isset($_REQUEST["keyword"])){
            $keyword=$_REQUEST["keyword"];
            $length = strlen($keyword);
            if(strncmp($cdet[1],$keyword,$length)!=0){
              continue;
            }
          }
   
   
 
          $filesrc="images/$cdet[0]".".jpg";
          $str="<tr><td><img height=100 width=100 src=$filesrc></td>";
    
  
       $str=$str."<td><b>$cdet[0]</b></td>";
          $str=$str."<td><b>$cdet[1]</b></td>";
          $str=$str."<td>$cdet[2]</td>";
          $str=$str."<td>$cdet[3]</td>";
          $str=$str."<td>$cdet[4]</td>";
          $str=$str."<td>$cdet[5]</td>";
          $str=$str."<td>$cdet[6]</td>";
          $str=$str."<td>$cdet[7]</td>";

    $str=$str."<td><button name=button value=$cdet[0] onclick='this.form.submit()'>Check</button></td>";
   // $str=$str."<td><select name=noi$ldet[0]>";
   // for($i=0;$i<=$cdet[4];$i++){
     // $str=$str."<option>".$i."</option>";
    //}
    //$str=$str."</select></td>";
          echo $str;
          $productIds[$cdet[0]]=$cdet[3];
        }
          $_SESSION['userid']=$productIds;
        }
       }
     else
     {
      // $msg="Please select the city";
     
      //echo $msg;
    }

?>
</table>

</form>
</body>
</html>