<?php
	$states="Mississippi Alabama Texas Massachusetts Kansas";
	$statesArray=[];
	$state1=explode(" ", $states);
	echo "<br>Original Array :<br>";
	foreach ($state1 as $i => $value) {
		print("STATES[$i] = $value<br>");
	}
	foreach ($state1 as $state) {
		if(preg_match('/xas$/', $state))
			$statesArray[0]=($state);
	}
	foreach ($state1 as $state) {
		if(preg_match('/^k.*s$/i', $state))
			$statesArray[1]=$state;
	}
	foreach ($state1 as $state) {
		if(preg_match('/m.*s$/i', $state))
			$statesArray[2]=$state;
	}
	foreach ($state1 as $state) {
		if(preg_match('/a$/', $state))
			$statesArray[3]=$state;
	}
	echo "<br>The resultant array is :<br>";
	foreach ($statesArray as $key => $value) {
		print("STATES[$key] = $value<br>");
	}
?>