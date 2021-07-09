<?php
	$a=array(array(4,5,6),array(7,8,9),array(1,4,9));
	$b=array(array(3,4,5),array(2,6,8),array(1,2,3));
	$m=count($a);
	$n=count($a[2]);
	$p=count($b);
	$q=count($b[2]);

	echo "The first matrix is:<br>";
	for($row=0;$row<$m;$row++){
		for($col=0;$col<$n;$col++){
			echo "".$a[$row][$col]."    ";
		}
		echo "<br>";
	}
	echo "<br>The second matrix is:<br>";
	for($row=0;$row<$p;$row++){
		for($col=0;$col<$q;$col++){
			echo "".$b[$row][$col]."    ";
		}
		echo "<br>";
	}
	echo "<br>The transpose of first matrix is:<br>";
	for($row=0;$row<$m;$row++){
		for($col=0;$col<$n;$col++){
			echo "".$a[$col][$row]."    ";
		}
		echo "<br>";
	}
	if(($m == $p) and ($n == $q))
	{
		echo "<br>Addition of two matrix is:<br>";
		for($row=0;$row<$m;$row++){
			for($col=0;$col<$m;$col++){
				echo "".$a[$row][$col]+$b[$row][$col]."    ";

			}
			echo "<br>";
		}
	}
	if($m == $q)
	{
		$result=array();
		for($i=0;$i<$m;$i++){
			for($j=0;$j<$m;$j++){
				$result[$i][$j]=0;
				for($k=0;$k<$n;$k++){
					$result[$i][$j] += $a[$i][$k]*$b[$k][$j];
				}
			}
		}
		echo "<br>Multiplication of two matrix is:<br>";
		for($row=0;$row<$m;$row++){
			for($col=0;$col<$q;$col++){
				echo "".$result[$row][$col]."   ";
			}
			echo "<br>";
		}
	}

?>