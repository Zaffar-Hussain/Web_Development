<?php
function connection()
{
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="hotelmanagement";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn)
	{
		die("connection failed:".mysqli_connect_error()."<br><br>");

	}
	return $conn;
}
function closeconnection($conn)
{
	mysqli_close($conn);
}

//create connection
function checkaccount($user_id,$pwd)
{
	$servername="localhost";
$username="root";
$password="";
$dbname="hotelmanagement";
$conn=mysqli_connect($servername,$username,$password,$dbname);
$atype="";
if(!$conn){
	die("connection failed: ".mysqli_connect_error());
}
//echo "Connected successfully<br>";

$sql="SELECT user_id,pwd,atype FROM useraccount";
$result=mysqli_query($conn,$sql); 
 //returns an object
if(mysqli_num_rows($result)>0)
{

	while($row=mysqli_fetch_assoc($result))
	{
		//echo $row['id']."---".$row['pwd']."---".$row['atype'];
		//echo "<br><br>";
		if($row['user_id']==$user_id && $row['pwd']==$pwd)
		{
			$atype=$row['atype'];
			break;

		}
	}
}
mysqli_close($conn);
return $atype;

/*else
{
	echo "No data is present";
}*/
}
function setAccDetails($user_id,$pwd,$atype,$email,$phone,$ques,$ans,$ustatus)
{
	$conn=connection();
	$sql="INSERT INTO useraccount VALUES('$user_id','$pwd','$atype','$email','$phone','$ques','$ans','$ustatus')";

	$nor=mysqli_query($conn,$sql);

	closeconnection($conn);
	if($nor>0) {
		return true;
	}
	else
		return false;

}
function getAtype($user_id)
{
	$conn=connection();
	$sql="select atype from useraccount where user_id='$user_id'";
	$result=mysqli_query($conn,$sql);
	//echo "$sql <br>";
	if($row=mysqli_fetch_assoc($result))
	{
		$atype=$row['atype'];
	
	}
	closeconnection($conn);
	//echo $atype;
	return $atype;
}
function retrievePass($user_id)
{
	$conn=connection();
	$sql="select pwd from useraccount where user_id='$user_id'";
	$result=mysqli_query($conn,$sql);
	//echo "$sql <br>";
	if($row=mysqli_fetch_assoc($result))
	{
		$pwd=$row['pwd'];
	
	}
	closeconnection($conn);
	return $pwd;
}
function changePass($user_id,$pwd)
{
	$conn=connection();
	$sql="update useraccount set pwd='$pwd' where user_id='$user_id'";
	$nor=mysqli_query($conn,$sql);
	echo "$sql";
	closeconnection($conn);
	if($nor>0)
		return true;
	else
		return false;

}
function checkid($user_id)
{

	$conn=connection();
	$sql="select user_id from useraccount where user_id='$user_id'";
	$result=mysqli_query($conn,$sql);
	closeconnection($conn);
	if(mysqli_num_rows($result)>0)
	{
		return true;
	}
	else
		return false;
	
}
function checkQA($user_id,$ques,$ans)
{
	$conn=connection();
	$sql="select ques,ans,pwd from useraccount where user_id='$user_id'";
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
function getAllQuestions()
{
	$conn=connection();
	$sql="select distinct ques from useraccount";
	$result=mysqli_query($conn,$sql);
	//echo "$sql";
	$ques=array();$i=0;
	while($row=mysqli_fetch_assoc($result))
	{
		$ques[$i]=$row['ques'];
		$i++;
	}
	closeconnection($conn);
	return $ques;
}

	
function getUserDetails($user_id)
{
	$conn=connection();
	$sql="SELECT  user_id,pwd,email,phone from useraccount where user_id='$user_id'";
	//echo "<br>".$sql."<br>";
	$result=mysqli_query($conn,$sql);
	$userdet=array();
	$i=0;
	if($row=mysqli_fetch_assoc($result))
	{
		$userdet[0]=$row['user_id'];
		$userdet[1]=$row['pwd'];
		$userdet[2]=$row['email'];
		$userdet[3]=$row['phone'];
		

	}
	closeconnection($conn);
	return $userdet;

}
function updateUserInfo($user_id,$pwd,$email,$phone)
{
	$conn=connection();
	$sql="UPDATE useraccount set pwd='$pwd',email='$email',phone='$phone' where user_id='$user_id'";
	//echo "<br>$sql<br>";
	$nor=mysqli_query($conn,$sql);
	closeconnection($conn);
	if($nor>0)
		return true;
	else
		return false;
}
/*function getAllUserIds()
{ 
	$conn=connection();
	$sql="SELECT user_id  from useraccount";
	$result=mysqli_query($conn,$sql);
	$idarray=array();
	$i=0;
	while ($row=mysqli_fetch_assoc($result)) 
	{
		$idarray[$i]=$row['user_id'];
		$i++;
	}
	closeconnection($conn);
	return $idarray;
}*/
/*function setRoomDetails($rid)
{
	$conn=connection();
	$sql="INSERT INTO room VALUES('$rid','$rname','$rtype','$rcategory','$rrate','$rstatus','$rdet')";

	$nor=mysqli_query($conn,$sql);

	closeconnection($conn);
	if($nor>0) {
		return true;
	}
	else
		return false;

}*/
	
function getRoomDetail($rid)
{
	$conn=connection();
	$sql="SELECT rname,rtype,rcategory,rrate,rstatus,rdet,rpics from room where rid='$rid'";
	echo $sql;
	$result=mysqli_query($conn,$sql);
	$roomdet=array();
	$i=0;
	if($row=mysqli_fetch_assoc($result))
	{
		
		$roomdet[1]=$row['rname'];
		$roomdet[2]=$row['rtype'];
		$roomdet[3]=$row['rcategory'];
		$roomdet[4]=$row['rrate'];
		$roomdet[5]=$row['rstatus'];
		$roomdet[6]=$row['rdet'];
		$roomdet[7]=$row['rpics'];
		

	}
	closeconnection($conn);
	return $roomdet;

}
function updateRoomInfo($rid,$rname,$rtype,$rcategory,$rrate,$rstatus,$rdet,$rpics)
{
	$conn=connection();
	$sql="UPDATE room set rname='$rname',rtype='$rtype',rcategory='$rcategory',rrate='$rrate',rstatus='$rstatus',rdet='$rdet' , rpics='$rpics' where rid='$rid'";
	//echo "<br>$sql<br>";
	$nor=mysqli_query($conn,$sql);
	closeconnection($conn);
	if($nor>0)
		return true;
	else
		return false;
}
function getAllRoomIds()
{ 
	$conn=connection();
	$sql="SELECT rid  from room";
	$result=mysqli_query($conn,$sql);
	$idarray=array();
	$i=0;
	while ($row=mysqli_fetch_assoc($result)) 
	{
		$idarray[$i]=$row['rid'];
		$i++;
	}
	closeconnection($conn);
	return $idarray;
}
function getRoomsDetails()
{
	$conn=connection();
	$sql="select rid,rname,rtype,rcategory,rrate,rstatus,rdet  from room";
	$result=mysqli_query($conn,$sql);
	$i=0;
	//echo "$sql <br>";
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$rid=$row['rid'];
			$rname=$row['rname'];
			$rtype=$row['rtype'];
			$rcategory=$row['rcategory'];
			$rrate=$row['rrate'];
			$rstatus=$row['rstatus'];
			$rdet=$row['rdet'];
			//$rpics=$row['rpics'];
			$det[$i]=array($rid,$rname,$rtype,$rcategory,$rrate,$rstatus,$rdet  );
			$i++;
		}
	}
	closeconnection($conn);
	return $det;
}
function getRoomStatus($rid)
{
	$conn=connection();
	$sql="SELECT rstatus from room where rid='$rid'";
	echo $sql;
	$result=mysqli_query($conn,$sql);
	$roomdet=array();
	$i=0;
	if($row=mysqli_fetch_assoc($result))
	{
		
		
		$roomdet[5]=$row['rstatus'];
		

	}
	closeconnection($conn);
	return $roomdet;

}
function blockRoomInfo($rid,$rstatus)
{
	$conn=connection();
	$sql="UPDATE room set rstatus='$rstatus' where rid='$rid'";
	//echo "<br>$sql<br>";
	$nor=mysqli_query($conn,$sql);
	closeconnection($conn);
	if($nor>0)
		return true;
	else
		return false;
}
function getUserStatus($user_id)
{
	$conn=connection();
	$sql="SELECT ustatus from useraccount where user_id='$user_id'";
	//echo "<br>".$sql."<br>";
	$result=mysqli_query($conn,$sql);
	$userdet=array();
	$i=0;
	if($row=mysqli_fetch_assoc($result))
	{
		
		$userdet[7]=$row['ustatus'];
		
		

	}
	closeconnection($conn);
	return $userdet;

}
function blockUserInfo($user_id,$ustatus)
{
	$conn=connection();
	$sql="UPDATE useraccount set ustatus='$ustatus' where user_id='$user_id'";
	//echo "<br>$sql<br>";
	$nor=mysqli_query($conn,$sql);
	closeconnection($conn);
	if($nor>0)
		return true;
	else
		return false;
}
function getMenuDetails()
{
	$conn=connection();
	$sql="select food_id,food_name,food_category,food_price  from menu";
	$result=mysqli_query($conn,$sql);
	$i=0;
	//echo "$sql <br>";
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$food_id=$row['food_id'];
			$food_name=$row['food_name'];
			$food_category=$row['food_category'];
			$food_price=$row['food_price'];
			
			//$rpics=$row['rpics'];
			$det[$i]=array($food_id,$food_name,$food_category,$food_price  );
			$i++;
		}
	}
	closeconnection($conn);
	return $det;
}
function setMenuDetails($food_id,$food_name,$food_category,$food_price)
{
	$conn=connection();
	$sql="INSERT INTO menu VALUES('$food_id','$food_name','$food_category','$food_price')";

	$nor=mysqli_query($conn,$sql);

	closeconnection($conn);
	if($nor>0) {
		return true;
	}
	else
		return false;

}
function getMenuDetail($food_id)
{
	$conn=connection();
	$sql="SELECT food_name,food_category,food_price from menu where food_id='$food_id'";
	echo $sql;
	$result=mysqli_query($conn,$sql);
	$menudet=array();
	$i=0;
	if($row=mysqli_fetch_assoc($result))
	{
		
		$menudet[1]=$row['food_name'];
		$menudet[2]=$row['food_category'];
		$menudet[3]=$row['food_price'];
	
		

	}
	closeconnection($conn);
	return $menudet;

}
function updateMenuInfo($food_id,$food_name,$food_category,$food_price)
{
	$conn=connection();
	$sql="UPDATE menu set food_name='$food_name',food_category='$food_category',food_price='$food_price' where food_id='$food_id'";
	//echo "<br>$sql<br>";
	$nor=mysqli_query($conn,$sql);
	closeconnection($conn);
	if($nor>0)
		return true;
	else
		return false;
}
function getAllFoodIds()
{ 
	$conn=connection();
	$sql="SELECT food_id  from menu";
	$result=mysqli_query($conn,$sql);
	$idarray=array();
	$i=0;
	while ($row=mysqli_fetch_assoc($result)) 
	{
		$idarray[$i]=$row['food_id'];
		$i++;
	}
	closeconnection($conn);
	return $idarray;
}
function getNewMenuid()
{	
	$conn=connection();
	$sql="select max(food_id) as maxid from menu";
	$result=mysqli_query($conn,$sql);
	$food_id=1;
	if(mysqli_num_rows($result));
	{
		if($row=mysqli_fetch_assoc($result))
			$food_id=$row['maxid']+1;
	}
	closeconnection($conn);
	return $food_id;
}
function addMenu($food_name,$food_category,$food_price)

