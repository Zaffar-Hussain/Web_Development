<?php 
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style type="text/css">
    .topnav {
      position: relative;
      margin-bottom: 5px;
      overflow: hidden;
      background-color: #333;
      width: 100%;
    }

    .topnav a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    .topnav a:hover {
      background-color: #ed0000;
      color: black;
    }

    .topnav a.active {
      background-color: #ed0000;
      color: white;
    }

    .topnav .icon {
      display: none;
    }

    @media screen and (max-width: 600px) {
      .topnav a:not(:first-child) {display: none;}
      .topnav a.icon {
        float: right;
        color: white;
        display: block;
      }
    }

    @media screen and (max-width: 600px) {
      .topnav.responsive {position: relative;}
      .topnav.responsive .icon {
        position: absolute;
        right: 0;
        top: 0;
      }
      .topnav.responsive a {
        float: none;
        display: block;
        text-align: left;
      }
    }
    .container1 {
      position: static;
      width: 100%;
      height: 120px;
      background-color: #636e72;
    }
  </style>
</head>
  
  <div class="container1">
    <div class="row" >
      <div class="col-xs-8" style="background-color: #ed0000;height: 40px;">
        <h4>Need help?</h4>
      </div>
      <div class="col-xs-4" style="background-color: #1e272e;height: 40px;">
        <h4>Social Media links</h4>
      </div>
    </div>

    <div class="row" style="">
      <div class="col-xs-4" style="background-color: #d2dae2;height: 80px;">
        <h4>Logo</h4>
      </div>
      <div class="col-xs-4" style="background-color: #d2dae2;height: 80px;">
        <h4>Mail</h4>
      </div>
      <div class="col-xs-4" style="background-color: #d2dae2;height: 80px;">
        <h4>Location</h4>
      </div>
    </div>
  </div>

  <div class="topnav" id="myTopnav">
    <a href="user.php?page=home" <?php if($page==NULL || $page=="home"){echo "class='active'";} ?> >Home</a>
    <a href="user.php?page=services" <?php if($page=="services"){echo "class='active'";} ?> >Services</a>
    <a href="user.php?page=cars" <?php //if($page=="cars"){echo "class='active'";} ?> >Our Cars<span class="caret"></span></a>
    <a href="user.php?page=aboutus" <?php if($page=="aboutus"){echo "class='active'";} ?> >About Us</a>
    <a href="user.php?page=reviews" <?php if($page=="reviews"){echo "class='active'";} ?> >Reviews</a>
    <a href="user.php?page=contactus" <?php if($page=="contactus"){echo "class='active'";} ?> >Contactus</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"  ></i>
    </a>
  </div>

  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } 
      else {
        x.className = "topnav";
      }
    }
  </script>
  
</body>
</html>
