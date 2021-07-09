<?php 
require('dbfunc22.php');
$tprice="";
$pdets = array();
$val="";
$msg2="";
$brand=array("watch"=>array("titan","fevre-leuba","hmt"),"camera"=>array("sony","cannon","olympus","nikon"),"laptop"=>array("microsoft","dell","hp","lenevo","apple","asus"),"tv"=>array("panasonic","LG","MI","samsung","sony"));
$categorys=array("watch"=>array("wrist-watches","digital","analog"),"camera"=>array("ip camera","point and shoot","DSLR & mirrorless"));
$strapmaterial=array("watch"=>array("ceramic","fabric","genuine","gold","metal"));
$color=array("watch"=>array("black","brown","blue","red","white"),"camera"=>array("black","grey","white"));
$screensize=array("laptop"=>array("below 12 inch","13 to 13.9 inch","14 to 14.9 inch"),"tv"=>array("28-32 inch","39-43 inch","48-55 inch","60 & above"));
$ops=array("laptop"=>array("windows 8","windows 8.1","mac os"));
$resolution=array("tv"=>array("full HD","ultra HD","HD ready"));
$harddiskcapacity=array("laptop"=>array("32gb","500gb","1tb","2tb"));
session_start();



/*$_SESSION['id']=$id;*/
if(isset($_SESSION['submit']))
   header('location:buy.php');
if(isset($_REQUEST['delete'])){
    $delete=$_REQUEST['delete'];


$str=deleteItem($delete);
}

if(isset($_REQUEST['key']))

    if($_REQUEST['key']!=""){
        $catgs =getProductCategorykey($_REQUEST['key']);
    }

    
 ?>
