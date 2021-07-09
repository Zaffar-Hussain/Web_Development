<?php

function connection()
{
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="store";
	$conn=mysqli_connect($servername,$username,$password,$dbname); 
	
	if(!$conn)
	{
		die("connection failed");//stop the execution doesnot display the msg
	}
	return $conn;
}
function closeconnection($conn)
{
	mysqli_close($conn);
}

function checkaccount($id,$pwd)
{
$conn=connection();
$sql="SELECT id,pwd,atype FROM useracc ";
$result=mysqli_query($conn,$sql);
$atype="";
if(mysqli_num_rows($result)>0)
{

	while($row=mysqli_fetch_assoc($result))
	{
			/*echo $row['id']."----".$row['pwd']."----".$row['atype'];
			echo "<br>";*/
			if($row['id']==$id && $row['pwd']==$pwd)
			{
				$atype=$row['atype'];
				break;
			}
			
	}

}
else
	
	closeconnection($conn);
	return $atype;
}
/*function addToCart($id,$item_id,$user_id,$noq)
{
	$conn=connection();
	$sql="INSERT into cart('$id','$item_id','$user_id','$noq')";
	$nor=mysqli_query($conn,$sql);

	closeconnection($conn);
	if($nor>0)
		return true;
	else
		return false;
}*/
function deleteid($id,$user_id)
{
	$conn=connection();
	$sql="DELETE from cart where id='$id' and user_id='$user_id'";
	$nor=mysqli_query($conn,$sql);
	echo $sql;
	closeconnection($conn);
	if($nor>0)
		return true;
	else
		return false;
}
function getUser($id)
{
	$conn=connection();
	$sql="SELECT name FROM useracc where id='$id'";
    $result=mysqli_query($conn,$sql);
   print_r($result);
	
	
	closeconnection($conn);
	return $name;
}

function getCart()
{	
	$conn=connection();
	$sql="SELECT id,noq,price,user_id from cart";
	$result=mysqli_query($conn,$sql);
	$products=array();
	$i=0;
	//echo $sql;
	while($row=mysqli_fetch_assoc($result))
	{
			$id=$row['id'];
			$noq=$row['noq'];
			$price=$row['price'];
			$user_id=$row['user_id'];

			$products[$i]=array($id,$noq,$price,$user_id);
			$i++;
	}
	closeconnection($conn);
	return $products;
}
/*function updateProduct($id,$iname,$iprice,$cat,$det,$brand,$status,$noq)
{
	$conn=connection();
	$sql="UPDATE item set iname='$iname',det='$det',iprice='$iprice',cat='$cat' where id='$id'";
	echo "<br>".$sql."</br>";
	$nor=mysqli_query($conn,$sql);
	closeconnection($conn);
	if($nor>0)
		return true;
	else
		return false;
}*/
function updateProduct($id,$iname,$det,$iprice,$cat)
{
	$conn=connection();
	$sql="update item set iname='$iname',det='$det',iprice='$iprice',cat='$cat' where id='$id'";
	echo "<br>".$sql."</br>";
	$nor=mysqli_query($conn,$sql);
	closeconnection($conn);
	if($nor>0)
		return true;
	else
		return false;
}
function updateItemInfo($item_id,$item_name,$item_detail,$item_price)
{
	$conn=connection();
	$sql="UPDATE item set
iname='$item_name',det='$item_detail',iprice='$item_price' where id='$item_id'";
	//echo "<br>$sql<br>";
	$nor=mysqli_query($conn,$sql);
	closeconnection($conn);
	if($nor>0)
		return true;
	else
		return false;
}

