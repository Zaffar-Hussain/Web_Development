<html>

<head>
	<title>first page</title>
</head>

<body>
	<form action=" " method="post">
	problem 1 -- checking for palindrome <hr>
	Enter the number: <input type="text" name="number" value="<?php if(isset($_POST['number'])) echo $_POST['number'] ?>"><br> <input type="submit" name="submit" value="submit"/><br>
	<?php
	if(isset($_POST['submit']))
	{
	//palindrome operation
	$var=intval($_POST["number"]);
	$temp=$var;
	$sum=0;
	$rem=0;
	while($var)
	{
		$rem=$var%10;
		$sum=$sum*10+$rem;
		$var=intval($var/10);
		
	}
	if($sum==$temp)
		echo $temp." is a palindrome number<br>";
	else
		echo $temp." is not a palindrome number<br>";


	//automorphic numbers
	//automrphic - sequence of sum of square of number is equal to one
	echo "<hr><br><br><br>problem 2 -- automorphic numbers between 1-100<hr>";
	$num=0;
	$x=0;
	$s=0;
	for ($x=1;$x<=100;$x++)
	{	
		$a=(string)$x;
		$b=strlen($a);
		if($b==1)
		{
		$s=$x*$x;
		$z=(string)$s;
		if($x==$z[strlen($z)-1])
			echo $x." ";
		else
			continue;
		}
		else if($b==2)
		{
		$s=$x*$x;
		$z=(string)$s;
		if($a[0]==$z[strlen($z)-2] && $a[1]==$z[strlen($z)-1])
			echo $x." ";
		else
			continue;
		}
		else if($b==3)
		{
		$s=$x*$x;
		$z=(string)$s;
		if($a[0]==$z[strlen($z)-3] && $a[1]==$z[strlen($z)-2] && $a[2]==$z[strlen($z)-1])
			echo $x." ";
		else
			continue;
		}
		else
			continue;
	}
	echo "<hr><br><br><br>";
	//happy number
	echo "problem-3 -- checking for happy number<hr>";
	$hp=intval($_POST["number"]);
	$hpl=strlen($hp);
	$um=0;
	 while($um!=1 && $um!=4)
  	{
   		$um=0;
   		while($hp>0)
  		{
    		$j=$hp%10;
    		$um+=($j*$j);
    		$hp=$hp/10; 
  		}
  		$hp=$um;
  	}
  	if($um==1)
 		echo "number entered in textbox is a <b>Happy Number<b><br>";
 	else
 		echo "number entered in textbox is a <b>UnHappy Number<b><br>";

	//representing number in digits
	$var=intval($_POST["number"]);
	$q=(string)$var;
	$c=strlen($var);
	echo "<hr>problem-4--converting numbers to digits<hr>";
	for ($i=0; $i <= $c-1; $i++) { 
		# code...
		if ($i==$c-1) {
			# code...
			echo "".$q[$c-1]." units";
		}
		if ($i==$c-2) {
			# code...
			echo "".$q[$c-2]." tens&nbsp";
		}
		if ($i==$c-2) {
			# code...
			echo "".$q[$c-2]." tens&nbsp";
		}
	}
	}
	?>
</form>
</body>

</html>