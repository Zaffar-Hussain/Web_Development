<!DOCTYPE HTML>
<html>
<head>
	<title>vowels and reverse</title>
</head>
<body>
<script type="text/javascript">
	var str=prompt("ENTER ANY INPUT","");
	if(!isNaN(str))
	{
		var num,rev=0,remainder;
		num=parseInt(str);
		while(num!=0)
		{

			remainder=num%10;
			num=parseInt(num/10);
			rev=rev*10+remainder;
		}
		alert("Reverse of "+str+" is : "+rev);
	}
	else
	{
		str=str.toUpperCase();
		for(var i=0;i<str.length;i++)
		{
			var ch = str.charAt(i);
			if(ch == 'A' || ch == 'E' |ch == 'I' || ch == 'O' || ch == 'U')
				break;
		}
		if(i<str.length)
		{
			alert("Possition of the left most vowel is : "+(i+1));
		}
	}
</script>
</body>
</html>