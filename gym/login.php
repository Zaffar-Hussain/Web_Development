<?php
	require('funct.php');
	session_start();
	$msg='';
	$msg2='';
	if(isset($_REQUEST['submit']))
	{
    $_SESSION['mail']=$_REQUEST['mail'];
		$mail=$_REQUEST['mail'];
    $_SESSION['mail']=$mail;
		$pwd=$_REQUEST['pwd'];
    $type=$_REQUEST['type'];
		if(checkaccount($mail,$pwd)==true)
		{
			if(checkaccount_type($mail,$type)==true)
      {
        $_SESSION['mail']=$mail;
        if($type=='user')
          $msg2="<font color=red>Invalid Account Type For Given User ID</font>";
        else

             header('location:adall.php');
         }
       elseif(checkaccount_typee($mail,$type)==true)
      {
        $_SESSION['mail']=$mail;
        if($type=='admin')
        $msg2="<font color=red>Invalid Account Type For Given User ID</font>";
          else
          header('location:all.php');
        
        
      }
      else
        $msg2="<font color=red>Invalid Account Type For Given User ID</font>";
    }
    else
    {
      $msg='invalid credentials';
    }
  }
					
?>
<!DOCTYPE html>
<html>
<head>

<style>

#example1 {
  
  padding: 10px;
  box-shadow: 5px 10px 8px 10px #888888;
  
  
}
input[type=text], select {
  width: 90%;
  padding: 12px 20px;
  margin: 2px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 90%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color:#0099cc;
  color: white;
  padding: 14px 20px;
  margin: 2px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #007399;
}
input[type=button] {
  width: 100%;
  background-color:#0099cc;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=button]:hover {
  background-color:  #007399;
}
.inner_container{
  width:450px;
  margin:0 auto;
  }


</style>
</head>
<body style="background-image: url(image/cardback.jpg);background-repeat:no-repeat ;background-size:cover " >
<center>
<h2><font color=white>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</font></h2>
<div id="example1" style = "position:fixed; left:400px; top:100px; background-color:white;">
  
    
  <form name="form1" action="" method="get">
    
    <div class="inner_container">

    <label><b><font color=black >&nbsp&nbsp&nbspEMAIL ID&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</font></b></label>

    <input type="text"  placeholder="Enter user ID" name="mail"  required><br><br>
    <label><b><font color=black >PASSWORD&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</font></b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required><br><br>
      <select name="type" required>
          
          <option value="admin">admin</option>
          <option value="user">user</option>
        </select>
    <a href="all.php"><input type="submit" name="submit" value="Login">

   <input type="button" name="register" value="Register" ></a>
    <a href="home.php">Home</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <a href="forgot.php">Forgot password?</a>

    <!--<a href="editpwd.php"><input type="button" name="epwd" value="Edit Password"></a><br><br>-->
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    
    </div>
  </form>
</div>
</center>
</body>
</html>
