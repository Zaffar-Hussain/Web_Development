<?php
	require('dbfun.php');
  session_start();
	$userdet=array("","","","","","","");
	$msg="";
  $uid=$_SESSION['id'];
  if(!isset($_SESSION['id']))
    header('location:error.php');
	if(isset($_REQUEST['show']))
	{
		
			$userdet=getUserDetails($uid);
	}
		
	
	if(isset($_REQUEST['update']))
	{
		$id=$_REQUEST['uid'];
		$fname=$_REQUEST['username'];
		$email=$_REQUEST['email'];
		$phone=$_REQUEST['mobile'];
		$gender=$_REQUEST['gender'];

		$que=$_REQUEST['que'];
		$ans=$_REQUEST['ans'];


		if(updateUser($id,$fname,$email,$phone,$gender,$que,$ans))
		{
			$msg="<font color=blue>Updated Successfully...</font>";
			//clearform();
		}
		else
			$msg="<font color=blue>Not Updated</font>";
	}
?>

<html>
<head>
<style type="text/css">
  body
  {
    background-image:url(c5.jpg);
    background-size:cover;
  }
  .aa
  {
    width:400px;
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
    background-color:rgba(15,90,90,10);
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
<form name=upd method=get>
	<center><h1>Edit Profile</h1></center>
	<table align=center>
	<tr><td><font color="white">User ID:</font></td><td><input name="userid" type="text" value='<?php echo $uid; ?>'></td>
		<td><input type="submit" name="show" value=Show></td></tr>
		<tr><label><b><td><font color="white">Full name</font></td></b></label>
		<td><input name="username" type="text" value='<?php echo $userdet[1]; ?>'></td></tr>
		<tr><label><b><td><font color="white">Email</font></td></b></label>
		<td><input name="email" type="text"  value='<?php echo $userdet[2]; ?>'></td></tr></tr>
		<tr><label><b><td><font color="white">Mobile</font></td> </b></label>
		<td><input name="mobile" type="text"  size=10 value='<?php echo $userdet[3]; ?>'></td></tr>

		<tr><label><b><td><font color="white">Gender</font> </td></b></label>
		<td><input name="gender" type="text"  size=10 value='<?php echo $userdet[4]; ?>'></td></tr>

		<tr><label><b><td><font color="white">Security Question</font></td> </b></label>
		<td><input name="que" type="text"  size=10 value='<?php echo $userdet[5]; ?>'></td></tr>

		<tr><label><b><td><font color="white">Answer</font></td></b></label>
		<td><input name="ans" type="text"  size=10 value='<?php echo $userdet[6]; ?>'></td></tr>


	
	<tr><td><input type="submit" name="update" value=Update></td><td><a href="changepwd.php">Change password</a></td><td><input type="reset" value="Reset"></td></tr></table>
<center><tr><td><a href="adminhome.php"><input type="button" value="back" name="back"></a></td></tr></center>
	<?php echo $msg; ?>


</form>
</div>
</body>
</html>