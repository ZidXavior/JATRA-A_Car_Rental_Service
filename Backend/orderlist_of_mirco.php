<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

	
<table style="width:100%">
<tr><th>name</th><th>email</th><th>contactno</th><th>model</th><th>Seat</th><th>pickup_adress</th><th>pickup_date</th><th>pickup_time</th><th>location</th><th>reason</th><th>price</th><th>numberplate</th><th>days</th></tr>
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
$q="SELECT customer_details_m.name,customer_details_m.email,
customer_details_m.contactno,customer_details_m.days,microbus.Model,microbus.Seat,customer_details_m.pickup_address,
customer_details_m.pickup_date,customer_details_m.pickup_time,customer_details_m.location,customer_details_m.Price,customer_details_m.reason,microbus.Number_Plate FROM microbus JOIN customer_details_m ON customer_details_m.Number_Plate=microbus.Number_Plate
 GROUP BY customer_details_m.name,customer_details_m.email,customer_details_m.contactno,customer_details_m.days,microbus.Model,microbus.Seat,
 customer_details_m.pickup_address,customer_details_m.pickup_date,customer_details_m.pickup_time,customer_details_m.location,customer_details_m.Price,customer_details_m.reason,microbus.Number_Plate";
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
    $pickup_date=$data['pickup_date'];
    $pickup_time=$data['pickup_time'];
    $location=$data['location'];
    $Price=$data['Price'];
    $reason=$data['reason'];
    $Number_Plate=$data['Number_Plate'];
    $days=$data['days'];
    echo"<tr><td>$name</td><td>$email</td><td>$contactno</td><td>$Model</td><td>$Seat</td><td>$pickup_address</td><td>$pickup_date</td><td>$pickup_time</td><td>$location</td><td>$Price</td><td>$reason</td><td>$Number_Plate</td><td>$days</td></tr>";

}
}
else
echo"false";
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