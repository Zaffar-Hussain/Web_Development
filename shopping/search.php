keyword
<input type="text" name="keyword">
<br>

<button onclick="this.form.submit()">SHOW</button>

<table  border=1  bgcolor=white>

<?php
$msg="";
$cat="";
$cdets=array();
if(isset($_REQUEST['cat']))
{

    if($_REQUEST['cat']!='Choose') 
    {
        echo "<tr bgcolor=white><td>Images</td><td>hotel id</td><td> item name </td><td>price</td><td>cat





































































        </td><td>State</td><td>phoneno</td><td>type</td><td>hdetails</td></tr>";
         $cat=null;
        $keyword=null;
        $min=null;
        $max=null;
        if(isset($_REQUEST['cat']))
          if($_REQUEST['cat']!="Choose")
        $cat=$_REQUEST['cat'];
        $cdets=getItembycat($cat);
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
          $str=$str."<td>$cdet[0]</td>";
          $str=$str."<td>$cdet[1]</td>";
          $str=$str."<td>$cdet[2]</td>";
          $str=$str."<td>$cdet[3]</td>";
          $str=$str."<td>$cdet[4]</td>";
          $str=$str."<td>$cdet[5]</td>";
          $str=$str."<td>$cdet[6]</td>";
          $str=$str."<td>$cdet[7]</td>";

    //$str=$str."<td><input type=checkbox name=ch$ldet[0]></td>";
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
       $msg="Please select the city";
      echo $msg;

?>
</table>

</form>
</body>
</html>