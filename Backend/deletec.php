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
$Number_PLate=$_GET['Number_PLate'];
$d="DELETE FROM car WHERE Number_PLate='$Number_PLate'";
$q=mysqli_query($con,$d);
if($q)
{
	echo"<font color='green'>Deleted from database";
}
else
{
	echo"<font color='red'>Failed to delete";
}
?>

	