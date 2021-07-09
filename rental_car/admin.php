<?php

#include 'view/header.php';
require_once 'controller/CarsController.php';

$controller = new CarsController();

$controller->handleAdminRequest();

?>























































<!--
<?php
  require('dbfunct.php');
  session_start();
  $msg='';
  $msg2='';
  if(isset($_REQUEST['submit']))
  {
    $_SESSION['uid']=$_REQUEST['uid'];
    $uid=$_REQUEST['uid'];
    $pwd=$_REQUEST['pwd'];
    $type=$_REQUEST['type'];
    if(checkaccount($uid,$pwd)==true)
    {
      if(checkaccount_type($uid,$type)==true)
      {
        if($type=='admin')
        {
          $_SESSION['uid']=$uid;
          header('location:searchcandidates.php');
        }
        elseif($type=='user')
        {
          $_SESSION['uid']=$uid;
          header('location:searchjobs.php');
        }
        else
          $msg2="<font color=red>Invalid Account Type For Given User ID</font>";
        
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
  <title>CarHub >> LOGIN </title>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
    * {
          box-sizing: border-box;
      }
      body {
        margin: 0 auto;
        background-image: url('image/log4.png');
        background-size: cover;
        background-repeat: no-repeat;
      }
      .column {
        width:450px;
        height:350px;
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
      .column input[type="submit"] {
        width:100px;
        height:30px;
        border:0;
        border-radius:5px;
        background-color:skyblue;
        font-weight:bolder;
      }
      .column input[type="text"] {
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
      .column select
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
      <form name="form1" class="f1" action="" method="get">
        <table  style=" border-radius: 5px" >
          <tr><th colspan="2"><font size="5">Please Login</font></th></tr>
          </tr><tr></tr><tr></tr><tr></tr>
          <tr>
            <td>User ID:</td>
            <td><input type="text" name="uid" value="" required></td>
          </tr><tr></tr><tr></tr><tr></tr>
          <tr>
            <td>Password:</td>
            <td><input type="password" name="pwd" value="" required></td>
          </tr><tr></tr><tr></tr><tr></tr>
          <tr>
            <td>Type:</td>
            <td>
              <select name="type" required>
                <option value=""></option>
                <option value="admin">admin</option>
                <option value="user">user</option>
              </select>
            </td>
          </tr><tr></tr><tr></tr><tr></tr>
          <tr><td></td><td><?php echo $msg; ?></td></tr>
          <tr><td><input type="submit" name="submit" value="Login"></td><td></td></tr>
          </tr><tr></tr><tr></tr><tr></tr>
          <tr><td colspan="2"><a href="forgotpwd.php"><font size="5px">Forgot Password?</font></a></td></tr>
          </tr><tr></tr><tr></tr><tr></tr>
          <tr><td colspan="2"><a href="register.php"><font size="5px">Sign Up</font></a></td></tr>
        </table>
      </form>
    </center>
  </div>
</body>
</html>-->






