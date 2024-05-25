<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

	
<table style="width:100%">
<tr><th>name</th><th>email</th><th>contactno</th><th>Seat</th><th></th><th>pickup_adress</th><th></th><th>pickup_date</th><th>pickup_time</th><th></th><th>price</th><th>reason</th><th>location</th><th>numberplate</th><th>days</th></tr>
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
$q="SELECT customer_details_b.name,customer_details_b.email,
customer_details_b.contactno,bus.Seat,customer_details_b.pickup_address,
customer_details_b.pickup_date,customer_details_b.pickup_time,customer_details_b.days,customer_details_b.location,customer_details_b.Price,customer_details_b.reason,bus.Number_plat FROM bus JOIN customer_details_b ON customer_details_b.Number_plat=bus.Number_plat
 GROUP BY customer_details_b.name,customer_details_b.email,customer_details_b.contactno,bus.Seat,
 customer_details_b.pickup_address,customer_details_b.pickup_date,customer_details_b.pickup_time,customer_details_b.days,customer_details_b.location,customer_details_b.Price,customer_details_b.reason,bus.Number_plat";
 $r=mysqli_query($con,$q);
if($r)
{
while($data=mysqli_fetch_assoc($r)){
    $name=$data['name'];
    $email=$data['email'];
    $contactno=$data['contactno'];
    $Seat=$data['Seat'];
    $pickup_address=$data['pickup_address'];
    $pickup_date=$data['pickup_date'];
    $pickup_time=$data['pickup_time'];
    $location=$data['location'];
    $Price=$data['Price'];
    $reason=$data['reason'];
    $Number_plat=$data['Number_plat'];
      $days=$data['days'];

    echo"<tr><td>$name</td><td>$email</td><td>$contactno</td><td>$Seat</td><th></th><td>$pickup_address</td><th></th><td>$pickup_date</td><td>$pickup_time</td><th></th><td>$Price</td><td>$reason</td><td>$location</td><td>$Number_plat</td><td>$days</td></tr>";

}
}
?>
<tr><th>total</td></tr>
<?php
$q="SELECT SUM(customer_details_b.price)AS total FROM customer_details_b";
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