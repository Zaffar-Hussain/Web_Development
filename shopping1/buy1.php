<!DOCTYPE html>
<html> 
<head>
    <style>
        table
        {
            border-collapse: collapse;
            width: 100%;
        }
        th,td{
            text-align: left;
            padding: 8px;

        }

        tr:nth-child(even)
        {
            background-color: #f2f2f2;
        }
        th
        {
            background-color: grey;
            color: white;
        }
        ul{
list-style-type: none;
margin: 0;
padding: 0;
overflow: hidden;
background-color: #333;

        }
        li{

            float: right;
        }
        li a{

            display: block;;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        li a:hover {
            background-color: #111;
        }
    </style>
</head>
<body>
	<h1>Shipping details</h3>
<ul>
    <li><a class="active" href="logout.php">Logout</a></li>
    <li><a href="updateinfo1.php">Edit Profile</a></li>
     <li><a href="products.php">Go Back</a></li>
</ul>
</ul></h1>

							
<?php
require('dbfunc1.php');
session_start();

$id=$_SESSION['id'];
if(isset($_REQUEST['delete'])){
    $delete=$_REQUEST['delete'];
$str=deleteship($delete);

    
}
$pdets=bill($id);
foreach ($pdets as $pdet) {
					echo "
							USER ID: $pdet[0]<br></br>
							Name : $pdet[1]<br></br>
							Email : $pdet[2]<br></br>
							Contact : $pdet[3]<br></br>
							Address : $pdet[4]<br></br>";
							}




 ?>
<hr color=black>
<table><tr>
							<td>Bill ID</td>
							<td>User ID</td>
							<td>Item ID</td>
							<td>Price/pc</td>
							<td>Quantity</td>
							<td>Total Amnt</td>
						<td>Status</td>
					<td>Purchased Date</td>
					<td>Cart ID</td>
					<td>delete</td></tr>
<?php


$id=$_SESSION['id'];
$url=$_SERVER['REQUEST_URI'];
$url="http://localhost".$url."";
$pdetss=billdetails($id);
foreach ($pdetss as $pdet) {
					echo "<tr>
							<td>$pdet[0]</td>
							<td>$pdet[1]</td>
							<td>$pdet[2]</td>
							<td>$pdet[3]</td>
							<td>$pdet[4]</td>
							<td>$pdet[5]</td>
							<td>$pdet[6]</td>
							<td>$pdet[7]</td>
							<td>$pdet[8]</td>
                            <td><a href=".$url."&delete=$pdet[0]>delete</a></td>
                            </tr>";
							
							}
                             $sum=0;
foreach ($pdetss as $pdet) {

   
    $sum=$sum+$pdet[5];
}
$_SESSION['sum']=$sum;


 ?>
</table>
<hr color=black>
<?php
$p=30;
$sum=$_SESSION['sum'];
echo "Total Payment:-"."Rs.".$sum;
echo"<br>";
echo "Shipping Charge:-"."Rs.".$p;
echo "<hr color=red>";
$t=(int)$sum+$p;
echo "Grand Total:-".$t;

?>
<form>
<br><div><br><button id="but" onclick="msg1()"; style="background-color: #4CAF50; width:1330px;height:50px;border: none;color: white;padding: 15px 32px; text-align: center;text-decoration:none;display: inline-block;font-size: 12px;">SHIP</button></div>
</form>
<script type="text/javascript">
	function msg1(){
	alert("Successfully shipped");

	}
</script>

 
</body>

</html>
