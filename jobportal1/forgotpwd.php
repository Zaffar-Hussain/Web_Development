<?php
	require('dbfunct.php');
	$msg='';
	$msg2='';
	if(isset($_REQUEST['submit']))
	{
		$id=$_REQUEST['uid'];
		$answer=$_REQUEST['answer'];
		$pwd=forgotpwd($id,$answer);
		$msg="".$pwd;
	}


	if(isset($_REQUEST['submit_id']))
	{
		$id=$_REQUEST['uid'];
		$answer=$_REQUEST['answer'];
		$question=question($id);
		$msg2="".$question;
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Find Password</title>
	<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0 auto;
  background-image: url('image/fp2.jpg');
  background-size: cover;
  background-repeat: no-repeat;
}

.column {
 width:550px;
    height:520px;
    background-color:rgba(0,0,0,0.5);
    margin:0 auto;
    margin-top:100px;
    padding-top:30px;
    padding-left: 60px;
    border-radius:15px;
    color:white;
    font-weight:bolder;
    box-shadow:inset 4px 4px rgba(0,0,0,20);
  
}
.column input[type="submit"]
  {
    width:100px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:skyblue;
    font-weight:bolder;
  }
  .column input[type="button"]
  {
    width:100px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:skyblue;
    font-weight:bolder;
  }
   .column input[type="text"]
  {
    width:200px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:white;
  }
  .column input[type="password"]
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
	<div class="column">
	<center>
		<form name="form" action="" method="get">
			<h1 ><font color=red>Forgot Password?</font></h1>
			<h1><font color=#45aaf2>Here's a Solution :)</font></h1>
			<h2><font color=blue>Submit the user ID and answer the security question correctly as answered during registration....</font></h2>
			User ID:
			<input type="text" name="uid" value="<?php if(isset($_REQUEST['uid'])) echo $_REQUEST['uid'] ?>">
			<input type="submit" name="submit_id" value="Submit ID"><br><br>
			<span >
				<?php 
					echo "".$msg2;
				?>
			</span><br><br>
			Answer:
			<input type="text" name="answer" value="<?php if(isset($_REQUEST['answer'])) echo $_REQUEST['answer'] ?>">	
			<input type="submit" name="submit" value="Submit"><br><br>
			<?php echo $msg ?><br><br>
			<a href="login.php"><input type="button" name="back" value="Back"></a>
		</form>
	</center>
</div>
</body>
</html>