<html>
<head>
<body>
<style>
table{
	border-collapse:collapse;
	width:100%;
	color:#588c7e;
	font-family:monospace;
	font-size:25px;
	text-align:center;
}
th{
	background-color:#d96459;
	color:white;
}
tr:nth-child(even){background-color:#f2f2f2;}
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 3px 7px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
</style>
	
<table>
<tr><th>name</th><th>email</th><th>contactno</th><th>moodel</th><th>color</th><th>pickup_adress</th><th>pickup_date_time</th><th>location</th><th>reason</th><th>price</th><th>numberplate</th></tr>
<?php
$hostname='localhost';
$username='root';
$password='';
$dbname='jatra';
$con=mysqli_connect($hostname,$username,$password,$dbname);
if($con)
{
	echo"conn true";
}
else
{
	echo"co/nn false";
}
$q="SELECT customer_details_c.name,customer_details_c.email,customer_details_c.contactno,car.Model,car.Colour,customer_details_c.pickup_address,customer_details_c.pickup_date_time,customer_details_c.location,customer_details_c.price,customer_details_c.reason,car.Number_PLate FROM car JOIN customer_details_c ON customer_details_c.Number_PLate=car.Number_PLate GROUP BY customer_details_c.name,customer_details_c.email,customer_details_c.contactno,car.Model,car.Colour,customer_details_c.pickup_address,customer_details_c.pickup_date_time,customer_details_c.location,customer_details_c.price,customer_details_c.reason,car.Number_PLate";
$r=mysqli_query($con,$q);
if($r)
{
while($data=mysqli_fetch_assoc($r)){
    $name=$data['name'];
    $email=$data['email'];
    $contactno=$data['contactno'];
    $Model=$data['Model'];
    $Colour=$data['Colour'];
    $pickup_address=$data['pickup_address'];
    $pickup_date_time=$data['pickup_date_time'];
    $location=$data['location'];
    $price=$data['price'];
    $reason=$data['reason'];
    $Number_PLate=$data['Number_PLate'];
    
    echo"<tr><td>$name</td><td>$email</td><td>$contactno</td><td>$Model</td><td>$Colour</td><td>$pickup_address</td><td>$pickup_date_time</td><td>$location</td><td>$reason</td><td>$price</td><td>$Number_PLate</td></tr>";
}

}
?>
<tr><th>total</td></tr>
<?php
$q="SELECT SUM(customer_details_c.price)AS total FROM customer_details_c";
$r=mysqli_query($con,$q);
if($r)
{
while($data=mysqli_fetch_assoc($r)){
  $total=$data['total'];
 
  echo"<tr><td>$total</td></tr>";
}
}

?>
</table>
</body>
</head>
</html>