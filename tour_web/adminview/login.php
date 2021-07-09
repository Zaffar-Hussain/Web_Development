<?php
  require_once 'model/CarsService.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
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
      .column input[type="submit"]
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
          <tr><td><input type="submit" name="submit" value="Login"></td><td></td></tr>
          </tr><tr></tr><tr></tr><tr></tr>
        </table>
        </form>
      </center>
    </div>
  </body>
</html>