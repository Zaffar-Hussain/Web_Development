<?php
function connection()
{
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="stores";
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
	echo "<br>".$sql."<br>";
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
function getProductsBycatg($catg)
{
	$conn=connection();
	$sql="select id,iname,iprice,cat,det,brand,status,noq from item where cat='$catg'";
	$result=mysqli_query($conn,$sql);;
	echo "".$sql;
	$pdets=array("","","","","","","","");
	$i=0;
	while($row=mysqli_fetch_assoc($result))
	{
		$pdets[0]=$row['id'];
		$pdets[1]=$row['iname'];
		$pdets[2]=$row['iprice'];
		$pdets[3]=$row['cat'];
		$pdets[4]=$row['det'];
		$pdets[5]=$row['brand'];
		$pdets[6]=$row['status'];
		$pdets[7]=$row['noq'];
		//$i++;
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
function deleteProduct($delete)
{
	$conn=connection();
	$sql="DELETE from item where id='$delete'";
	$nor=mysqli_query($conn,$sql);
	echo $sql;
	closeconnection($conn);
	if($nor>0)
		return true;
	else
		return false;

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
function getProductCategorykey()
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
function getUserDetails($id)
{
	$conn=connection();
	$sql="SELECT email,contact,address from useracc where id='$id'";
	//echo "<br>".$sql."<br>";
	$result=mysqli_query($conn,$sql);
	$proddet=array();
	$i=1;
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
function updateItemInfo($item_id,$item_name,$item_detail,$item_price)
{
	$conn=connection();
	$sql="UPDATE item set
iname='$item_name',det='$item_detail',iprice='$item_price' where id='$item_id'";
	echo "<br>$sql<br>";
	$nor=mysqli_query($conn,$sql);
	closeconnection($conn);
	if($nor>0)
		return true;
	else
		return false;
}


function getItembycatg($cat=null,$keyword=null,$min=null,$max=null)
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
}

function addToCartt($id,$iname,$noqty,$det,$iprice)
{
	$conn=connection();
	$sql="INSERT into cart values ('','$id','','$noq','','','$price','')";
	$nor=mysqli_query($conn,$sql);

	closeconnection($conn);
	if($nor>0)
		return true;
	else
		return false;
}



function add_to_cart($id,$noqty,$pprice,$uid)
{
	$conn=connection();
	$sql="INSERT into cart values ('','$id','$uid','$noq','','','$pprice','')";
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
?>