{
	$conn=connection();
	$newid=getNewMenuid();
	$sql="insert into menu values('$newid','$food_name','$food_category','$food_price')";
	//echo "<br>".$sql."<br>";
	$nor=mysqli_query($conn,$sql);


	closeconnection($conn);
	if($nor>0)

	return true;
else
	return false;
}
function getMenucategory()
{
	$conn=connection();
	$sql="select distinct food_category from menu";

	$result=mysqli_query($conn,$sql);
	$category=array();
	$i=0;
	echo $sql;
	while ($row=mysqli_fetch_assoc($result)) {

		$category[$i++]=$row['food_category'];
		//$i++;
	}
	closeconnection($conn);
	return $category;
}
function getMenuBycategory($catgs)
{
	$conn=connection();
	$sql="select food_id,food_name,food_price from menu where food_category='$catgs'";
	$result=mysqli_query($conn,$sql);;

	$fooddets=array();
	$i=0;
	while($row=mysqli_fetch_assoc($result))
	{
		$fooddets[$i++]=array($row['food_id'],$row['food_name'],$row['food_price']);
		//$i++;
	}
	closeconnection($conn);
	return $fooddets;

}

function getNewRoomid()
{	
	$conn=connection();
	$sql="select max(rid) as maxid from room";
	$result=mysqli_query($conn,$sql);
	$rid=1;
	if(mysqli_num_rows($result));
	{
		if($row=mysqli_fetch_assoc($result))
			$rid=$row['maxid']+1;
	}
	closeconnection($conn);
	return $rid;
}
function addRoom($rid,$rname,$rtype,$rcategory,$rrate,$rstatus,$rdet,$rpics)