<!DOCTYPE html>
<html> 
<head>
    <style>
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
        th
        {
            background-color: grey;
            color: white;
        }
        ul{
list-style-type: none;
margin: 0;
padding: 0;
overflow: hidden;
background-color: #333;

        }
        li{

            float: right;
        }
        li a{

            display: block;;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        li a:hover {
            background-color: #111;
        }
    </style>
</head>
<body>
<ul>
    <li><a class="active" href="logout.php">Logout</a></li>
    <li><a href="updateinfo.php">Edit Profile</a></li>
     <li><a href="buy.php">Shipping</a></li>
</ul>

    
    <br></br>
<form name="show" method="get" action="" enctype="multipart/form-data">
        Products:
        <select name="cat" onchange="this.form.submit()">
            <option> Choose</option>
            
            <?php 
            $category=getProductCategory();
            $catg="";
            if(isset($_REQUEST['cat'])){
                $catg=$_REQUEST['cat'];
                echo $_REQUEST['cat'];
            }
            
            foreach($category as $value)
            {
                if($catg==$value)
            
            echo "<option selected >".$value."</option>";
            else
                echo "<option>".$value."</option>";
        }

            ?>

        </select><br><br>
         <?php
            if(isset($_REQUEST['details'])||isset($_REQUEST['key']))
            
            {
                echo "<table  >
            <tr >
            <th>image</th>
                <th>Id</th>
                <th>Name</th>
                <th>Details</th>
                <th>Price</th>
                <th>select</th>
                
                <th>noq</th>
                
                
            </tr>";
            }

         ?>
 
        
        <?php
        
        $msg="";    
        
        $catg="";
        $pdets = array();
        if(isset($_REQUEST['cat']))

            if($_REQUEST['cat']!='Choose')
            {
                $catg=$_REQUEST['cat'];
                if($catg=='watch')
                {
                    
                    echo "Brand:<select name='brand1'><option>select</option>";
                    foreach ($brand as $keys => $value) 
                    if($keys=="watch")
                    {
                        foreach($value as $val)
                        {
                            if(isset($_REQUEST['brand1']))
                                if($val==$_REQUEST['brand1'])
                                    echo "<option selected>$val</option>";
                                else
                                    echo "<option>$val</option>";
                            else
                                 echo "<option>$val</option>";
                        }
                    }
        
                    echo "</select>";
    

    echo"Category:<select name='category1'  ><option>select</option>";
          foreach ($categorys as $keys => $value) 


           if($keys=="watch")
           {
           foreach($value as $val)
           {
               if(isset($_REQUEST['category1']))
                   if($val==$_REQUEST['category1'])
                      echo "<option selected>$val</option>";
                   else
                     echo "<option>$val</option>";
                else
                    echo "<option>$val</option>";
           }
           }
        
      echo "</select>";
echo"Strap Material:<select name='strapmaterial'  ><option>select</option>";
          foreach ($strapmaterial as $keys => $value) 
           if($keys=="watch")
           {
           foreach($value as $val)
           {
               if(isset($_REQUEST['strapmaterial']))
                   if($val==$_REQUEST['strapmaterial'])
                      echo "<option selected>$val</option>";
                   else
                     echo "<option>$val</option>";
                else
                    echo "<option>$val</option>";
           }
           }
        
      echo "</select>";
echo"Color:<select name='color1'   ><option>select</option>";
          foreach ($color as $keys => $value) 
           if($keys=="watch")
           {
           foreach($value as $val)
           {
               if(isset($_REQUEST['color1']))
                   if($val==$_REQUEST['color1'])
                      echo "<option selected>$val</option>";
                   else
                     echo "<option>$val</option>";
                else
                    echo "<option>$val</option>";
           }
           }
        
      echo "</select>";
  }
    else if($catg=='camera')
    {
        echo"Category:<select name='category2'  ><option>select</option>";
          foreach ($categorys as $keys => $value) 
           if($keys=="camera")
           {
           foreach($value as $val)
           {
               if(isset($_REQUEST['category2']))
                   if($val==$_REQUEST['category2'])
                      echo "<option selected>$val</option>";
                   else
                     echo "<option>$val</option>";
                else
                    echo "<option>$val</option>";
           }
           }
        
      echo "</select>";
echo"Color:<select name='color2'   ><option>select</option>";
          foreach ($color as $keys => $value) 
           if($keys=="camera")
           {
           foreach($value as $val)
           {
               if(isset($_REQUEST['color2']))
                   if($val==$_REQUEST['color2'])
                      echo "<option selected>$val</option>";
                   else
                     echo "<option>$val</option>";
                else
                    echo "<option>$val</option>";
           }
           }
        
      echo "</select>";
    echo"Brand:<select name='brand2'  ><option>select</option>";
          foreach ($brand as $keys => $value) 
           if($keys=="camera")
           {
           foreach($value as $val)
           {
               if(isset($_REQUEST['brand2']))
                   if($val==$_REQUEST['brand2'])
                      echo "<option selected>$val</option>";
                   else
                     echo "<option>$val</option>";
                else
                    echo "<option>$val</option>";
           }
           }
        
      echo "</select>";

    }
    else if($catg=='laptop')
    {
        echo"Brand:<select name='brand3'  ><option>select</option>";
          foreach ($brand as $keys => $value) 
           if($keys=="laptop")
           {
           foreach($value as $val)
           {
               if(isset($_REQUEST['brand3']))
                   if($val==$_REQUEST['brand3'])
                      echo "<option selected>$val</option>";
                   else
                     echo "<option>$val</option>";
                else
                    echo "<option>$val</option>";
           }
           }
        
      echo "</select>";
echo"Screen size:<select name='screensize1'  ><option>select</option>";
          foreach ($screensize as $keys => $value) 
           if($keys=="laptop")
           {
           foreach($value as $val)
           {
               if(isset($_REQUEST['screensize1']))
                   if($val==$_REQUEST['screensize1'])
                      echo "<option selected>$val</option>";
                   else
                     echo "<option>$val</option>";
                else
                    echo "<option>$val</option>";
           }
           }
        
      echo "</select>";
    echo"OS:<select name='os'   ><option>select</option>";
          foreach ($ops as $keys => $value) 
           if($keys=="laptop")
           {
           foreach($value as $val)
           {
               if(isset($_REQUEST['os']))
                   if($val==$_REQUEST['os'])
                      echo "<option selected>$val</option>";
                   else
                     echo "<option>$val</option>";
                else
                    echo "<option>$val</option>";
           }
           }
        
      echo "</select>";
    echo"hard disk capacity:<select name='hrddskcpty'  ><option>select</option>";
          foreach ($harddiskcapacity as $keys => $value) 
           if($keys=="laptop")
           {
           foreach($value as $val)
           {
               if(isset($_REQUEST['hrddskcpty']))
                   if($val==$_REQUEST['hrddskcpty'])
                      echo "<option selected>$val</option>";
                   else
                     echo "<option>$val</option>";
                else
                    echo "<option>$val</option>";
           }
           }
        
      echo "</select>";
    } else if($catg=='tv')
    {
        echo"Brand:<select name='brand4'   ><option>select</option>";
          foreach ($brand as $keys => $value) 
           if($keys=="tv")
           {
           foreach($value as $val)
           {
               if(isset($_REQUEST['brand4']))
                   if($val==$_REQUEST['brand4'])
                      echo "<option selected>$val</option>";
                   else
                     echo "<option>$val</option>";
                else
                    echo "<option>$val</option>";
           }
           }
        
      echo "</select>";
echo "Screen size:<select name='screensize2'  ><option>select</option>";
          foreach ($screensize as $keys => $value) 
           if($keys=="tv")
           {
           foreach($value as $val)
           {
               if(isset($_REQUEST['screensize2']))
                   if($val==$_REQUEST['screensize2'])
                      echo "<option selected>$val</option>";
                   else
                     echo "<option>$val</option>";
                else
                    echo "<option>$val</option>";
           }
           }
        
      echo "</select>";
    echo "Resolution:<select name='rsln' ><option>select</option>";
          foreach ($resolution as $keys => $value) 
           if($keys=="tv")
           {
           foreach($value as $val)
           {
               if(isset($_REQUEST['rsln']))
                   if($val==$_REQUEST['rsln'])
                      echo "<option selected>$val</option>";
                   else
                     echo "<option>$val</option>";
                else
                    echo "<option>$val</option>";
           }
           }
        
      echo "</select>";

 }


     $val ="";
    if(isset($_REQUEST['brand1']))
        if($_REQUEST['brand1']!="select")
    {
        $val = $val.$_REQUEST['brand1'].",";
    }
    if(isset($_REQUEST['category1']))
        if($_REQUEST['category1']!="select")
        {
        $val=$val.$_REQUEST['category1'].",";
    }
    if(isset($_REQUEST['strapmaterial']))
        if($_REQUEST['strapmaterial']!="select"){
        $val=$val.$_REQUEST['strapmaterial'].",";
    }
    if(isset($_REQUEST['color1']))
        if($_REQUEST['color1']!="select"){
        $val=$val.$_REQUEST['color1']."";
    }
    if(isset($_REQUEST['category2']))
        if($_REQUEST['category2']!="select"){
        $val=$val.$_REQUEST['category2'].",";
    }
    if(isset($_REQUEST['color2']))
        if($_REQUEST['color2']!="select"){
        $val=$val.$_REQUEST['color2'].",";
    }
    if(isset($_REQUEST['brand2']))
        if($_REQUEST['brand2']!="select"){
        $val=$val.$_REQUEST['brand2']."";
    }
    if(isset($_REQUEST['brand3']))
        if($_REQUEST['brand3']!="select"){
        $val=$val.$_REQUEST['brand3'].",";
    }
    if(isset($_REQUEST['screensize1']))
        if($_REQUEST['screensize1']!="select"){
        $val=$val.$_REQUEST['screensize1'].",";
    }
    if(isset($_REQUEST['os']))
        if($_REQUEST['os']!="select"){
        $val=$val.$_REQUEST['os'].",";
    }
    if(isset($_REQUEST['harddiskcapacity']))
        if($_REQUEST['harddiskcapacity']!="select"){
        $val=$val.$_REQUEST['harddiskcapacity']."";
    }
    if(isset($_REQUEST['brand4']))
        if($_REQUEST['brand4']!="select"){
        $val=$val.$_REQUEST['brand4'].",";
    }
    if(isset($_REQUEST['screensize2']))
        if($_REQUEST['screensize2']!="select"){
        $val=$val.$_REQUEST['screensize2'].",";
    }
    if(isset($_REQUEST['rsln']))
        if($_REQUEST['rsln']!="select"){
        $val=$val.$_REQUEST['rsln']."";
    }
    //echo $val;
    $_SESSION['val']=$val; 
echo "<input type=submit name='details' value='Go'>";
//echo "<script>console.log('yes')</script>";
if(isset($_REQUEST['details']))
{
        
              


                              
                $pdets=getItemByfil($catg,$val);
                $catg=$_REQUEST['cat'];
                $price=array();
                $productids=array();
                $i=0;
                $url=$_SERVER['REQUEST_URI'];
                $url="http://localhost".$url."";
                foreach ($pdets as $pdet) {
                    $filesrc="img/$pdet[0]".".jpg";
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
                        $price[$pdet[0]]=$pdet[3];
                        $productids[$pdet[0]]=$pdet[3];
                        $_SESSION['pid']=$productids;
                        $_SESSION['price']=$price;
                        if(isset($_REQUEST['id']))
                            $msg=$pdet[2];

                }
            }
        }
             
                   echo "</table><hr color=black><input type='submit' name='addcart' value='add Cart'>
<button type='submit' name='showcart' value='show cart'>Show cart</button></a><br></br>
<input type='submit' value='Show Amount' name=tprice>

";
//$_SESSION['pid']=$productids;

            
           ?>
</form>
        <?php
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





                
       

<form>

<table border=1>
    
    
  <?php
if (isset($_REQUEST['addcart'])) 
{
   
    if(isset($_SESSION['pid']))
    {
        $ids=$_SESSION['pid'];
        foreach ($ids as $itemid => $price) 
        {
            $chname="ch".$itemid;
            if(isset($_REQUEST[$chname]))
            {
                 $cid=get_cart_id();
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
</table>
<table border=1 bgcolor=cyan>
<?php

if (isset($_REQUEST['showcart']))
{
    echo "<tr bgcolor=pink><th>cart id</th><th>item id</th><th>noqty</th><th>price</th><th>total price</th>
    <th>Buy</th><th>delete</th></tr>";
    $uid=$_SESSION['id'];
    $url=$_SERVER['REQUEST_URI'];
                $url="http://localhost".$url."";
    $products=array();
    $products=get_cart_by_uid($uid);
   // $i=0;
   // $it_id=array();

    $i=0;
    foreach($products as $product)
    {
        $str1="<tr><td>$product[0]</td>";
        $str1=$str1."<td>$product[1]</td>";
        $str1=$str1."<td>$product[2]</td>";
        $str1=$str1."<td>$product[3]</td>";
        $str1=$str1."<td>$product[4]</td>";
        $str1=$str1."<td><input type=checkbox name=ch1$product[0] ></td>";
         $str1=$str1."<td><a href=".$url."&delete=$product[0]>delete</a></td></tr>";

        echo $str1;
        

       // $it_id[$i++]=$Product[1];
        //$noqty[$product[0]]=$product[2];
        //$noqty=array();$i=0;
        //$noqty=$product[2];
         //$tamt[$product[0]]=$product[4];
        //$tamt=array();$j=0;
         //$tamt=$product[4];
         //$it_id[$product[0]]=$product[1];
         //$it_id=array();$k=0;
         //$it_id=$product[1];
       
        
    }
   // $_SESSION['it_id']=$it_id;
    //foreach ($variable as $key => $value) {
        # code...
   // }
     $_SESSION['buydet']=$buydet;
    //$_SESSION['it_id']=$it_id;
    //$_SESSION['noqty']=$noqty;
    //$_SESSION['value']=$value;
//$_SESSION['tamt']=$tamt;

    echo "<br><input type=submit name=buyitem value=Buy>";

}



if(isset($_REQUEST['tprice']))
    {
        $ids=$_SESSION['price'];
        $tprice=0;
        foreach ($ids as $id => $iprice)
        {
            $chname="ch".$id;
            if(isset($_REQUEST[$chname]))
            {
                $pqty="noi".$id;
                $noqty=$_REQUEST[$pqty];
                $tprice=$noqty*$iprice+$tprice;
                
                echo "<tr><td>$id</td><td>$noqty</td><td>$iprice</td></tr>";
            }
            
        }
         $msg2="Total price is: ".$tprice;
    }
 
   ?>

 
 
    

</table><br><br><br>
<span><?php echo $msg2;  ?></span><br>



<?php
$msg1="";
if (isset($_REQUEST['buyitem'])) 
{
       if(isset($_SESSION['buydet']))
    {
        $ids=$_SESSION['buydet'];
        $i=0;
        //$it_id=$_SESSION['it_id'];
        //$noqty=$_SESSION['noqty'];
        //$tamt=$_SESSION['tamt'];
        foreach ($variable as $key => $value) 
        {
            $chname="ch1".$ids[0];
            if(isset($_REQUEST[$chname]))
            {
                $bid=get_bill_id();
                //$it_idq='';
                //$it_id=array("");$i=0;
                //$it_id=get_it_by_cartid($cartid);
                //$noqty=get_noqty_by_cartid($cartid);
                $cid=$ids[0];
                $it_id=$ids[1];
                $tamt=$ids[4];
                $noqty=$ids[2];
                $pprice=$ids[3]; 
                $status="checked";
                //$tamt=get_tamt_by_cartid($cartid);
                
                
                $date=date('Y-m-d');
                $uid=$_SESSION['id'];
                if(add_pro_to_bill($bid,$uid,$it_id,$pprice,$noqty,$tamt,$status,$date,$id)==true)
                {
                    $msg1="<font color=green>Products added to billing successfully</font>";
                }
                else
                    $msg1="<font color=red>Products are not added to billing successfully</font>";
            }
            $i++;
        }

    }
}

?>

            </form>  
        <span><?php echo $msg1; ?></span>

</body>
</html> 