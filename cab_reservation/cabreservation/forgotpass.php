<?php
  require('dbfun.php');
  $msg="";
  if(isset($_REQUEST['submit1']))
  {
    $id=$_REQUEST['id'];
    if(checkid($id))
	{
		 $q=getQuestion($id);
	}
	else
		 $msg="<font color=red>user id doesnot exists</font>";
}

if(isset($_REQUEST['submit2']))
 {
      $que=$_REQUEST['question'];
  		$answer=$_REQUEST['answer'];

  		$pwd=checkAns($que,$answer);
  	 if($pwd)
         $msg="<font color=purple>pasword is".$pwd."</font>";
    else
       $msg="<font color=red>Wrong answer</font>";

 }

  ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
  body
  {
    background-image:url(c3.jpg);
    background-size:cover;
  }
  .aa
  {
    width:400px;
    height:250px;
    background-color:rgba(0,0,0,0.5);
    margin:0 auto;
    margin-top:100px;
    padding-top:30px;
    padding-left: 60px;
    border-radius:15px;
    color:white;
    font-weight:bolder;
    box-shadow:inset 4px 4px rgba(0,0,0,20);
  }
  .aa input[type="submit"]
  {
    width:100px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:skyblue;
    font-weight:bolder;
  }
  .aa input[type="text"]
  {
    width:200px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:white;
  }
  .aa input[type="password"]
  {
    width:200px;
    height:30px;
    border:0;
    border-radius:5px;
    background-color:white;
  }
  
  </style>
<body>
	<div class="aa">
	<form name=ques method="">
	 <label><b>Username</b></label>
    <input name="id" type="text" class="inputvalues" placeholder="Type username"/><br>
    <input name="submit1" type="submit"  value="Submit"/><br><br>
   <br> <b>Question</b><SELECT name=question>
		<option value="select">select</option>
		<?php
			$qnarray= $q;
			//foreach ($qnarray as $que) 
			//{
				if($_REQUEST['question']==$qnarray)
					echo "<option>".$qnarray."</option>";
				else
					echo "<option>".$qnarray."</option>";
			//}
		?>
		</SELECT><br><br>

	<label><b>Answer</b></label>
    <input name="answer" type="text" class="inputvalues" placeholder=""/><br><br>
    <input name="submit2" type="submit"  value="Submit"/>	
<a href="login.php">Goto Login</a>
</form>
 <?php echo $msg; ?>
</div>
</body>
</html>