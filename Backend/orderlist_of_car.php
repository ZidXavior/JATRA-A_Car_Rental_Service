<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

	
<table style="width:100%">
<tr><th>name</th><th>email</th><th>contactno</th><th>moodel</th><th>color</th><th>pickup_adress</th><th>pickup_date</th><th>pickup_time</th><th>location</th><th>reason</th><th>price</th><th>numberplate</th><th>days</th></tr>
<?php
$hostname='localhost';
$username='root';
$password='';
$dbname='jatra';
$con=mysqli_connect($hostname,$username,$password,$dbname);
if($con)
{
	echo"";
}
else
{
	echo"co/nn false";
}
$q="SELECT customer_details_c.name,customer_details_c.email,customer_details_c.contactno,car.Model,car.Colour,customer_details_c.pickup_address,customer_details_c.pickup_date,customer_details_c.pickup_time,customer_details_c.days,customer_details_c.location,customer_details_c.price,customer_details_c.reason,car.Number_PLate FROM car JOIN customer_details_c ON customer_details_c.Number_PLate=car.Number_PLate GROUP BY customer_details_c.name,customer_details_c.email,customer_details_c.contactno,car.Model,car.Colour,customer_details_c.pickup_address,customer_details_c.pickup_date,customer_details_c.pickup_time,customer_details_c.days,customer_details_c.location,customer_details_c.price,customer_details_c.reason,car.Number_PLate ORDER BY pickup_date";
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
    $pickup_date=$data['pickup_date'];
    $pickup_time=$data['pickup_time'];
    $location=$data['location'];
    $price=$data['price'];
    $reason=$data['reason'];
    $Number_PLate=$data['Number_PLate'];
    $days=$data['days'];
    
    echo"<tr><td>$name</td><td>$email</td><td>$contactno</td><td>$Model</td><td>$Colour</td><td>$pickup_address</td><td>$pickup_date</td><td>$pickup_time</td><td>$location</td><td>$reason</td><td>$price</td><td>$Number_PLate</td><td>$days</td></tr>";
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