function checkadmin($id,$pwd)
{
	$conn=connection();
	$sql="SELECT id,pwd,atype FROM useracc where atype='admin'";
	$result=mysqli_query($conn,$sql);
	$flag=false;
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			//echo $row['id']."----".$row['pwd']."----".$row['atype'];
			echo "<br>";
			if($row['id']==$id && $row['pwd']=$pwd)
			{
				$flag=true;
				break;

			}
		}
	}
	closeconnection($conn);
	return $flag;
}
function getProductDetails($id)
{
	$conn=connection();
	$sql="SELECT id,iname,det,iprice,cat from item where id='$id'";
	//echo "<br>".$sql."<br>";
	$result=mysqli_query($conn,$sql);
	$proddet=array();
	if($row=mysqli_fetch_assoc($result))
	{
		$proddet[0]=$row['id'];
		$proddet[1]=$row['iname'];
		$proddet[2]=$row['det'];
		$proddet[3]=$row['iprice'];
		$proddet[4]=$row['cat'];
	}
	closeconnection($conn);
	return $proddet;

}
function getItemDetails($id)
{
	$conn=connection();
	$sql="SELECT id,iname,iprice,det,brand,status,noq from item where id='$id'";
	echo "<br>".$sql."<br>";
	$result=mysqli_query($conn,$sql);
	$proddet=array();
	if($row=mysqli_fetch_assoc($result))
	{
		$proddet[0]=$row['id'];
		$proddet[1]=$row['iname'];
		
		$proddet[2]=$row['iprice'];
		$proddet[3]=$row['det'];
		$proddet[4]=$row['brand'];
		$proddet[5]=$row['status'];
		$proddet[6]=$row['noq'];
	}
	closeconnection($conn);
	return $proddet;

}
function getProductsBycatg($cat)
{
	$conn=connection();
	$sql="SELECT id,iname,det,iprice from item where cat='$cat'";
	$result=mysqli_query($conn,$sql);;

	$pdets=array();$i=0;
	while($row=mysqli_fetch_assoc($result))
	{
		$pdets[$i++]=array($row['id'],$row['iname'],$row['det'],$row['iprice']);
		//$i++;
	}
	closeconnection($conn);
	return $pdets;

}
function getProductByCatgs($cat)
{
	$conn=connection();
	$sql="SELECT id,iname,det,iprice from item  where cat='$cat'";
	$result=mysqli_query($conn,$sql);
	$pdets = array();$i=0;
	while ($row=mysqli_fetch_assoc($result))
	{
		$pdets[$i++]=array($row['id'],$row['iname'],$row['det'],$row['iprice']);
	}
	closeconnection($conn);
	return $pdets;

}
function getProductByid($id)
{
	$conn=connection();
	$sql="select iname,iprice,det,status,noq from item where id='$id'";
	$result=mysqli_query($conn,$sql);;

	$pdets=array();$i=0;
	while($row=mysqli_fetch_assoc($result))
	{
		$pdets[$i++]=array($row['iname'],$row['iprice'],$row['det'],$row['status'],$row['noq']);
		//$i++;
	}
	closeconnection($conn);
	return $pdets;

}

function getProductcatg()
{
	$conn=connection();
	$sql="select distinct cat from item";
	$result=mysqli_query($conn,$sql);;

	$catgs=array();$i=0;
	while($row=mysqli_fetch_assoc($result))
	{

		$catgs[$i++]=$row['cat'];

	}
	closeconnection($conn);
	return $catgs;


}
function deleteProduct($id)
{
	$conn=connection();
	$sql="DELETE from item where id='$id'";
	$nor=mysqli_query($conn,$sql);
	//echo $sql;
	closeconnection($conn);
	if($nor>0)
		return true;
	else
		return false;

}


function bill($id)
{

$conn=connection();
	$sql="SELECT id,name, email,contact,address from useracc where id='$id'";
	$result=mysqli_query($conn,$sql);
	$pdets = array();$i=0;
	while ($row=mysqli_fetch_assoc($result))
	{
		$pdets[$i++]=array($row['id'],$row['name'],$row['email'],$row['contact'],$row['address']);

	}
	closeconnection($conn);
	return $pdets;

}
function billdetails($id)
{
	$conn=connection();
	$sql="SELECT id,user_id, item_id,price,qty,tamt,status,pdate,cart_id from bill where user_id='$id'";
	$result=mysqli_query($conn,$sql);
	$pdetss = array();$i=0;
	while ($row=mysqli_fetch_assoc($result))
	{
		$pdetss[$i++]=array($row['id'],$row['user_id'],$row['item_id'],$row['price'],$row['qty'],$row['tamt'],$row['status'],$row['pdate'],$row['cart_id']);

	}
	closeconnection($conn);
	return $pdetss;
}
function deleteItem($id)
{
	$conn=connection();
	$sql="DELETE from cart where id='$id'";
	$nor=mysqli_query($conn,$sql);
	echo $sql;
	closeconnection($conn);
	if($nor>0)
		return true;
	else
		return false;

}
function deleteship($id)
{
	$conn=connection();
	$sql="DELETE from bill where id='$id'";
	$nor=mysqli_query($conn,$sql);
	echo $sql;
	closeconnection($conn);
	if($nor>0)
		return true;
	else
		return false;
}
	