{
$conn=connection();
	$newid=getNewRoomid();
	$sql="insert into room values('$newid','$rname','$rtype','$rcategory','$rrate','$rstatus','$rdet','$rpics')";
	//echo "<br>".$sql."<br>";
	$nor=mysqli_query($conn,$sql);


	closeconnection($conn);
	if($nor>0)

	return true;
else
	return false;
}
function DeleteDetails($id)
{
	$conn=connection();
	$sql="Delete from menu where food_id='$id'";
	
	$nor=mysqli_query($conn,$sql);
	closeconnection($conn);
	if($nor>0)
		return true;
	else
		return false;
}
function getRoomcategory()
{
	$conn=connection();
	$sql="select distinct rcategory from room";

	$result=mysqli_query($conn,$sql);
	$category=array();
	$i=0;
	echo $sql;
	while ($row=mysqli_fetch_assoc($result)) {

		$category[$i++]=$row['rcategory'];
		//$i++;
	}
	closeconnection($conn);
	return $category;
}
function getRoomBycategory($catgs)
{
	$conn=connection();
	$sql="select rid,rname,rtype,rrate,rstatus,rdet,rpics from room where rcategory='$catgs'";
	$result=mysqli_query($conn,$sql);;

	$roomdets=array();
	$i=0;
	while($row=mysqli_fetch_assoc($result))
	{
		$roomdets[$i++]=array($row['rid'],$row['rname'],$row['rtype'],$row['rrate'],$row['rstatus'],$row['rdet'],$row['rpics'],);
		//$i++;
	}
	closeconnection($conn);
	return $roomdets;

}
function DeleteRoomDetails($id)
{
	$conn=connection();
	$sql="Delete from room where rid='$id'";
	
	$nor=mysqli_query($conn,$sql);
	closeconnection($conn);
	if($nor>0)
		return true;
	else
		return false;
}
function getpdetail($food_id)
{
	$conn=connection();
	$sql="select food_price from menu where fid=$food_id";
	$result=mysqli_query($conn,$sql);
	if($row=mysqli_fetch_assoc($result))
		$str=$row['food_price'];
	closeconnection($conn);
	return $str;

}

