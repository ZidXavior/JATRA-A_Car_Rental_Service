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
<tr><th>p_id</th><th>hotel</th><th>rooms</th><th>price</th><th>date</th><th>Pickup_time</th><th>Number_PLate</th><th>place</th><th>spot1</th><th>spot2</th></tr>
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
$show="SELECT * FROM package";
$q=mysqli_query($con,$show);
if($q)
{
while($data=mysqli_fetch_assoc($q))
{
	$Number_PLate=$data['Number_PLate'];
$p_id=$data['p_id'];
$hotel=$data['hotel'];
$rooms=$data['rooms'];
$price=$data['price'];
$date=$data['date'];
$Pickup_time=$data['Pickup_time'];
$Number_PLate=$data['Number_PLate'];
$place=$data['place'];
$spot1=$data['spot1'];
$spot2=$data['spot2'];
echo"<tr><td>$p_id</td><td>$hotel</td><td>$rooms</td><td>$price</td><td>$date</td><td>$Pickup_time</td><td>$Number_PLate</td><td>$place</td><td>$spot1</td><td>$spot2</td></tr>";
}
}
?>
</table>
</body>
</head>
</html>