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
<tr><th>name</th><th>email</th><th>contactno</th><th>Seat</th><th>pickup_adress</th><th>pickup_date_time</th><th>price</th><th>reason</th><th>location</th><th>numberplate</th></tr>
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
$q="SELECT customer_details_t.name,customer_details_t.email,
customer_details_t.contactno,truck.Seat,customer_details_t.pickup_address,
customer_details_t.pickup_date_time,customer_details_t.location,customer_details_t.Price,customer_details_t.reason,truck.Number_Plate FROM truck JOIN customer_details_t ON customer_details_t.Number_Plate=truck.Number_Plate
 GROUP BY customer_details_t.name,customer_details_t.email,customer_details_t.contactno,truck.Seat,
 customer_details_t.pickup_address,customer_details_t.pickup_date_time,customer_details_t.location,customer_details_t.Price,customer_details_t.reason,truck.Number_Plate";
 $r=mysqli_query($con,$q);
if($r)
{
while($data=mysqli_fetch_assoc($r)){
    $name=$data['name'];
    $email=$data['email'];
    $contactno=$data['contactno'];
    $Seat=$data['Seat'];
    $pickup_address=$data['pickup_address'];
    $pickup_date_time=$data['pickup_date_time'];
    $location=$data['location'];
    $Price=$data['Price'];
    $reason=$data['reason'];
    $Number_Plate=$data['Number_Plate'];
    echo"<tr><td>$name</td><td>$email</td><td>$contactno</td><td>$Seat</td><td>$pickup_address</td><td>$pickup_date_time</td><td>$Price</td><td>$reason</td><td>$location</td><td>$Number_Plate</td></tr>";

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