function getProductCattype($cat)
{
	$conn=connection();
	$sql="SELECT filter from cattype  where catg='$cat'";
	$result=mysqli_query($conn,$sql);
	$pdets = array();$i=0;
	while ($row=mysqli_fetch_assoc($result))
	{
		$pdets[$i++]=$row['filter'];
	}
	closeconnection($conn);
	return $pdets;
}/*
function getProductByfill($cat)
{
	$conn=connection();
	if(getProductByCatgs($cat)=='true')
	print_r("yes");
	//$result=mysqli_query($conn,$sql);
	//$pdets = array();$i=0;
	//while ($row=mysqli_fetch_assoc($result))
	/*{
		$pdets[$i++]=array($row['id'],$row['iname'],$row['det'],$row['iprice']);
	}
	closeconnection($conn);
	return $pdets;
}*/



function getProductCategory()
{

	$conn=connection();
	$sql="SELECT distinct cat from item ";
	$result=mysqli_query($conn,$sql);
	$catgs = array();$i=0;
	echo $sql;
	while ($row=mysqli_fetch_assoc($result))
	{
		$catgs[$i++]=$row['cat'];
	}
	closeconnection($conn);
	echo "no of rec:".count($catgs);
	return $catgs;
}
function getProductCategorykey($key)
{
	$conn=connection();
	$sql="SELECT id,iname,det,iprice FROM `item` WHERE `det` LIKE '%$key%' OR `brand` LIKE '%$key%' OR `iname` LIKE '%$key%'";
	$result=mysqli_query($conn,$sql);
	$catgs = array();$i=0;
	while ($row=mysqli_fetch_assoc($result))
	{
		$catgs[$i++]=array($row['id'],$row['iname'],$row['det'],$row['iprice']);


	}
	closeconnection($conn);
	echo "no of rec:".count($catgs);
	return $catgs;
}
function getProductCategoryfil($details)
{
	
	 if(isset($_SESSION['val']))
	 $val=$_SESSION['val'];
	else
		die('val session not presnet');
	$sql1="SELECT id,iname,det,iprice FROM `item`";
	 //$val=substr($val,0, strlen($val)-1);
	 //die('val'.$val);
	$conn=connection();
	//print_r($val);
	$arr=array();
    $sql3="";
	$arr=explode(',',$val);
	$flag=false;
	foreach ($arr as $value)
	 {
		$sql3=$sql3."  'det' like '%".$value."%' or ";
		$flag=true;

	 }
	 $sql3=substr($sql3,0, strlen($sql1)-3);
   // die($sql3);
	print_r($arr);
	/*foreach ($arr as $value)
	 {
		$sql3=$sql3."  'det' like '%".$value."%' or ";


	} */
	
	//die();
	//$sql="(SELECT id,iname,det,iprice from item  where cat='$cat') UNION (SELECT id,iname,det,iprice FROM `item` WHERE(`det` LIKE '%$details%' OR `brand` LIKE '%$details%')) ";
	//$sql="SELECT id,iname,det,iprice FROM `item`  where 'det' like '%$details%' or 'iname' like '%$details%' or 'brand' like '%$details%'";
	
//$sql3="";
	//die ('no:'.count($arr));
    
	
	if($flag==true)
      $sql1=$sql1." where ".$sql3;
    

		echo "<br>".$sql1."<br>";
	
    //die($sql);
	$result=mysqli_query($conn,$sql1);

	$catgss = array();
	$i=0;
	while ($row=mysqli_fetch_assoc($result))
	{
		$catgss[$i++]=array($row['id'],$row['iname'],$row['det'],$row['iprice']);
	}
	closeconnection($conn);
	//echo "no of rec:".count($catgss);
	return $catgss;
}
function getUserDetails($id)
{
	$conn=connection();
	$sql="SELECT email,contact,address from useracc where id='$id'";
	//echo "<br>".$sql."<br>";
	$result=mysqli_query($conn,$sql);
	$proddet=array();
	if($row=mysqli_fetch_assoc($result))
	{
		
		
		$proddet[1]=$row['email'];
		$proddet[2]=$row['contact'];
		$proddet[3]=$row['address'];

	}
	closeconnection($conn);
	return $proddet;

}
function updateUserInfo($id,$email,$contact,$address)
{
	$conn=connection();
	$sql="UPDATE useracc set email='$email',contact='$contact',address='$address' where id='$id'";
 	//echo "<br>$sql<br>";
	$nor=mysqli_query($conn,$sql);
	closeconnection($conn);
	if($nor>0)
		return true;
	else
		return false;
}
function getAllUserIds()
{ 
	$conn=connection();
	$sql="SELECT id  from useracc";
	$result=mysqli_query($conn,$sql);
	$idarray=array();
	$i=0;
	while ($row=mysqli_fetch_assoc($result)) 
	{
		$idarray[$i]=$row['id'];
		$i++;
	}
	closeconnection($conn);
	return $idarray;
}
function getNewUserid()
{
	$conn=connection();
	$sql="SELECT max(id) as maxid from useracc";
	$result=mysqli_query($conn,$sql);
	$id=1;
	if(mysqli_num_rows($result))
	{
		if($row=mysqli_fetch_assoc($result))
			$id=$row['maxid']+1;
	}
	closeconnection($conn);
	return $id;
}
function addItems($iname,$iprice,$cat,$det,$brand,$status,$noq)
{
	$conn=connection();
	$newid=getNewItemid();
	$sql="insert into item values('$newid','$iname','$iprice','$cat','$det','$brand','$status','$noq')";
	//echo "<br>".$sql."<br>";
	$nor=mysqli_query($conn,$sql);//return no of records 
	closeconnection($conn);
	if($nor>0)
		return true;
	else
		return false;
}
function getNewItemid()
{
	$conn=connection();
	$sql="select max(id) as maxid from item";
	$result=mysqli_query($conn,$sql);
	$id=1;
	if(mysqli_num_rows($result))
	{
		if($row=mysqli_fetch_assoc($result))
			$id=$row['maxid']+1;
	}
	closeconnection($conn);
	return $id;
}
function addUser($name,$email,$pwd,$atype,$ques,$ans,$contact,$address)
{
	$conn=connection();
	$newid=getNewUserid();
	$sql="INSERT into useracc values('$newid','$name','$email','$pwd','$atype','$ques','$ans','$contact','$address')";
	//echo "<br>".$sql."<br>";
	$nor=mysqli_query($conn,$sql);//return no of records 
	closeconnection($conn);
	if($nor>0)
		return true;
	else
		return false;
}
function checkid($id)
{

	$conn=connection();
	$sql="SELECT id from useracc where id='$id'";
	$result=mysqli_query($conn,$sql);
	closeconnection($conn);
	if(mysqli_num_rows($result)>0)
	{
		return true;
	}
	else
		return false;
	
}
function retrievePass($id)
{
	$conn=connection();
	$sql="SELECT pwd from useracc where id='$id'";
	$result=mysqli_query($conn,$sql);
	//echo "$sql <br>";
	if($row=mysqli_fetch_assoc($result))
	{
		$pwd=$row['pwd'];
	
	}
	closeconnection($conn);
	return $pwd;
}
function changePass($id,$pwd)
{
	$conn=connection();
	$sql="UPDATE useracc set pwd='$pwd' where id='$id'";
	$nor=mysqli_query($conn,$sql);
	echo "$sql";
	closeconnection($conn);
	if($nor>0)
		return true;
	else
		return false;

}
function checkQA($id,$ques,$ans)
{
	$conn=connection();
	$sql="SELECT ques,ans,pwd from useracc where id='$id'";
	$result=mysqli_query($conn,$sql);
	//echo $sql;
	if($row=mysqli_fetch_assoc($result))
	{
		$ques1=$row['ques'];
		$ans1=$row['ans'];
		$pwd=$row['pwd'];
	}
	closeconnection($conn);
	if($ques1==$ques && $ans1==$ans)
	{
		return $pwd;
	}
	else 
		return null;
}


