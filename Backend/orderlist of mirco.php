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
<tr><th>name</th><th>email</th><th>contactno</th><th>model</th><th>Seat</th><th>pickup_adress</th><th>pickup_date_time</th><th>location</th><th>reason</th><th>price</th><th>numberplate</th></tr>
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
$q="SELECT customer_details_m.name,customer_details_m.email,customer_details_m.contactno,microbus.Model,microbus.seat,customer_details_m.pickup_address,customer_details_m.pickup_date_time,customer_details_m.location,customer_details_m.reason,customer_details_m.price,microbus.Number_PLate FROM microbus JOIN customer_details_m ON customer_details_m.Number_PLate=microbus.Number_PLate GROUP BY customer_details_m.name,customer_details_m.email,customer_details_m.contactno,microbus.Model,microbus.seat,customer_details_m.pickup_address,customer_details_m.pickup_date_time,customer_details_m.location,customer_details_m.reason,customer_details_m.price,microbus.Number_PLate";
$r=mysqli_query($con,$q);
if($r)
{
while($data=mysqli_fetch_assoc($r)){
    $name=$data['name'];
    $email=$data['email'];
    $contactno=$data['contactno'];
    $Model=$data['Model'];
    $Seat=$data['Seat'];
    $pickup_address=$data['pickup_address'];
    $pickup_date_time=$data['pickup_date_time'];
    $location=$data['location'];
    $Price=$data['Price'];
    $reason=$data['reason'];
    $Number_Plate=$data['Number_Plate'];
    echo"<tr><td>$name</td><td>$email</td><td>$contactno</td><td>$Model</td><td>$Seat</td><td>$pickup_address</td><td>$pickup_date_time</td><td>$location</td><td>$reason</td><td>$Price</td><td>$Number_Plate</td></tr>";

}
}
?>
<tr><th>total</td></tr>
<?php
$q="SELECT SUM(customer_details_m.price)AS total FROM customer_details_m";
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