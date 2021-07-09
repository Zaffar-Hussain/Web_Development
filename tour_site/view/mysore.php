<?php

include 'header.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Mysore</title>
</head>
<body style="background-color: #F8EFBA;">

	<div class="container" style="margin: auto;">
		<center>
			<h2>Tour to Mysore</h2><br>

			<div class="row" >
				<div class="col-xs-12" style="width: 100%;">
					<div id="demo" class="carousel slide" data-ride="carousel" >
  						<div class="carousel-inner" style="width: 70%;height: 400px;border: 2px solid orange; border-radius: 4px;">
    						<div class="carousel-item active">
      							<img src="images/mysore1.jpg" alt="mysore" >
    						</div>
    						<div class="carousel-item">
      							<img src="images/mysore2.jpg" alt="mysore" >
    						</div>
    						<div class="carousel-item">
      							<img src="images/mysore3.jpg" alt="mysore" >
    						</div>
  						</div>
					</div>
				</div>
			</div><br>

			<h3>Overview</h3>
			<p>A perfect way to spend weekend with exciting experiences is to choose a short trip to Mysore, the iconic destination of the South Indian state Karnataka. You can explore the splendour of Mysore visiting the most prominent locations like Mysore Palace, Brindavan Gardens and Chamundeeswari temple.</p><br>

			<h3>Plan</h3>
			<div id="accordion">
    			<div class="card ">
      				<div class="card-header bg-warning">
        				<a class="card-link text-dark" data-toggle="collapse" href="#collapseOne">
          					<b>ARRIVAL</b>
        				</a>
      				</div>
      				<div id="collapseOne" class="collapse show" data-parent="#accordion">
        				<div class="card-body">
          					Upon your arrival to Bangalore, our representative will receive and assist you for a smooth hotel check-in. After relaxing a while, start the day as per the schedule.
        				</div>
      				</div>
    			</div>
    			<div class="card">
      				<div class="card-header bg-warning">
        				<a class="collapsed card-link text-dark" data-toggle="collapse" href="#collapseTwo">
        					<b>SCHEDULE</b>
      					</a>
      				</div>
      				<div id="collapseTwo" class="collapse" data-parent="#accordion">
        				<div class="card-body">
          					The schedule is for Mysuru sightseeing. Post breakfast, start your day with a visit to Chamundeeswari temple, the most revered sacred centre of Karnataka. Marvel the architectural grandeur of Mysore palace, the icon of Karnataka and the official residence of the King of Deccans. Also visit the Zoo and Sand Sculpture museum. Rest of the day is at your leisure. 
      				</div>
    			</div>
    			<div class="card">
      				<div class="card-header bg-warning">
        				<a class="collapsed card-link text-dark" data-toggle="collapse" href="#collapseThree">
          					<b>DEPARTURE</b>
        				</a>
      				</div>
      			<div id="collapseThree" class="collapse" data-parent="#accordion">
        			<div class="card-body">
          				Based on your departure schedule, you can either plan your drive to visit Shopping Mall and buy souvenirs for your family and friends. Later on, you can resume your return journey. Tour Ends with happy memories!
        			</div>
      			</div>
    		</div><br>

			<button type="button" class="btn btn-success btn-block" data-toggle="collapse" data-target="#inc" >
				<span class="button-toggler-icon"></span>
				<b>INCLUSIVES</b>
			</button>
  			<div id="inc" class="collapse" style="text-align: left;">
  				<ul>
  					<li>Arrival and Departure assistance at the Airport/Railway station</li>
  					<li>Daily Breakfast at Hotels</li>
  					<li>Vehicles for all Transfers & Sight seeing as per the plan</li>
  					<li>All government related taxes</li>
  				</ul>
  			</div><br>
  			<button type="button" class="btn btn-success btn-block" data-toggle="collapse" data-target="#exc"><b>EXCLUSIVES</b></button>
  			<div id="exc" class="collapse" style="text-align: left;">
  				<ul>
  					<li>Flight or Train Fare tickets</li>
  					<li>Entrance Fee at the monuments and sight seeing</li>
  					<li>Personal expenses such as telephone, laundry bills etc</li>
  					<li>Any additional activities</li>
  				</ul>
  			</div><br>
		</center>
	</div>

</body>
</html>
<?php
include 'footer.php';
?>