/*function getItembycatg($cat=null,$keyword=null,$min=null,$max=null)
{
  $conn=connection();
  if($cat!=null || $keyword!=null || $min!=null || $max!=null)
  {
  $condstr="where ";
  if($cat!=null)
    $condstr=$condstr." category='".$cat."' and ";
  if($keyword!=null)
    $condstr=$condstr." `iname` LIKE '%".$keyword."%' and ";
  if($min!=null )
    $condstr=$condstr." price <='".$min."' and ";
   if($max!=null)
    $condstr=$condstr." price >='".$max."' and ";
  
    $condstr=$condstr." 1";
  $sql="SELECT `id`, `iname`, `iprice`, `cat`, `det`,FROM `item`".$condstr ;
}
else
  $sql="SELECT id,iname,iprice,cat,det from item";


    
    $result=mysqli_query($conn,$sql);
    $cdets=array();
    $i=0;
    while($row=mysqli_fetch_assoc($result))
    {
      $cdets[$i++]=array(
      $row['id'],$row['iname'],$row['iprice'],$row['cat'],$row['det']) ;
      //$i++;
    }
  closeconnection($conn);
  return $cdets;
}*/




function getProductsByCatgs($catg=null,$keyword=null,$min=null,$max=null)
{
  $conn=connection();
  if($catg!=null || $keyword!=null || $min!=null || $max!=null)
  {
  $condstr="where ";
  if($catg!=null)
    $condstr=$condstr." catg='".$catg."' and ";
  if($keyword!=null)
    $condstr=$condstr." `pname` LIKE '%".$keyword."%' and ";
  if($min!=null )
    $condstr=$condstr." price <='".$min."' and ";
   if($max!=null)
    $condstr=$condstr." price >='".$max."' and ";
  
    $condstr=$condstr." 1";
  $sql="SELECT `id`, `iname`, `iprice`, `cat`, `det`, `brand` FROM `item`".$condstr ;
}
else
  $sql="select id,iname,iprice,cat,det from item";


    
    $result=mysqli_query($conn,$sql);
    $pdets=array();$i=0;
    while($row=mysqli_fetch_assoc($result))
    {
      $pdets[$i++]=array(
      $row['id'],$row['iname'],$row['iprice'],$row['cat'],$row['det']) ;
      //$i++;
    }
  closeconnection($conn);
  return $pdets;
}
function getCattype()
{

	$conn=connection();
	$sql="SELECT distinct catg from cattype ";
	$result=mysqli_query($conn,$sql);
	$catgs = array();$i=0;
	echo $sql;
	while ($row=mysqli_fetch_assoc($result))
	{
		$catgs[$i++]=$row['catg'];
	}
	closeconnection($conn);
	echo "no of rec:".count($catgs);
	return $catgs;
}

