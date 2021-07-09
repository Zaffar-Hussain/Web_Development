<?php

include 'header.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Kerala</title>
</head>
<body style="background-color: #F8EFBA;">

	<div class="container" style="margin: auto;">
		<center>
			<h2>Tour to Kerala</h2><br>

			<div class="row" >
				<div class="col-xs-12" style="width: 100%;">
					<div id="demo" class="carousel slide" data-ride="carousel" >
  						<div class="carousel-inner" style="width: 70%;height: 400px;border: 2px solid orange; border-radius: 4px;">
    						<div class="carousel-item active">
      							<img src="images/kerala1.jpg" alt="Kerala" >
    						</div>
    						<div class="carousel-item">
      							<img src="images/kerala2.jpg" alt="Kerala" >
    						</div>
    						<div class="carousel-item">
      							<img src="images/kerala1.jpg" alt="Kerala" >
    						</div>
  						</div>
					</div>
				</div>
			</div><br>

			<h3>Overview</h3>
			<p>Make up your mind to visit the exotic destinations across Kerala. Munnar, A tour covering Thekkady and Alleppey will give you an unforgettable experience transforming your vacation to unforgettable one.</p><br>

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
          					Upon your arrival, our representative will receive and assist you for a smooth hotel check-in. After relaxing a while, start the day as per the schedule. Kochi is the most popular as a natural harbor and a major trading port, attracts every one with its chinese fishing nets.
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
          					Start your day with list of locations to explore in Munnar.Proceed to Eravikulam National Park, home for the endangered species of birds and animals like Tahr. Get to know different varieties of tea plantations in the Tea Musuem before moving to Nyayamkad Water Falls.Being the most scenic tourist spot in Munnar, Nyayamkad water falls attracts hundred's of visitors every day. Soak yourself in the unspoilt beauty of the ambience, an enchanting experience.Return to hotel and rest of the day is for you.<br>
          					Drive to Thekkady, the popular tourist destination known for Tiger Reserve. Visit the Tiger Reserve, Elephant junction, Rose Park and Spice Garden. Later in the evening, enjoy the Kathakali and Kalaripayattu show, the traditional artforms of Kerala performed by the seasoned artistes. Return totel after an enthralling experience.
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