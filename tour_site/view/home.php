<?php

include 'header.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Tour >> Home</title>	
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<style type="text/css">

  	 .carousel-inner img {
        width: 100%;
        height: 500px;
      }
      .img {
        margin-bottom: 35px;
        -webkit-filter: drop-shadow(5px 5px 5px #222);
        filter: drop-shadow(5px 5px 5px #222);
        border-radius: 50%;
        height: 90px;
      }
  	</style>
</head>
<body>
	<div class="main-container" >
		<div class="row" >
			<div class="col-xs-2" style="width: 100%;">
				<div id="demo" class="carousel slide" data-ride="carousel">
  					<ul class="carousel-indicators">
    					<li data-target="#demo" data-slide-to="0" class="active"></li>
    					<li data-target="#demo" data-slide-to="1"></li>
    					<li data-target="#demo" data-slide-to="2"></li>
  					</ul>
  					<div class="carousel-inner">
    					<div class="carousel-item active">
      						<img src="images/nature1.jpg" alt="Los Angeles" >
      						<div class="carousel-caption">
        						<h2><b> “In the end, we only regret the chances we didn’t take”</b></h2>
      						</div>   
    					</div>
    					<div class="carousel-item">
      						<img src="images/nature2.jpg" alt="Chicago" >
      						<div class="carousel-caption">
        						<h2><b> “Dare to live the life you’ve always wanted.”</b></h2>
      						</div>   
    					</div>
    					<div class="carousel-item">
      						<img src="images/nature3.jpg" alt="New York" >
      						<div class="carousel-caption">
        						<h2><b> “Adventures are the best way to learn.”</b></h2>
      						</div>   
    					</div>
  					</div>
  					<a class="carousel-control-prev" href="#demo" data-slide="prev">
    					<span class="carousel-control-prev-icon"></span>
  					</a>
  					<a class="carousel-control-next" href="#demo" data-slide="next">
    					<span class="carousel-control-next-icon"></span>
  					</a>
				</div>
			</div>

			<div class="col-xs-2" style="background-color:white;width: 100%;padding-top: 20px;margin-bottom: 5px;">
        <center><h1 style="font-size: 40px;" id="Services">Services</h1></center>
          <div class="card-deck">
              <div class="card ">
                  <div class="card-body text-center">
                    <img class="img" src="images/car.jpg">
                    <p class="card-text">
                      <h3>Own Transport fleets</h3>
                      <h5>We have Own transport fleet with complete range of Cars to Coaches with drivers who have more than 10 years of experience.</h5>
                    </p>  
                  </div>
              </div>

              <div class="card " >
                  <div class="card-body text-center">
                    <img class="img" src="images/network.png">
                    <p class="card-text">
                      <h3>Strong Network</h3>
                      <h5>A strong network from our own office throughout South India to offer personalised service.</h5>
                  </div>
              </div>
              <div class="w-100"></div>
              <div class="card ">
                  <div class="card-body text-center">
                    <img class="img" src="images/help_desk.jpg">
                    <p class="card-text">
                      <h3>Client Support Office</h3>
                      <h5>24 X 7 client support office. Personalized service throughout client's trip. Meet and greet service throughout South India by English speaking Tour Executives.</h5>
                    </p>
                  </div>
              </div>
              <div class="card ">
                  <div class="card-body text-center">
                    <img class="img" src="images/team.jpg">
                    <p class="card-text">
                      <h3>Dedicated team</h3>
                      <h5>Dedicated team who offers expert guidance and service throughout client's trip.</h5>
                    </p>
                    
                  </div>
              </div>  
            </div>  
      </div>
				
			</div>

			<div class="col-xs-2" style="background-color:#2c3e50;width: 100%;margin-bottom: 5px;padding: 5px;">
				<h1 style="text-align: center;margin-top: 5px;" class="text-white">Tour Packages</h1>
        <div class="card-deck" style="text-align: center;margin-bottom: 10px;">
          <div class="card" style="width:400px;height: 302px;border-radius: 2px;">
            <img class="card-img-top" src="images/family_tour.jpg" alt="Card image" style="width:100%;height: 300px;">
            <div class="card-img-overlay">
              <h4 class="card-title text-white"><b>Family Tour</b></h4><br>
                <a href="index.php?page=family_tour_listing" class=" stretched-link"></a>
            </div>
          </div> 
          <div class="card" style="width:400px;height: 302px;">
            <img class="card-img-top" src="images/temple_tour.jpg" alt="Card image" style="width:100%;height: 300px;">
            <div class="card-img-overlay">
              <h4 class="card-title text-white"><b>Temple Tour</b></h4><br>
                <a href="index.php?page=temple_tour_listing" class=" stretched-link"></a>
            </div>
          </div> 
          <div class="card" style="width:400px;height: 302px;">
            <img class="card-img-top" src="images/honeymoon_tour.jpg" alt="Card image" style="width:100%;height: 300px;">
            <div class="card-img-overlay">
              <h4 class="card-title text-white"><b>Honeymoon Tour</b></h4><br>
                <a href="index.php?page=honeymoon_tour_listing" class=" stretched-link"></a>
            </div>
          </div> 
          <div class="card" style="width:400px;height: 302px;">
            <img class="card-img-top" src="images/hill_station_tour.jpg" alt="Card image" style="width:100%;height: 300px;">
            <div class="card-img-overlay">
              <h4 class="card-title text-white"><b>Hill Station Tour</b></h4><br>
                <a href="index.php?page=hill_station_tour_listing" class=" stretched-link"></a>
            </div>
          </div>   
        </div>
			</div>

			<div class="col-xs-2" style="background-color:#192a56;width: 100%;margin-bottom: 5px;padding: 5px;">
				<h1 style="text-align: center;margin-top: 5px;" class="text-white">Popular Destinations</h1>
        <div class="card-deck" style="text-align: center;margin-bottom: 10px;">
          <div class="card" style="width:400px;height: 302px;">
            <img class="card-img-top" src="images/kerala2.jpg" alt="Card image" style="width:100%;height: 300px;">
            <div class="card-img-overlay">
              <h4 class="card-title text-warning"><b>Kerala</b></h4><br>
                <a href="index.php?page=kerala" class=" stretched-link"></a>
            </div>
          </div> 
          <div class="card" style="width:400px;height: 302px;">
            <img class="card-img-top" src="images/mysore1.jpg" alt="Card image" style="width:100%;height: 300px;">
            <div class="card-img-overlay">
              <h4 class="card-title text-warning"><b>Mysore</b></h4><br>
                <a href="index.php?page=mysore" class=" stretched-link"></a>
            </div>
          </div> 
          <div class="card" style="width:400px;height: 302px;">
            <img class="card-img-top" src="images/wayanad2.jpg" alt="Card image" style="width:100%;height: 300px;">
            <div class="card-img-overlay">
              <h4 class="card-title text-warning"><b>Wayanad</b></h4><br>
                <a href="index.php?page=wayanad_hills" class=" stretched-link"></a>
            </div>
          </div> 
          <div class="card" style="width:400px;height: 302px;">
            <img class="card-img-top" src="images/munnar1.jpg" alt="Card image" style="width:100%;height: 300px;">
            <div class="card-img-overlay">
              <h4 class="card-title text-warning"><b>Munnar</b></h4><br>
                <a href="index.php?page=munnar" class=" stretched-link"></a>
            </div>
          </div>   
        </div>
			</div>

		</div>
	</div>

</body>
</html>
<?php
include 'footer.php';
?>