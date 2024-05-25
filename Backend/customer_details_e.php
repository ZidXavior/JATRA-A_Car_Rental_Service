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
<tr><th>name</th><th>email</th><th>contactno</th><th>pickup_adress</th><th>price</th><th>numberplate</th><th>p_id</th><th>delete</th></tr>
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
	echo"conn false";
}
$show="SELECT * FROM customer_details_e";
$q=mysqli_query($con,$show);
if($q)
{
    while($data=mysqli_fetch_assoc($q)){
        $name=$data['name'];
        $email=$data['email'];
        $contactno=$data['contactno'];
        $pickup_address=$data['pickup_address'];
        $price=$data['price'];
        $Number_plate=$data['Number_PLate'];
        $p_id=$data['p_id'];
        echo"<tr><td>$name</td><td>$email</td><td>$contactno</td><td>$pickup_address</td><td>$price</td><td>$Number_plate</td><td>$p_id</td><td><a href='customer_e_d.php?email=$data[email]'>delete</a></td></tr>";
    
    }
}
    
?>
</table>
</body>
</head>
</html>