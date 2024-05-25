<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

	
<table style="width:100%">
<tr><th>name</th><th>email</th><th>contactno</th><th>pickup_adress</th><th>pickup_date</th><th>pickup_time</th><th>price</th><th>reason</th><th>location</th><th>numberplate</th><th>days</th></tr>
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
$q="SELECT customer_details_t.name,customer_details_t.email,
customer_details_t.contactno,customer_details_t.pickup_address,
customer_details_t.pickup_date,customer_details_t.pickup_time,customer_details_t.days,customer_details_t.location,customer_details_t.Price,customer_details_t.reason,truck.Number_Plate FROM truck JOIN customer_details_t ON customer_details_t.Number_Plate=truck.Number_Plate
 GROUP BY customer_details_t.name,customer_details_t.email,customer_details_t.contactno,
 customer_details_t.pickup_address,customer_details_t.pickup_date,customer_details_t.pickup_time,customer_details_t.days,customer_details_t.location,customer_details_t.Price,customer_details_t.reason,truck.Number_Plate";
 $r=mysqli_query($con,$q);
if($r)
{
while($data=mysqli_fetch_assoc($r)){
    $name=$data['name'];
    $email=$data['email'];
    $contactno=$data['contactno'];
    $pickup_address=$data['pickup_address'];
    $pickup_date=$data['pickup_date'];
    $pickup_time=$data['pickup_time'];
    $location=$data['location'];
    $Price=$data['Price'];
    $reason=$data['reason'];
    $Number_Plate=$data['Number_Plate'];
    $days=$data['days'];
    echo"<tr><td>$name</td><td>$email</td><td>$contactno</td><td>$pickup_address</td><td>$pickup_date</td><td>$pickup_time</td><td>$Price</td><td>$reason</td><td>$location</td><td>$Number_Plate</td><td>$days</td></tr>";

}
}
?>
<tr><th>total</td></tr>
<?php
$q="SELECT SUM(customer_details_t.price)AS total FROM customer_details_t";
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