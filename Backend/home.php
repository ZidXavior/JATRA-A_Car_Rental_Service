<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 30px 80px;
  font-size:50px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}</style>
<body>
<a href='car.php'>car</a>
    <a href='microbus.php'>microbus</a>
<a href='bus.php'>bus</a>
    <a href='truck.php'>truck</a>
    <a href='locat.php'>location</a><br>
    <br><a href='orderlist_of_car.php'>car orderlist</a>
    <a href='orderlist_of_mirco.php'>microbus orderlist</a>
    <a href='orderlist_of_bus.php'>bus orderlist</a><br>
    <br><a href='orderlist_of_truck.php'>truck orderlist</a>
    <a href='orderlist_of_package.php'>package orderlist</a>
    <a href='customer_details_b.php'>customer_details_b</a><br>
   <br> <a href='customer_details_c.php'>customer_details_c</a>
    <a href='customer_details_m.php'>customer_details_m</a>
    <a href='packages.php'>package</a><br>
    <br><a href='customer_details_t.php'>customer_details_t</a>
    <a href='customer_details_e.php'>customer_details_e</a>
   
    
    <br>
    <br>
</body>
</html>
<?php
session_start();
if (isset($_SESSION['Email'])){


echo "<a href='logout.php'>Logout</a>";
}
?>