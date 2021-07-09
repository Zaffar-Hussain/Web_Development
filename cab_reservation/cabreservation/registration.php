<?php
	require('dbfun.php');
	$msg="";
//	$uid=getNewUserid();
	if(isset($_REQUEST['submit']))
	{
		$username=$_REQUEST['username'];
    $fullname=$_REQUEST['fullname'];
		$password=$_REQUEST['password'];
		$cpassword=$_REQUEST['cpassword'];
		$email=$_REQUEST['email'];
		$mobile=$_REQUEST['mobile'];
		$gender=$_REQUEST['gender'];
		$que=$_REQUEST['que'];
		$ans=$_REQUEST['answer'];
		if($password==$cpassword)
		{
		if(AddUser($username,$fullname,$password,$email,$mobile,$gender,$que,$ans))
			$msg="<foont color=blue>Added successfully</font>";
		else
			$msg="<foont color=red>Not Added</font>";
		}
		else
			echo "password mismatch";

    header('location:login.php');

	}
?><html>
<head>
<title>registration page</title>

<style type="text/css">
  body
  {
    background-image:url(c1.jpg);
    background-size:cover;
  }
  .aa
  {
    width:700px;
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
<script type="text/javascript">
  var message="Error";
function checkdata(val)
{
  var len=val.length;
  
  if(len>=0 && len<=4)
    message="<font color=red size=4>weak</font>";
  else if(len>4 && len<=8)
    message="<font color=blue size=4>medium</font>";
  else
    message="<font color=green size=4>strong</font>";
  document.getElementById("stren").innerHTML=message;
}

</script>
  

</head>
<body>

	<div class="aa">
	<center>
	<h2>Register Form</h2>
	</center>
	<table>
	<form class="myform" action="" method="post">
     <label><b>username</b></label>
    <input name="username" type="text" class="inputvalues" placeholder="enter a unique name" required/><span>&nbsp<font color=blue> user name must contain characters & numbers(a-z,A-z,0-9)</font></span><br><br>
    <label><b>Full name</b></label>
		<input name="fullname" type="text" class="inputvalues" placeholder="Type your Full name" required/><br><br>
		<label><b>Password</b></label>
		<input  name="password" id="pass" type="password" class="inputvalues" placeholder="Type new password" required="" onkeyup="checkdata(this.value)"/><span id="stren"></span><br><br>
		<label><b>Confirm Password</b></label>
		<input  name="cpassword" type="password" class="inputvalues" placeholder="Confirm password" required /><br><br>
		<label><b>Email</b></label>
		<input name="email" type="email" class="inputvalues" placeholder="Type your email" required/><br><br>
		<label><b>Mobile </b></label>
		<input name="mobile" type="number" class="inputvalues" size=10 placeholder="mobile number" required/><br><br>
		<label><b>GENDER:</b></label><br>
		<input name="gender" type="radio" class="radio_btns" value="Male" checked required/> Male
		<input name="gender" type="radio" class="radio_btns" value="Female"  required/> Female<br><br>
		<br> <b>Question</b>
		<SELECT name=que>
		<option value="select">select</option>
		<option>What is your petname?</option>
		<option>What is your favorite color?</option>
		<option>when is your birthday?</option>
		<option>what is your hobby?</option>
		<option>what is your height?</option>
		</SELECT><br><br>
		<label><b>Answer Security question</b></label>
		<input  name="answer" type="text" class="inputvalues" placeholder="answer here" required /><br><br>
		

		<a href='login.php'><input  name="submit" type="Submit"  value="Sign Up"/></a>
		<input type="reset" value="Reset">
  
	</form>
</table>
</div>
	</body></html>