<!DOCTYPE html>
<html>
<head>
	<title>text growing and shrinking</title>
	<style>
		p{
			position: absolute;
			top: 50%;
			left: 50%;
			
			transform: translate(-50%,-50%)
		}
	</style>
</head>
<body>
<p id="demo"></p>
<script type="text/javascript">
	var val1=setInterval(inTimer,1000);
	var fs = 5;
	var ids=document.getElementByID('demo');
	function inTimer()
	{
		ids.innerHTML='TEXT-GROWING';
		ids.setAttribute('style',"font-size:"+fs+"px;color:red");
		fs+=5;
		if(fs>=50)
		{
			clearInterval(val1)
			val2=setInterval(deTimer,1000);
		}
	}
	function deTimer()
	{
		fs-=5;
		ids.innerHTML='TEXT-SHRINKING';
		ids.setAttribute('style',"font-size:"+fs+"px;color:blue");
		if(fs == 5)
		{
			clearInterval(val2);
		}
	}
</script>
</body>
</html>