<?php

include 'header.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Coorg</title>
</head>
<body style="background-color: #F8EFBA;">

	<div class="container" style="margin: auto;">
		<center>
			<h2>Tour to Coorg</h2><br>

			<div class="row" >
				<div class="col-xs-12" style="width: 100%;">
					<div id="demo" class="carousel slide" data-ride="carousel" >
  						<div class="carousel-inner" style="width: 70%;height: 400px;border: 2px solid orange; border-radius: 4px;">
    						<div class="carousel-item active">
      							<img src="images/coorg1.jpg" alt="coorg" >
    						</div>
    						<div class="carousel-item">
      							<img src="images/coorg2.jpg" alt="coorg" >
    						</div>
    						<div class="carousel-item">
      							<img src="images/coorg3.jpg" alt="coorg" >
    						</div>
  						</div>
					</div>
				</div>
			</div><br>

			<h3>Overview</h3>
			<p>Choose Coorg which is an ideal destination for a weekend getaway in the South Indian state Karnataka. You can easily reach here from Mangalore and two days time will be sufficient for experiencing the beauty of Coorg delightfully. Pack your bags for the best touring experience you have ever had and we will guide you in the best way we can.</p><br>

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
          					Upon your arrival from Mangalore to Coorg which will take around Four hours, our representative will receive and assist you for a smooth hotel check-in. After relaxing a while, start the day as per the schedule.
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
          					After relaxing a while, start exploring the scenic locations of Coorg. Get drenched in the beauty of mysty morning and start to Omkareswarar Temple. Then proceed to Abbey Falls, located amidst lush green coffee plantations owned by an individual. You can access here using a hanging bridge.After thoroughly enjoying here, resume to Madikeri Fort, Museum, Raja Seat and Tomb to know more about the history of Deccan Plateau. Rest of the day is at your leisure.
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