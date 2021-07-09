<?php

include 'header.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>CarHub >> HOME </title>

	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<link rel="stylesheet" href="css/style.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  	<style type="text/css">
  		.slide-container {
  			background-color: #d2dae2;
  			position: relative;
  			width: 100%;
		}

		.mySlides {
  			object-fit: cover;
  			width: 100%;
  			height: 550px;
  			animation:fade 6s infinite;
  			-webkit-animation:fade 6s infinite;
		}
		.caption {
  			position: absolute;
  			top: 35%;
  			left: 20%;
  			right: 20%;
  			animation:fade 6s infinite;
  			-webkit-animation:fade 6s infinite;
		}
		@keyframes fade {
  			0%   {opacity: 0}
  			30%  {opacity: 1}
  			50%  {opacity: 1}
  			90%  {opacity: 1}
  			100% { opacity: 0}
		}
		.about_div1 {
			float: left;
			width: 50%;
  			padding-left: 20px;
  			padding-right: 10px;
		}
		.about_div2 {
			right: 0%;
		}
		.link_button {
			background-color: #ed0000;
  			border: none;
  			color: white;
  			padding: 15px 32px;
  			text-align: center;
  			text-decoration: none;
  			display: inline-block;
  			font-size: 16px;
  			margin: 4px 2px;
  			cursor: pointer;
  			border-radius: 4px;
		}
  	</style>
</head>
<body>

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

			<div class="col-xs-2" style="background-color:white;width: 100%;height: 500px;">
				<div class="about_div1">
					<p>
						<h2>WELCOME TO CARHUB</h2>
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
					<img src="images/car11.jpg" style="width: 50%;height: 500px;" >
				</div>
			</div>

			<div class="col-xs-2" style="background-color:blue;width: 100%;">
				<h1>Our services goes here</h1>
			</div>

			<div class="col-xs-2" style="background-color:grey;width: 100%;">
				<h1>Why chose us goes here</h1>
			</div>

			<div class="col-xs-2" style="background-color:black;width: 100%;">
				<h1>Reviews goes here</h1>
			</div>

			<div class="col-xs-2" style="background-color:orange;width: 100%;">
				<h1>Daily rides,user count,KM travelled and no of cars goes here</h1>
			</div>

		</div>
	</div>

</body>
</html>
<?php
include 'footer.php';
?>