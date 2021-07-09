<!DOCTYPE html>
<html>
<head>
	<title>calci</title>
	<style>
		table,th,tr
		{
			border:1px solid black;
			background-color: lightgreen;
			text-align: center;

		}
		table{margin: auto;}
		input{text-align: right;}
		p{background-color: lightgrey;}
	</style>
</head>
<body>
	<form method="post">
		<table>
			<caption>
				<h2>SIMPLE CALCULATOR</h2>
			</caption>
			<tr>
				<td>Value1</td>
				<td><input type="text" name="num1" /></td>
				<td rowspan="2"><input type="submit" name="submit" /></td>
			</tr>
			<tr>
				<td>Value2</td>
				<td><input type="text" name="num2" /></td>
			</tr>
	</form>
	<?php
		if(isset($_POST['submit']))
		{
			$num1=$_POST['num1'];
			$num2=$_POST['num2'];
			if(is_numeric($num1) and is_numeric($num2))
			{
				echo "<tr><td>Addition</td><td><p>".($num1+$num2)."</p></td></tr>";
				echo "<tr><td>Subtraction</td><td><p>".($num1-$num2)."</p></td></tr>";
				echo "<tr><td>Multiplication</td><td><p>".($num1*$num2)."</p></td></tr>";
				echo "<tr><td>Division</td><td><p>".($num1/$num2)."</p></td></tr>";
				echo "</table>";
			}
			else
				echo "<script type='text/javascript'>alert('ENTER A VALID NUMBER')</script>";
			
		}
	?>
</body>
</html>