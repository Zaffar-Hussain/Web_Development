<?php
	echo "<h2>REFRESH PAGE</h2>";
	$name="counter.txt";
	$file=fopen($name, "r");
	$hits=fscanf($file, "%d");
	fclose($file);
	$hits[0]++;
	$file=fopen($name, "w");
	fprintf($file, "%d", $hits[0]);
	fclose($file);
	print "Number of views is : ".$hits[0];
	
?>