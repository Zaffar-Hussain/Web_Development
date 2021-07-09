<!DOCTYPE html>
<html>
<head>
  <style type="text/css">

  </style>
</head>
<body>

<h2>JavaScript For Loop</h2>

<div id="main" style="background-color: yellow"></div>

<script>
  var i;
  for(i=0;i<4;i++)
  {
var div = document.createElement("div");
div.style.width = "100px";
div.style.height = "100px";
div.style.background = "red";
div.style.color = "white";
div.style.border="3px solid black";
//div.style.margin-top="20px";
//div.style.padding-bottom="20px";
div.innerHTML = "<br>hahaahahahah<br>";
document.getElementById("main").appendChild(div);
}


</script>

</body>
</html>