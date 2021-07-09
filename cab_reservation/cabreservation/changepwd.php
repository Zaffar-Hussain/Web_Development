<?php
  require('dbfun.php');
  $msg="";
  if(isset($_REQUEST['submit']))
  {
    $id=$_REQUEST['id'];
    $pwd=$_REQUEST['pwd'];
     $npwd=$_REQUEST['npwd'];
      $cpwd=$_REQUEST['cpwd'];
if(checkid($id))
{
   if(checkaccount($id,$pwd)==true)
    {
        if($npwd==$cpwd)
        {
            if(updatePass($npwd,$id)==true)
                $msg="<font color=blue>Password Changed Successfully </font>";
        }
        else
             $msg="<font color=red>password mismatch </font>";
    }
    else
      $msg="<font color=red>old password incorrect</font>";
}
else
    $msg="<font color=red>user id not exists</font>";
}

?>

<html>
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
<body>
  <div class="aa">
<h2>Change Password Form</h2>
<form name=login method="get" action="">
    <label><b>Username</b></label>
    <input name="id" type="text" class="inputvalues" placeholder="Type your username"/><br><br>
    <label><b>Old Password</b></label>
    <input name="pwd" type="password" class="inputvalues" placeholder="Type old password"/><br><br>
     <label><b>New Password</b></label>
    <input name="npwd" type="password" class="inputvalues" placeholder="Type new password"/><br><br>
     <label><b>Confirm Password</b></label>
    <input name="cpwd" type="password" class="inputvalues" placeholder="Type new password"/><br><br>
    <input name="submit" type="submit" id="login_btn" value="Submit"/>
    <?php  echo $msg;  ?>
    <a href="login.php">Goto Login</a>
  </form>
</div>
</body>
</html>