function getProductCatg()
{
	$conn=connection();
	$sql="select distinct food_category from menu";

	$result=mysqli_query($conn,$sql);
	$category=array();
	$i=0;
	
	while ($row=mysqli_fetch_assoc($result)) {

		$category[$i++]=$row['food_category'];
		//$i++;
	}
	closeconnection($conn);
	return $category;
}

function getProductsByCatg($catgs)
{
	$conn=connection();
	$sql="select food_id,food_name,food_price from menu where food_category='$catgs'";
	$result=mysqli_query($conn,$sql);;

	$fdets=array();
	$i=0;
	while($row=mysqli_fetch_assoc($result))
	{
		$fdets[$i++]=array($row['food_id'],$row['food_name'],$row['food_price']);
		//$i++;
	}
	closeconnection($conn);
	return $fdets;


}

function addtprice($tfoodprice,$food_id,$rid)
{
	$conn=connection();
	$sql="update billing set tfoodprice='$tfoodprice',food_id=concat(food_id,',$food_id') where   rid='$rid'";

	$nor=mysqli_query($conn,$sql);

	closeconnection($conn);
}


function getProductbreakfast()
{
	$conn=connection();
	$sql="select * from menu where food_category='breakfast'";
	$result=mysqli_query($conn,$sql);
	$fooddets=array();
	$i=0;
	while($row=mysqli_fetch_assoc($result))
	{
		$fooddets[$i++]=array($row['food_id'],$row['food_name'],$row['food_price']);
		//$i++;
	}

	closeconnection($conn);
	return $fooddets;
}

