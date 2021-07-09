<?php 
require('dbfunc.php');
//$cid=get_cart_id();
$tprice="";
session_start();
$msg2="";
//if(!isset($_SESSION['id']))
    //header('location:error.php');
 ?>
<!DOCTYPE html>
<html> 

<body><a href="logout.php">Logout</a>
    <hr color=blue>
<button><a href="up.php">Edit Profile</a></button><br><br>

<form name="show" method="get" action="">
        Category:
        <select name="cat" onchange="this.form.submit()">
            <option> Choose</option>
            
            <?php 
            $category=getProductCategory();
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

        </select><br><br>
          Keyword:<input type=text name=key size=10>
        <button type="button" onclick="getProductCategorykey()" name="key">Search</button>
        
        <?php

        $msg="";    
        
        $catg="";
        $pdets = array();
        if(isset($_REQUEST['cat']))
            if($_REQUEST['cat']!='Choose')
            {
                echo "<table border=1 bgcolor=cyan>
            <tr bgcolor=pink>
            <td>image</td>
                <td>Id</td>
                <td>Name</td>
                <td>Details</td>
                <td>Price</td>
                <td>select</td>
                
                <td>noq</td>
                
                
            </tr>";
                $catg=$_REQUEST['cat'];
                $pdets=getProductByCatgs($catg);
                $price=array();
                $productids=array();
                $i=0;
                $url=$_SERVER['REQUEST_URI'];
                $url="http://localhost".$url."";
                foreach ($pdets as $pdet) {
                    $filesrc="images/$pdet[0]".".jpg";
                        $str="<tr><td><img height=100 width=100 src=$filesrc></td>";
                        $str=$str."<td>$pdet[0]</td>";
                        $str=$str."<td>$pdet[1]</td>";
                        $str=$str."<td>$pdet[2]</td>";
                        $str=$str."<td>$pdet[3]</td>";
                        $str=$str."<td><input type=checkbox name=ch$pdet[0] ></td>";
                       // $str=$str."<td>$pdet[5]</td>";
                        $str=$str."<td><select name=noi$pdet[0]><option>1</option><option>2</option><option>3</option><option>4</option></select></td>";
                        // $str=$str."<td><a href=".$url."&cart=$pdet[0]>Add Cart</a></td></tr>";
                        echo $str;
                       $productids[$pdet[0]]=$pdet[3];
                }
                $_SESSION['pid']=$productids;
            }
            else
                echo "Please select the category";
        ?>
        </table>
<?php
//Saving the total price to insert into the cart
if(isset($_SESSION['pid']))
        {
            $ids=$_SESSION['pid'];
            $tprice=0;
            foreach ($ids as $id => $iprice)
            {
               $chname="ch".$id;
                if(isset($_REQUEST[$chname]))
                {
                   $pqty="noi".$id;
                   $noqty=$_REQUEST[$pqty];
                   $tprice=$noqty*$iprice+$tprice;
               }
            }
        }

?>


 <hr color=magenta>     
<br><br><input type=submit value="Show Amount" name=tprice>
<input type="submit" name="addcart" value="Add to Cart">
<input type="submit" name="showcart" value="Show Cart"><br>

<hr color=magenta>
     



    
<table border=1 bgcolor=cyan>
<?php



if(isset($_REQUEST['tprice']))
    {
        echo "<tr bgcolor=pink><td>id&nbsp&nbsp&nbsp</td><td>noqty&nbsp&nbsp&nbsp</td><td>price</td></tr>";
        if(isset($_SESSION['pid']))
        {
            $ids=$_SESSION['pid'];
            $tprice=0;
            foreach ($ids as $id => $iprice)
            {
               $chname="ch".$id;
                if(isset($_REQUEST[$chname]))
                {
                   $pqty="noi".$id;
                   $noqty=$_REQUEST[$pqty];
                   $tprice=$noqty*$iprice+$tprice;
                   echo "<tr><td>$id&nbsp&nbsp&nbsp</td><td>$noqty&nbsp&nbsp&nbsp</td><td>$iprice</td></tr>";
               }
            }
        }
        $msg2="Total price is: ".$tprice;
    }
?>
</table><br><br><br>
<span><?php echo $msg2;  ?></span><br>
<?php

if (isset($_REQUEST['addcart'])) 
{
    $cid=get_cart_id();
    if(isset($_SESSION['pid']))
    {
        $ids=$_SESSION['pid'];
        foreach ($ids as $itemid => $price) 
        {
            $chname="ch".$itemid;
            if(isset($_REQUEST[$chname]))
            {
                $status="";
                $tamt=$tprice;
                $pstatus="";
                $pqty="noi".$itemid;
                $noqty=$_REQUEST[$pqty];
                $pprice=$price; 
                $uid=$_SESSION['id'];
                if(add_pro_to_cart($cid,$itemid,$uid,$noqty,$status,$tamt,$pprice,$pstatus)==true)
                {
                    $msg="<font color=green>Products added to cart successfully</font>";
                }
                else
                    $msg="<font color=red>Products are not added to cart successfully</font>";
            }
        }

    }
}
?>
<span><?php echo $msg; ?></span><br>
<table border=1 bgcolor=cyan>
<?php

if (isset($_REQUEST['showcart']))
{
    echo "<tr bgcolor=pink><th>cart id</th><th>item id</th><th>noqty</th><th>price</th><th>total price</th></tr>";
    $uid=$_SESSION['id'];
    $products=array();
    $products=get_cart_by_uid($uid);
    $i=0;
    foreach($products as $product)
    {
        $str1="<tr><td>$product[0]</td>";
        $str1=$str1."<td>$product[1]</td>";
        $str1=$str1."<td>$product[2]</td>";
        $str1=$str1."<td>$product[3]</td>";
        $str1=$str1."<td>$product[4]</td></tr>";
        echo $str1;
        
    }
    
}

?> 
</table>








</form> 

</body>
</html>