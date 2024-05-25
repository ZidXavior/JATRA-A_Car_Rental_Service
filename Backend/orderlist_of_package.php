<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>


<table style="width:100%">
<tr><th>name</th><th>email</th><th>contactno</th><th>pickup_adress</th><th>price</th><th>numberplate</th><th>p_id</th><th>hotels</th><th>rooms</th><th>date</th><th>pickup_time</th><th>place</th><th>spot1</th><th>spot2</th></tr>
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
$q="SELECT customer_details_e.name,customer_details_e.email,
customer_details_e.contactno,customer_details_e.pickup_address,
customer_details_e.price,customer_details_e.Number_PLate,package.p_id,package.hotel,package.rooms,package.date,package.Pickup_time,package.place,package.spot1,package.spot2 FROM package JOIN customer_details_e ON customer_details_e.p_id=package.p_id
 GROUP BY customer_details_e.name,customer_details_e.email,
customer_details_e.contactno,customer_details_e.pickup_address,
customer_details_e.price,customer_details_e.Number_PLate,package.hotel,package.rooms,package.date,package.Pickup_time,package.place,package.spot1,package.spot2";
 $r=mysqli_query($con,$q);
if($r)
{
    
while($data=mysqli_fetch_assoc($r)){
    $name=$data['name'];
    $email=$data['email'];
    $contactno=$data['contactno'];
    $pickup_address=$data['pickup_address'];
    $Pickup_time=$data['Pickup_time'];
    $price=$data['price'];
    $Number_PLate=$data['Number_PLate'];
    $hotel=$data['hotel'];
    $rooms=$data['rooms'];
    $date=$data['date'];
    $place=$data['place'];
    $spot1=$data['spot1'];
    $spot2=$data['spot2'];
    $p_id=$data['p_id'];
    echo"<tr><td>$name</td><td>$email</td><td>$contactno</td><td>$pickup_address</td><td>$price</td><td>$Number_PLate</td><td>$p_id</td><td>$hotel</td><td>$rooms</td><td>$date</td><td>$Pickup_time</td><td>$place</td><td>$spot1</td><td>$spot2</td><tr>";

}
}
?>
<tr><th>total</th></tr>
<?php
$q="SELECT SUM(customer_details_e.price)AS total FROM customer_details_e";
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