function getProductlunch()
{
	$conn=connection();
	$sql="select * from menu where food_category='lunch'";
	$result=mysqli_query($conn,$sql);
	$fooddets=array();
	$i=0;
	while($row=mysqli_fetch_assoc($result))
	{
		$fooddets[$i++]=array($row['food_id'],$row['food_name'],$row['food_price']);
		//$i++;
	}

	closeconnection($conn);
	return $fooddets;
}


function getProductdinner()
{
	$conn=connection();
	$sql="select * from menu where food_category='dinner'";
	$result=mysqli_query($conn,$sql);
	$fooddets=array();
	$i=0;
	while($row=mysqli_fetch_assoc($result))
	{
		$fooddets[$i++]=array($row['food_id'],$row['food_name'],$row['food_price']);
		//$i++;
	}

	closeconnection($conn);
	return $fooddets;
}

function getallProduct()
{
	$conn=connection();
	$sql="select * from menu";
	$result=mysqli_query($conn,$sql);
	$fooddets=array();
	$i=0;
	while($row=mysqli_fetch_assoc($result))
	{
		$fooddets[$i++]=array($row['food_id'],$row['food_name'],$row['food_price']);
		//$i++;
	}

	closeconnection($conn);
	return $fooddets;
}


function getfoods($breakfast,$lunch,$dinner)
{
	$conn=connection();
	$sql1="select * from menu ";
	if($breakfast!=null && $lunch!=null && $dinner!=null)
	{
		$sql=$sql1." where food_category='$breakfast' or food_category='$lunch' or food_category='$dinner'";
		echo $sql1."<br>";
	}
	else if($breakfast!=null && $dinner!=null)
	{
		$sql=$sql1." where food_category='$breakfast' or food_category='$dinner'";
		echo $sql."<br>";
	}
	else if($breakfast!=null && $lunch!=null)
	{
		$sql=$sql1." where food_category='$breakfast' or food_category='$lunch'";
		echo $sql."<br>";
	}
	else if($dinner!=null)
	{
		$sql=$sql1." where food_category='$dinner'";
		echo $sql."<br>";
	}
	else if($lunch!=null)
	{
		$sql=$sql1." where food_category='$lunch'";
		echo $sql."<br>";
	}
	else
	{
		$sql=$sql1." where food_category='$breakfast'";
		echo $sql."<br>";
	}

	$result=mysqli_query($conn,$sql);
	$fooddets=array();
	$i=0;
	while($row=mysqli_fetch_assoc($result))
	{
		$fooddets[$i++]=array($row['food_id'],$row['food_name'],$row['food_price']);
		//$i++;
	}
	closeconnection($conn);
	return $fooddets;
}

?>