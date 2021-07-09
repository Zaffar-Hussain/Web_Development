
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
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  	
  	<style type="text/css">
  		.topnav {
      position: relative;
      margin-bottom: 5px;
      overflow: hidden;
      background-color: #333;
      width: 100%;
    }

    .topnav a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    .topnav a:hover {
      background-color: #ed0000;
      color: black;
    }

    .topnav a.active {
      background-color: #ed0000;
      color: white;
    }

    .topnav .icon {
      display: none;
    }

    @media screen and (max-width: 600px) {
      .topnav a:not(:first-child) {display: none;}
      .topnav a.icon {
        float: right;
        color: white;
        display: block;
      }
    }

    @media screen and (max-width: 600px) {
      .topnav.responsive {position: relative;}
      .topnav.responsive .icon {
        position: absolute;
        right: 0;
        top: 0;
      }
      .topnav.responsive a {
        float: none;
        display: block;
        text-align: left;
      }
    }
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
    .mySlides2 {
      position: relative;
      height: 400px;
      margin-bottom: 0%;


    }
		.caption {
  			position: absolute;
  			top: 35%;
  			left: 20%;
  			right: 20%;
  			margin-top: 10%;
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
  			margin-top: 3%;
  			cursor: pointer;
  			border-radius: 4px;
		}
		.img {
    		margin-bottom: 35px;
    		-webkit-filter: drop-shadow(5px 5px 5px #222);
    		filter: drop-shadow(5px 5px 5px #222);
    		border-radius: 50%;
    		height: 90px;
		}
		.card {
			border:none;
		}
		.project_title {
			position: relative;
      height: 30px;
      background-color: #30336b;
      color: white;
      top: 0%;
      bottom: 20px;
		}
    .footer {
      position: relative;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: black;
      color: white;
      text-align: center;
    }
  	</style>
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
						<h2>CAPTION 1</h2>
						<h4>This is the best platform where u can book a car for rent</h4>
						<a href="google.com" class="link_button">CONTACT NOW</a>
					</span>
					<span class="caption">
						<h2>CAPTION 2</h2>
						<h4>This is the best platform where u can book a car for rent</h4>
						<a href="google.com" class="link_button">CONTACT NOW</a>
					</span>
					<span class="caption">
						<h2>CAPTION 3</h2>
						<h4>This is the best platform where u can book a car for rent</h4>
						<a href="google.com" class="link_button">CONTACT NOW</a>
					</span>
					<span class="caption">
						<h2>CAPTION 4</h2>
						<h4>This is the best platform where u can book a car for rent</h4>
						<a href="google.com" class="link_button">CONTACT NOW</a>
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
              <img class="img" src="images/zaf.jpg" >
              <h3>MANOJ ACHARYA</h3>
              
                <p style="font-size: 15px;">
                Experienced Developer with a demonstrated history of working in the computer software industry and embedded development.
                Skilled in python, Microcontrollers SoCs, Network L2,L3 , Raspberry pi, automation & security devices.
                have web development skills with hands on experience with HTML5, CSS, JavaScript, Mysql, SQLite, AWS-IoT and Data Analytics.
                Strong engineering professional with a INFORMATION SCIENCE AND ENGINEERING focused in Computer and Information Sciences and Support Services.
                </p>
              
            </div>
          </div>
          <div class="card ">
            <div class="card-body text-center" style="float: left;" >
              
              
              <img class="img" src="images/zaf.jpg" >
              <h3>ZAFFAR HUSSAIN ABBA</h3>
              <p style="font-size: 15px;">
                Experienced Developer with a demonstrated history of working in the computer software industry and embedded development.
                Skilled in python, Microcontrollers SoCs, Network L2,L3 , Raspberry pi, automation & security devices.
                have web development skills with hands on experience with HTML5, CSS, JavaScript, Mysql, SQLite, AWS-IoT and Data Analytics.
                Strong engineering professional with a INFORMATION SCIENCE AND ENGINEERING focused in Computer and Information Sciences and Support Services.
                </p>
              
            </div>
          </div>
        </div>


				
			</div>

			<div class="col-xs-2" style="background-color:#dfe4ea;width: 100%;margin-top: 30px;">
				<center>
          <h1 class="w3-center" style="padding-top: 40px;padding-bottom: 20px;font-size: 40px;" id="Projects">PROJECTS</h1>
          <div class="w3-content w3-display-container" style="">
              <img class="mySlides2" src="images/nature2.jpg" style="width:100%">
              <img class="mySlides2" src="images/nature1.jpg" style="width:100%">
              <img class="mySlides2" src="images/nature3.jpg" style="width:100%">
              <img class="mySlides2" src="images/nature4.jpg" style="width:100%">
              <h3 class="project_title">POJECT1 TITLE GOES HERE</h3>
              <h3 class="project_title">POJECT2 TITLE GOES HERE</h3>
              <h3 class="project_title">POJECT3 TITLE GOES HERE</h3>
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
              We have well skilled developers who can deliver your desired level of web Apps.<br>
              We have dedicated team of developers who can provide you service at any time.<br>
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
      <div class="col-xs-2" style="background-color: black;width: 100%;">
        <div class="footer">
          <p style="font-size: 20px;">Copyright © 2020 "Website Name". All Right Reserved.</p>
        </div>
      </div>
		</div>
	</div>
</body>
</html>
