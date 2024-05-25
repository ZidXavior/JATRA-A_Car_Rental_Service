<?php
$hostname='localhost';
$username='root';
$password='';
$dbname='project';
$con=mysqli_connect($hostname,$username,$password,$dbname);
if($con)
{
	echo"conn true";
}
else
{
	echo"co/nn false";
}
$id=$_GET['id'];
$model=$_GET['model'];
$color=$_GET['color'];
$nameplate=$_GET['nameplate'];
$price=$_GET['price'];
?>
<form action="updatec.php" method="POST">
<table>
<input type="name" placeholder=model name="model">
<br>
<input type="name" placeholder=color name="color">
<br>
<input type="name" placeholder=nameplate name="nameplate">
<br>
<input type="number_format" placeholder=price name="price">
</table>
<form>
