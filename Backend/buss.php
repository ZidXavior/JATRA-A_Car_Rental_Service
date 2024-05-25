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
<tr><th>Number_plat</th><th>Seat</th><th>Price</th><th>Update</th><th>Delete</th></tr>
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
$show="SELECT * FROM bus";
$q=mysqli_query($con,$show);
if($q)
{
while($data=mysqli_fetch_assoc($q))
{
	$Number_plat=$data['Number_plat'];
$Seat=$data['Seat'];
$Price=$data['Price'];
echo"<tr><td>$Number_plat</td> <td>$Seat</td>   <td>$Price</td><td><a href='busu.php?Number_plat=$data[Number_plat]'>edit</td><td><a href='busd.php?Number_plat=$data[Number_plat]'>delete</a></td></tr>";
}
}
?>
</table>
</body>
</head>
</html>