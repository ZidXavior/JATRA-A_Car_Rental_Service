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
<tr><th>name</th><th>email</th><th>contactno</th><th>pickup_address</th><th>Pickup_time</th><th>price</th><th>Number_plate</th><th>location</th><th>hreason</th><th>days</th><th>delete</th></tr>
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
	echo"conn false";
}
$show="SELECT * FROM customer_details_c";
$q=mysqli_query($con,$show);
if($q)
{
    while($data=mysqli_fetch_assoc($q)){
        $name=$data['name'];
        $email=$data['email'];
        $contactno=$data['contactno'];
        $pickup_address=$data['pickup_address'];
        $Pickup_time=$data['pickup_time'];
        $price=$data['price'];
        $Number_plate=$data['Number_PLate'];
        $location=$data['location'];
        $reason=$data['reason'];
        $days=$data['days'];
        echo"<tr><td>$name</td><td>$email</td><td>$contactno</td><td>$pickup_address</td><td>$Pickup_time</td><td>$price</td><td>$Number_plate</td><td>$location</td><td>$reason</td><td>$days</td><td><a href='package_d.php?email=$data[email]'>delete</a></td></tr>";
    
    }
}
    
?>
</table>
</body>
</head>
</html>