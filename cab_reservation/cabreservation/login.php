<?php
  require('dbfun.php');
  session_start();
  $msg="";
  if(isset($_REQUEST['submit']))
  {
    $id=$_REQUEST['id'];
    $pwd=$_REQUEST['pwd'];
    if(checkaccount($id,$pwd)==true)
    {
        if(checkactype($id)=='user')
        {
            $_SESSION['id']=$id;
            header('location:cuserhome.php');
        }
        else
        {
            $_SESSION['id']=$id;
             header('location:adminhome.php');
        }
    }
    else
      $msg="<font color=red>not valid </font>";
  }
  
?>
<html>
<head>
  <title>Cab Reservation System</title>
<style type="text/css">
  body
  {
    background-image:url(c3.jpg);
    background-size:cover;
  }
  .aa
  {
    width:400px;
    height:250px;
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
  .aa input[type="submit"]
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
    width:200px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:white;
  }
  .aa input[type="password"]
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

  <div class="aa">

<form name=login method="get" action="">
  <h2>Login Form</h2>
 <table align=center>
    <td><font color=white>User ID</font></td>
    <td><input name="id" type="text" class="inputvalues" placeholder="Type your username"/></td></tr></tr>
    <tr><tr><label><b><td><font color=white>Password</font></td></b></label>
   <td> <input name="pwd" type="password" class="inputvalues" placeholder="Type password" ></td>
    <tr><td><input name="submit" type="Submit" id="login_btn" value="Login"/></td><tr>
    <?php  echo $msg;  ?>
   <tr><td> <a href="registration.php">Sign Up</a></td></tr>
   <tr><td> <a href="forgotpass.php">Forgot Password?</a></td></tr>
    </tr></tr></tr></tr></table>
  </form>

</div>
</body>
</html>