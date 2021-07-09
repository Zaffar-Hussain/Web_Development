
<!DOCTYPE html>
<html>
<head>
	<title>AutoHub </title>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<link href="stylesheet.css" rel="stylesheet">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  	
  	
</head>
<?php include "header.php"; ?>
<body style="background-color: ;">
	
	<div class="main-container">
		<div class="row" >

			<div class="col-xs-2" style="width: 100%;">
				
				<div class="slide-container">
          <img class="mySlides" src="images/car1.jpg" >
          <img class="mySlides" src="images/car3.jpg" >
          <img class="mySlides" src="images/car4.jpg" >
          <img class="mySlides" src="images/car5.jpg" >

          <span class="caption">
            <h2>CAPTION 1</h2>
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
			</div>

			<div class="col-xs-2" style="background-color: #192a56;width: 70%;margin-left: 15%;margin-right: 15%;margin-top: 30px;color: white;">
				<div class="about_div1">
          <p>
            <h2>WELCOME TO AUTOHUB</h2>
            <h4>Rent cars for self drive. Car Zoo is the most preferred brand for self drive car rentals. Car Zoo is providing the best self drive cars at lowest prices. Car Zoo Cars offers the widest range of Self Drive cars for the self-driven in us to choose from. Whether it be Hatchbacks, Sedans, SUVs, MUVs or luxury cars – Carzoo offers Self Drive cars with Hourly, Daily, Weekly and Monthly plans to match your business travel needs, leisure travel needs and your weekend getaway needs.</h4>
            <ul>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
            <a href="aboutus.php" class="link_button">Read more</a>
          </p>
        </div>
        <div class="about_div2">
         dfsdf
        </div>	
			</div>

			<div class="col-xs-2" style="background-color:white;width: 100%;margin-top: 30px;">
				<center><h1 style="padding-top: 20px;padding-bottom: 20px;font-size: 40px;" id="Profile">CARS</h1></center>
        <div class="card-columns">

          <div class="card" style="width:400px">
            <img class="card-img-top" src="images/car4.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <center><h4 class="card-title">SELTOS</h4>
              <a href="#" class="btn btn-primary stretched-link">BOOK</a></center>
            </div>
          </div>


          <div class="card" style="width:400px">
            <img class="card-img-top" src="images/car4.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <center><h4 class="card-title">SELTOS</h4>
              <a href="#" class="btn btn-primary stretched-link">BOOK</a></center>
            </div>
          </div>

          <div class="card" style="width:400px">
            <img class="card-img-top" src="images/car4.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <center><h4 class="card-title">SELTOS</h4>
              <a href="#" class="btn btn-primary stretched-link">BOOK</a></center>
            </div>
          </div>

          <div class="card" style="width:400px">
            <img class="card-img-top" src="images/car4.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <center><h4 class="card-title">SELTOS</h4>
              <a href="#" class="btn btn-primary stretched-link">BOOK</a></center>
            </div>
          </div>  

          <div class="card" style="width:400px">
            <img class="card-img-top" src="images/car4.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <center><h4 class="card-title">SELTOS</h4>
              <a href="#" class="btn btn-primary stretched-link">BOOK</a></center>
            </div>
          </div>

          <div class="card" style="width:400px">
            <img class="card-img-top" src="images/car4.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <center><h4 class="card-title">SELTOS</h4>
              <a href="#" class="btn btn-primary stretched-link">BOOK</a></center>
            </div>
          </div>

        </div>
			</div>

			<div class="col-xs-2" style="background-color:#dfe4ea;width: 100%;margin-top: 30px;">
				<center>
          <h1 class="w3-center" style="padding-top: 40px;padding-bottom: 20px;font-size: 40px;" id="Projects">REVIEWS</h1>

          <?php 
            $str=[];
            $reviews = array("GOOD CARS","BEST CAR","AWESOME","COOL","YAHOO");
            for ($i=0;$i<=4;$i++) {
              $str = "<div class='mySlides2'><h2>".$reviews[$i]."</h2></div>";
              echo $str;
            }
          ?>

          
          <script>
            var slideIndexx = 1;
            showDivs(slideIndexx);

            function plusDivs(n) {
              showDivs(slideIndexx += n);
            }

            function showDivs(n) {
              var i;
              var x = document.getElementsByClassName("mySlides2");
              var y = document.getElementsByClassName("project_title");
              if (n > x.length) {slideIndexx = 1}
              if (n < 1) {slideIndexx = x.length}
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none"; 
                y[i].style.display = "none"; 
              }
              x[slideIndexx-1].style.display = "block";  
              y[slideIndexx-1].style.display = "block"; 
            }
          </script>
        </center>
			</div>

			<div class="col-xs-2" style="background-color:rgba(0,0,0,0.8);width: 100%;color: white;">
        <div class="card ">
          <div class="card-body text-center" style="background-color:rgba(0,0,0,0.8);width: 100%;padding-left: 30px;">
            <center><h1 style="font-size: 40px;text-align: left;" id="About">ABOUT US</h1></center>
            <p style="font-size: 15px;text-align: left;">
              <strong>Passionate developers who love to build simple and beautiful projects</strong><br>
              We take simple projects and develop in the way that inspire clients.<br>
              We have a passion in developing and designing websites that matters.<br>
              We provide robust technology solutions to Robots, that can automate your home appliances.<br>
              We are well skilled developers who can deliver your desired level of web Apps.<br>
              We are dedicated team of developers who can provide you service at any time.<br>
            </p>                    
          </div>
        </div>
        <div class="card ">
          <div class="card-body text-center" style="background-color:rgba(0,0,0,0.8);width: 100%;object-position: left;padding-left: 30px;">
            <center><h1 style="font-size: 40px;text-align: left;" id="Contact">CONTACT US</h1></center>
            <p style="text-align: left;font-size: 15px">
              Name : Zafar Hussain Abba<br>  
              Email : japujafar53198@gmail.com<br>
              Phone : +91 7899940868<br>
              Name : Manoj Acharya<br>
              Email : manojy0505@gmail.com<br>     
              Phone : +91 8073434839<br>
            </p>            
          </div>
        </div>
      </div>
      <div class="col-xs-2" style="background-color: #99A1BA;width:100%;height: 200px;">
        <form action="mailto:japujafar53198@gmail.com" method="post" enctype="text/plain">
          <div style="padding-left: 30px;">
            <h2 style="margin-left: 10px;">TELL US WHATS IN YOUR MIND.</h2>
            <table style="width: 100%;height: 100px;margin-left: 20px;margin-top: 5px;">
              <tr>
                <td style="font-size: 15px;width: 100px;"><b>Name</b></td>
                <td><input type="text" name="name" style="width: 150px;"></td>
              </tr>
              <tr>
                <td style="font-size: 15px;"><b>E-mail</b></td>
                <td><input type="text" name="mail" style="width: 150px;"></td>
              </tr>
              <tr>
                <td style="font-size: 15px;"><b>Comment</b></td>
                <td><textarea style="width: 150px;"> </textarea>  </td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <input type="submit" value="Send">
                  <input type="reset" value="Reset"></td>
              </tr>
            </table>
          </div>  
        </form>
      </div>
      <div class="col-xs-2" style="background-color: black;width: 100%;">
        <div class="footer">
          <p style="font-size: 20px;">Copyright © 2020 "<font style="font-family: Luminari, fantasy, serif;">EmZee Solutions</font>". All Right Reserved.</p>
        </div>
      </div>
		</div>
	</div>
</body>
</html>
