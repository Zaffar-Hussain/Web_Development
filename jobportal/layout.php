<!DOCTYPE html>
<html lang="en">
<head>
<title>Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
  background-color: #718093;
  background-image: url('image/job10.png');
  background-size: cover;
  background-repeat: no-repeat;
  padding: 100px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create three unequal columns that floats next to each other 
.column {
  float: left;
  padding: 10px;
}*/

/* Left and right column 
.column.side {
  width: 25%;

}*/

.column.side {
  width: 30%;
  position: relative;
  background-color: #dcdde1;
  float: right;
}
/* Middle column */
.column.middle {
  width: 70%;
  background-color: #718093;
  position: relative;
  left: 0%;
  float: left;
  
}

.row {
  width: 100%;
  background-color: #dcdde1;
  float: left;
  
  
}

/* Clear floats after the columns 
.row:after {
  content: "";
  display: table;
  clear: both;
}*/

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */

/* Style the footer */
.footer {
  background-color: #2f3640;
  padding: 30px;
  text-align: center;
  position: relative;
  clear: both;
}
</style>
</head>
<body>

<div class="header">
  <h1><font color="white">Header</font></h1>
  <p>Resize the browser window to see the responsive effect.</p>
</div>

<div class="topnav">
  <a href="#">Home</a>
  <a href="#">Login</a>
  <a href="#">Register</a>
  <a href="#">About Us</a>
  <a href="#">FAQ's</a>
</div>


  
  <div class="row">
  <div class="column middle">
    <h2>Main Content</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
    
  </div>
  <div class="column side">
    <h2>Side Content</h2>
    
  </div>
  
  </div>


<div class="footer">
  <p>Footer</p>
</div>
  
</body>
</html>

