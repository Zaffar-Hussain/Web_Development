<!DOCTYPE html>
<html>
<head>
	<title>Notes</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    	.JSON {
    		height: 600px;
    		background-color: grey;
        margin-bottom: 5px;
        padding-left: 3px;
    	}
      .ex_images {
        transition: transform .5s, left .5s; /* Animation */
        margin: 0 auto;
        z-index: 2;
        object-fit: cover;
        width: 100%;
        height: auto;
      }
      @media (min-width: 1600px) { 
       .ex_images:hover {
          transform: scale(3);
        }
      }
      @media (max-width: 1600px) { 
        .ex_images:hover {
          transform: scale(2.7);
          position: relative;
          right: 75%;
          bottom: 10%;
        }
      }
	</style>
</head>
<body>
	<center><h1 style="background-color: red;">IMPORTANT NOTES AND REFERENCES</h1></center>
	<div class="topnav" id="myTopnav">
    	<a href="#Important" id="Details" >Details</a>
    	<a href="#Syntax" >Syntax</a>
    	<a href="#Examples" >Examples</a>
    	<a href="#Exercise" >Exercise</a>
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
			<div class="col-xs-3" style="width: 25%;">
				<h1 style="font-size: 40px;" id="Details">Details</h1>
				<div class="JSON">
					<p>
            <br/>
						<h3>Rules for JSON syntax are</h3>
						<ul>
							<li>Data should be in name/value pairs</li>
							<li>Data should be separated by commas</li>
							<li>Curly braces should hold objects</li>
							<li>Square brackets hold arrays</li>
							<li>You should use an array when the key names are sequential integers</li>
						</ul>
            <h3>Application of JSON</h3>
            <ul>
              <li>Allows you to perform asynchronous data calls without the need to do a page refresh</li>
              <li>Web services and Restful APIs use the JSON format to get public data.</li>
              <li>Helps you to transfer data from a server</li>
              <li>It is widely used for JavaScript-based application, which includes browser extension and websites.</li>
            </ul>
            <h3>Uses of JSON</h3>
            <ul>
              <li>It is mainly used for transmitting serialized data over the network connection.</li>
              <li>It is a text-based and lightweight format for data transactions.</li>
              <li>Useful in data transition from the web application to the server.</li>
              <li></li>
            </ul>
					</p>
				</div>
			</div>



			<div class="col-xs-3" style="width: 25%;">
				<h1 style="font-size: 40px;" id="Syntax">Syntax</h1>
				<div class="JSON">
					<p>
            <br/>
						<ul>
							<li>object : var json-object-name = { string : number_value,......}</li>
							<li>array : [value, .......]</li>
						</ul>
					</p>
				</div>
			</div>



			<div class="col-xs-3" style="width: 25%;">
				<h1 style="font-size: 40px;" id="Examples">Examples</h1>
				<div class="JSON">
					<p>
            <br/>
						<ul>
							<li>var obj = {salary: 2600}</li>
							<li>array storing multiple objects<br/>{"eBooks":[ {"language":"Pascal", "edition":"third" }, { "language":"Python", "edition":"four" }, { "language":"SQL", "edition":"second" } ] }</li>
						</ul>
            <h3>Storing student details using json</h3>
            <ul>
              <li> { "student": [ { "id":"01", "name": "Tom", "lastname": "Price" }, { "id":"02", "name": "Nick", "lastname": "Thameson" } ] } </li>
            </ul>
					</p>
				</div>
			</div>



			<div class="col-xs-3" style="width: 25%;">
				<h1 style="font-size: 40px;" id="Exercise">Exercise</h1>
				<div class="JSON">
					<p>
            <br/>
            <h3>Ex 1: Create a company JSON with different key values.</h3>
						<ul>
              <li>Open a notepad or any text editor.</li>
							<li>Create a company JSON with different key-value pairs.</li>
              <li>Open a notepad or any text editor.</li>
              <li>Include an array field in the JSON.</li>
              <li>Use a nested JSON.</li>
              <li>Now navigate JSON <a href="https://jsonlint.com/?code=">Validator</a>.</li>
              <li>Paste your JSON structure inside the text area and click on validate to validate your JSON.</li>
						</ul>
            <img src="images/ex1.png" class="ex_images" >
					</p>
				</div>
			</div>

		</div>
	</div>
</body>
</html>