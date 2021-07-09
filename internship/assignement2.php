<html>

	<head>
		<title>second assignement page</title>
	</head>
	<body>

		<form action="assignement2.php" method="post">
			<div style="background-color:yellow"><marquee>assignement2----frequency of character | eliminating extra space | convert sentence to title case convert word to toggle case | convert into short name</marquee></div><br>
			Enter the string: <input type="text" name="strr" value="<?php if(isset($_POST['strr'])) echo $_POST['strr'] ?>"><hr><br>
			
			<?php
			//frequency of character | eliminating extra space | convert sentence to title case 
			//convert word to toggle case | convert into short name 
			if(isset($_POST['submit']))
			{
			//1-counting frequency of character sentence
			echo "problem 1 -- finding frequency of characters. <hr>";
			$var=$_POST["strr"];
			$data=(string)$var;
			/*syntax => count_chars(string $string,int $mode=0);
			$mode => 0 - array with byte value as key and frequency of every byte as value.
					 1 - same as 0 but freq>0 are listed.
					 2 - same as 0 but freq=0 are listed.
					 3 - string containing unique val is returned.
					 4 - string containing all not used char is returned.
			*/
			foreach (count_chars($data,1) as $key => $value) {
				# code...
				echo "The frequency of character &nbsp <b>".chr($key)."</b> &nbsp in the sting is <b>".$value."</b><br>";
			}

			//2-eliminating extra space in the string
			echo "<hr>problem 2 -- eliminating extra white space. <hr>";
			//using <pre> tag to eliminate extra space using regex '/\s+/'
			$rep="<pre>".$data."</pre>";
			echo "The entered string is:-".$rep."<br>";
			$non_rep=trim(preg_replace('/\s+/', ' ', $rep));
			echo "The string after eliminating extra white space is:-".$non_rep."<br>";
			}
			?>
			<hr><hr>Enter the sentence: <input type="text" placeholder="enter the sentence" name="strrr" value="<?php if(isset($_POST['strrr'])) echo $_POST['strrr'] ?>" />
			<input type="submit" name="submit" value="submit"/><br>
			<?php
			if(isset($_POST['submit']))
			{
			$ar=$_POST["strrr"];
			$data=(string)$ar;
			//3-cnverting to title case
			echo "<hr>problem 3 -- Converting sentence to Title Case. <hr>";
			echo "The entered sentence is:-".$data."<br>";
			/*
			first eleminate all extra space and then split the words using explode() or preg_split()
			then convert each words first letter to caps.
			explode() - splits based on given delim
			preg_split() - same as split but regex are accepted as i/p param for patterns
			*/
			echo "The sentence in titlecase is:-<br>";
			$splits=preg_split("/\s/", $data);
			for($j=0;$j<sizeof($splits);$j++){
				$splits[$j]=ucfirst($splits[$j]);
				echo "<b>".$splits[$j]."</b>&nbsp";
			}
			
			//4-converting t tOGGLE cASE.
			echo "<hr>problem 4 -- Converting sentence to tOGGLE cASE. <hr>";
			echo "The entered sentence is:-".$data."<br>";
			echo "The sentence in tOGGLE cASE is:-<br>";
			/*$splitss=preg_split("/\s/", $data);
			//first converting the whole string to uppercase
			for($j=0;$j<sizeof($splitss);$j++){
				$splitsss[$j]=strtoupper($splitss[$j]);
			}
			//than converting the first letter of each word to lowercase.
			for($z=0;$z<sizeof($splitsss);$z++){
				$splitses[$z]=lcfirst($splitsss[$z]);
				echo "<b>".$splitses[$z]."</b>&nbsp";
			}*/

			//5-short form for names.
			echo "<hr>problem 5 -- printing the name in short form. <hr>";
			echo "The entered name is:-".$data."<br>";
			echo "The name in short form is:- ";
			$name=preg_split("/\s/", $data);
			//first converting the whole string to uppercase
			for($j=0;$j<=sizeof($name)-1;$j++)
			{
				if($j==sizeof($name)-1)
				{
					$name[$j]=ucfirst($name[$j]);
					echo "".$name[$j];
					break;
				}
				else
				{
					$name_part=$name[$j];
					$name_part[0]=ucfirst($name_part[0]);
					echo "".$name_part[0]."&nbsp";
				}
			}
			}
			?>
		</form>
	</body>
</html>
