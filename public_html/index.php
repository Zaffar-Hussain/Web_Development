
<!DOCTYPE html>
<html>
<head>
	<title>Portfolio </title>

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
<body style="background-color: ;">
	<div class="topnav" id="myTopnav">
    <a href="#Home" id="Home" >Home</a>
    <a href="#Services" >Services</a>
    <a href="#Profile" >Profile</a>
    <a href="#Projects" >Projects</a>
    <a href="#About" >About</a>
    <a href="#Contact" >Contact</a>
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
	<div class="main-container">
		<div class="row" >

			<div class="col-xs-2" style="width: 100%;">
				
				<div class="slide-container">
					<img class="mySlides" src="images/nature1.jpg" >
					<img class="mySlides" src="images/nature2.jpg" >
					<img class="mySlides" src="images/nature3.jpg" >
					<img class="mySlides" src="images/nature4.jpg" >

					<span class="caption">
						<h1 style="font-size: 30px;color: #F8EFBA;">We don't want to push <b style="color: black;">our</b> ideas on to you, we simply want to make what you want.</h1>
            <a href="#Contact" class="link_button">CONTACT NOW</a>
					</span>
					<span class="caption">
            <h1 style="font-size: 30px;color: #F8EFBA;">Instead of focusing on the competition, we want to focus on you.</h1>
						<a href="#Contact" class="link_button">CONTACT NOW</a>
					</span>
					<span class="caption">
						<h1 style="font-size: 30px;color: #F8EFBA;">What do we live for if not to make life less difficult for each other?</h1>
						<a href="#Contact" class="link_button">CONTACT NOW</a>
					</span>
					<span class="caption">
						<h1 style="font-size: 30px;color: #F8EFBA;">We wish to do so well that you would like to see it again and bring your friends.</h1>
						<a href="#Contact" class="link_button">CONTACT NOW</a>
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

			<div class="col-xs-2" style="background-color:white;width: 100%;padding-top: 20px;">
				<center><h1 style="font-size: 40px;" id="Services">Services</h1></center>
					<div class="card-deck">
    					<div class="card ">
      						<div class="card-body text-center">
      							<img class="img" src="images/service3.png">
        						<p class="card-text">
        							<h3>WEB DEVELOPMENT ADN DESIGN</h3>
        							<h5>We have well passionated developers who can deliver your desired level of web Apps.</h5>
        						</p>	
      						</div>
    					</div>
   						<div class="card " >
      						<div class="card-body text-center">
      							<img class="img" src="images/service6.jpg">
        						<p class="card-text">
        							<h3>HOME AUTOMATION AND ROBOTICS</h3>
        							<h5>We can provide robust technology solutions to Rovers and Robots, line followers.</h5>
        							<h5>And the super power of controlling your home and office appliances from anywhere.</h5>
        						</p>
      						</div>
    					</div>
    					<div class="w-100"></div>
    					<div class="card ">
      						<div class="card-body text-center">
      							<img class="img" src="images/service11.jpg">
        						<p class="card-text">
        							<h3>24/7 SERVICE</h3>
        							<h5>We have dedicated team of developers who can provide you service at any time </h5>
        							<h5>and to any place you need.</h5>
        						</p>
      						</div>
    					</div>
    					<div class="card ">
      						<div class="card-body text-center">
      							<img class="img" src="images/service9.jpg">
        						<p class="card-text">
        							<h3>SERVICE ..................</h3>
        							<h5>We can ..................</h5>
        						</p>
        						
      						</div>
    					</div>  
  					</div>	
			</div>

			<div class="col-xs-2" style="background-color:#dfe4ea;width: 100%;margin-top: 30px;">
				<center><h1 style="padding-top: 40px;padding-bottom: 20px;font-size: 40px;" id="Profile">PROFILE</h1></center>
        <div class="card-deck">
          <div class="card ">
            <div class="card-body text-center" >
              <img class="img" src="images/manoj.png" >
              <h3>MANOJ ACHARYA</h3>
              
                <p style="font-size: 15px;">

                Passionate Developer with a demonstrated history of working in Intenet of Things pojects.
                Skilled in python, java, C, Aduino, Microcontrollers, Raspberry pi, automation & security devices.
                Have web development skills with hands on experience with HTML5, CSS, JavaScript, MongoDB and AWS-IoT.
                Strong engineering professional with a INFORMATION SCIENCE AND ENGINEERING focused in Computer and Information Science Support Services.
                </p>
              
            </div>
          </div>
          <div class="card ">
            <div class="card-body text-center" style="float: left;" >
              
              
              <img class="img" src="images/zafar.png" >
              <h3>ZAFFAR HUSSAIN ABBA</h3>
              <p style="font-size: 15px;">
                Passionate Developer with a demonstrated history of working in Intenet of Things pojects.
                Skilled in python, java, C, C++, Aduino, Microcontrollers, Raspberry pi, automation & security devices.
                Have web development skills with hands on experience with HTML5, CSS, JavaScript, XAMPP, PHP and AWS-IoT.
                Strong engineering professional with a INFORMATION SCIENCE AND ENGINEERING focused in Computer and Information Science Support Services.
                </p>
              
            </div>
          </div>
        </div>


				
			</div>

			<div class="col-xs-2" style="background-color:#dfe4ea;width: 100%;margin-top: 30px;">
				<center>
          <h1 class="w3-center" style="padding-top: 40px;padding-bottom: 20px;font-size: 40px;" id="Projects">PROJECTS</h1>
          <div class="w3-content w3-display-container" style="">
              <img class="mySlides2" src="images/proj1.png" style="width:100%">
              <img class="mySlides2" src="images/proj2.png" style="width:100%">
              <img class="mySlides2" src="images/proj_3.png" style="width:100%">
              <img class="mySlides2" src="images/nature4.jpg" style="width:100%">
              <h3 class="project_title">FOOD SUUPLY CHAIN MANAGEMENT</h3>
              <h3 class="project_title">STUDENT DETAILS MANAGEMENT</h3>
              <h3 class="project_title">EVENT MANAGEMENT SYSTEM FOR COLLEGE</h3>
              <h3 class="project_title">POJECT4 TITLE GOES HERE</h3>
              <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
              <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
          </div>
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

			<div class="col-xs-2" style="background-color:grey;width: 100%;color: white;">
        <div class="card ">
          <div class="card-body text-center" style="background-color:rgba(0,0,0,0.8);width: 100%;margin-left: ;">
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
          <div class="card-body text-center" style="background-color:rgba(0,0,0,0.8);width: 100%;object-position: left ;">
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
            <h2 style="margin-left: 10px;">TELL US WHATS IN YOUR MIND.</h2>
            <table style="width: 100%;height: 100px;margin-left: 20px;margin-top: 5px;">
              <tr>
                <td style="font-size: 15px;width: 100px;"><b>Name</b></td>
                <td><input type="text" name="name" style="width: 150px;" class="form-control"></td>
              </tr>
              <tr>
                <td style="font-size: 15px;"><b>E-mail</b></td>
                <td><input type="Email" name="mail" style="width: 150px;" class="form-control"></td>
              </tr>
              <tr>
                <td style="font-size: 15px;"><b>Comment</b></td>
                <td><textarea style="width: 150px;" name="comment" class="form-control"> </textarea>  </td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <input type="submit" value="Send">
                  <input type="reset" value="Reset"></td>
              </tr>
            </table>
            
        </form>
      </div>
      <div class="col-xs-2" style="background-color: black;width: 100%;">
        <div class="footer">
          <p style="font-size: 20px;">Copyright © 2020 "<font style="font-family: Luminari, fantasy, serif;">MZee Solutions</font>". All Right Reserved.</p>
        </div>
      </div>
		</div>
	</div>
</body>
</html>
