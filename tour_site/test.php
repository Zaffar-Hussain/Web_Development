<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>



<div class="slide-container">
          <img class="mySlides" src="images/nature1.jpg" >
          <img class="mySlides" src="images/nature2.jpg" >
          <img class="mySlides" src="images/nature3.jpg" >
          <img class="mySlides" src="images/nature4.jpg" >

          <span class="caption">
            <h2>WELCOME TO WONDERWORLD</h2>
            <h4>This is the best platform where u can book a car for rent</h4>
            <a href="google.com" class="link_button">BOOK NOW</a>
          </span>
          <span class="caption">
            <h2>CAPTION 2</h2>
            <h4>This is the best platform where u can book a car for rent</h4>
            <a href="google.com" class="link_button">BOOK NOW</a>
          </span>
          <span class="caption">
            <h2>CAPTION 3</h2>
            <h4>This is the best platform where u can book a car for rent</h4>
            <a href="google.com" class="link_button">BOOK NOW</a>
          </span>
          <span class="caption">
            <h2>CAPTION 4</h2>
            <h4>This is the best platform where u can book a car for rent</h4>
            <a href="google.com" class="link_button">BOOK NOW</a>
          </span>
        </div>
        <script>
          var slideIndex = 0;
          showSlides();

          function showSlides() {
              var i;
              var images = document.getElementsByClassName("mySlides");
              var captions = document.getElementsByClassName("caption");
              for (i = 0; i < images.length; i++) {
                images[i].style.display = "none";  
                captions[i].style.display = "none";
              }
              slideIndex++;
              if (slideIndex > images.length) {slideIndex = 1}
              images[slideIndex-1].style.display = "block";  
              captions[slideIndex-1].style.display = "block"; 
              setTimeout(showSlides, 6000);
          }
        </script>




        <div class="container" style="width:100%;">
  <h2>Carousel Example</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="la.jpg" alt="Los Angeles" style="width:1400px;">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="chicago.jpg" alt="Chicago" style="width:1110px;">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="ny.jpg" alt="New York" style="width:1110px;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>