function getsort($cat)
{
$conn=connection();

	$sql="SELECT id,iname,det,iprice from item where cat='$cat' order by iprice ASC";
	$result=mysqli_query($conn,$sql);
	$catgs = array();$i=0;
	while ($row=mysqli_fetch_assoc($result))
	{
		$catgs[$i++]=array($row['id'],$row['iname'],$row['det'],$row['iprice']);


	}
	closeconnection($conn);
	echo "no of rec:".count($catgs);
	return $catgs;	
} 
function addToCart($id,$item_id,$user_id,$noq,$status,$tamt,$price,$pstatus)
{
	$conn=connection();
	$sql="INSERT into cart values ('$id','$item_id','$user_id','$noq','$status','$tamt','$price','$pstatus')";
	$nor=mysqli_query($conn,$sql);

	closeconnection($conn);
	if($nor>0)
		return true;
	else
		return false;
}

function get_cart_id()
	{
		$conn=connection();
		$sql="select max(id) as maxid from cart ";
		$result=mysqli_query($conn,$sql);
		$id=1;
		if(mysqli_num_rows($result))
		{
			if($row=mysqli_fetch_assoc($result))
				$id=$row['maxid']+1;
		}
		closeconnection($conn);
		return $id;
	}
	function add_pro_to_cart($cid,$itemid,$uid,$noqty,$status,$tamt,$pprice,$pstatus)
	{
		$conn=connection();
		$sql="INSERT into cart values ('$cid','$itemid','$uid','$noqty','$status','$tamt','$pprice','$pstatus')";
		$nor=mysqli_query($conn,$sql);
	closeconnection($conn);	
	if($nor>0)
		return true;
	else
		return false;
	}
	function get_cart_by_uid($uid)
	{
		$conn=connection();
		$sql="select id,item_id,user_id,noq,status,tamt,price,pstatus from cart where user_id='$uid'";
		echo $sql;
		$result=mysqli_query($conn,$sql);
		$products=array();
		$i=0;
		while ($row=mysqli_fetch_assoc($result))
		{
			$products[$i++]=array($row['id'],$row['item_id'],$row['noq'],$row['price'],$row['tamt']);
		}

		closeconnection($conn);	
		return $products;
	}


