
<?php
	$xml=simplexml_load_file("student_det.xml") or die("Error: Cannot create object");
	foreach($xml->children() as $books) {
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Result Board</title>
	<style type="text/css">
		table {
			border-radius: 2px;
			border-color: solid black;
			border:2px solid black;
			border-collapse: collapse;
		}
		thead,tr,td {
			border-radius: 2px;
			border-color: solid black;
			border:2px solid black;
		}
		

	</style>
</head>
<body>

	<table>
		<thead>
				<tr>
					<td rowspan="2">NAMES</td>
					<td rowspan="2">ROLL NUMBER</td>
					<td rowspan="" colspan="3"><center>SUBJECTS</center></td>
					<td rowspan="2">TOTAL MARKS</td>
					<td rowspan="2">STATUS</td>
				</tr>
				<tr>
					<td>sub1</td><td>sub2</td><td>sub3</td>
				</tr>
		</thead>
		<tbody>
			
			
		</tbody>
	</table>
	<p id="demo"></p>
	

	<!--
	<script>
	var text = ['{"name":"rajiv",marks":{"Maths":"18","English":"21","Science":"45"},"rollNumber":"KV2017-5A2"}'];
		var obj = JSON.parse(text);
		var x;
		document.getElementById("demo").innerHTML = obj.marks.Maths; 
	</script>
	 
		{"name":"rajiv","marks":{"Maths":"18","English":"21","Science":"45"},"rollNumber":"KV2017-5A2"}, {"name":"abhishek","marks":{"Maths":"43","English":"30","Science":"37"},"rollNumber":"KV2017-5A1"}, {"name":"zoya","marks":{"Maths":"42","English":"31","Science":"50"},"rollNumber":"KV2017-5A3"}  
	-->
</body>
</html>