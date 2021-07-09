<!DOCTYPE html>
<html lang="en">
<head>

  <title>Tourist</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body> 
  
  <div class="row" >
    <div class="col-sm-8 bg-primary">
      <h4>Logo</h4>
    </div>
    <div class="col-sm-4 bg-success">
      <h4>Mail</h4>
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
      <i class="fa fa-bars" ></i>
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