function get_bill_id()
	{
		$conn=connection();
		$sql="select max(id) as maxid from bill ";
		$result=mysqli_query($conn,$sql);
		$id=1;
		if(mysqli_num_rows($result))
		{
			if($row=mysqli_fetch_assoc($result))
				$id=$row['maxid']+1;
		}
		closeconnection($conn);
		return $id;
	}
function add_pro_to_bill($bid,$uid,$it_id,$pprice,$noqty,$tamt,$status,$date,$cartid)
	{
		$conn=connection();
		foreach($it_id as $it_ids){
			foreach ($tamt as $tam) {
				foreach ($noqty as $noqt) {
					
			
		$sql="INSERT into bill values ('$bid','$uid','$it_ids','$pprice','$noqt','$tam','$status','$date','$cartid')";
		echo $sql."<br>";
		$nor=mysqli_query($conn,$sql);
	}
}
}

	closeconnection($conn);	
	if($nor>0)
		return true;
	else
		return false;
	}
function getItemByfil($catg,$val)
{
	
	 if(isset($_SESSION['val']))
	 $val=$_SESSION['val'];
	else
		die('val session not presnet');
	$sql1="SELECT id,iname,det,iprice FROM `item` where cat='$catg'";
	 //$val=substr($val,0, strlen($val)-1);
	 //die('val'.$val);
	$conn=connection();
	//print_r($val);
	$arr=array();
    $sql3="";
	$arr=explode(',',$val);
	$flag=false;
	foreach ($arr as $value)
	 {
		$sql3=$sql3."  det like '%".$value."%' or ";
		$flag=true;

	 }
	 $sql3=substr($sql3,0, strlen($sql3)-3);
   // die($sql3);
	print_r($arr);
	/*foreach ($arr as $value)
	 {
		$sql3=$sql3."  'det' like '%".$value."%' or ";


	} */
	
	//die();
	//$sql="(SELECT id,iname,det,iprice from item  where cat='$cat') UNION (SELECT id,iname,det,iprice FROM `item` WHERE(`det` LIKE '%$details%' OR `brand` LIKE '%$details%')) ";
	//$sql="SELECT id,iname,det,iprice FROM `item`  where 'det' like '%$details%' or 'iname' like '%$details%' or 'brand' like '%$details%'";
	
//$sql3="";
	//die ('no:'.count($arr));
    
	
	if($flag==true)
      $sql1=$sql1." and (".$sql3.")";
    

		echo "<br>".$sql1."<br>";
	
    //die($sql);
	$result=mysqli_query($conn,$sql1);

	$catgss = array();
	$i=0;
	while($row=mysqli_fetch_assoc($result))
	{
		$catgss[$i++]=array($row['id'],$row['iname'],$row['det'],$row['iprice']);
	

	
	
	
	}

	
	closeconnection($conn);
	return $catgss;
}
?>