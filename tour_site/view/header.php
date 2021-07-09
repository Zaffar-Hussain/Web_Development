<!DOCTYPE html>
<html lang="en">
<head>

  <title>Tourist</title>
  <link rel = "icon" href="images/logo.png" 
        type = "image/x-icon"> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <style type="text/css">
  .navbar {
    margin-bottom: 5px;
  }
  </style>
  <script type="text/javascript">
    $(document).ready(function(){
      $("#home").click(function(){ $(this).active();  });
      $("#services").click(function(){ $(this).active(); });
      $("#Tour_Packages").click(function(){ $(this).active(); });
      $("#aboutUs").click(function(){ $(this).active(); });
      $("#reviews").click(function(){ $(this).active(); });
      $("#contactUs").click(function(){ $(this).active(); });
    });
  </script>
</head>
<body>
  
      <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="index.php?page=home">
          <font class="font-weight-bold text-warning">GARUDADRI TOURS AND TRAVELS</font>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=home" id="home">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Tour Packages
              </a>
              <div class="dropdown-menu " >
                <a class="dropdown-item" href="index.php?page=family_tour_listing">Family Tours</a>
                <a class="dropdown-item" href="index.php?page=temple_tour_listing">Temple Tours</a>
                <a class="dropdown-item" href="index.php?page=honeymoon_tour_listing">Honeymoon Tours</a>
                <a class="dropdown-item" href="index.php?page=hill_station_tour_listing">Hill Station Tours</a>
              </div>
            </li>   
            <!-- <li class="nav-item">
              <a class="nav-link" href="index.php?page=reviews">Reviews</a>
            </li>  -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="index.php?page=aboutus">About Us</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=contactus">Contact Us</a>
            </li> 
          </ul>
        </div>  
      </nav>
   
</body>
</html>