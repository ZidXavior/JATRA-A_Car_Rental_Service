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
$email=$_GET['email'];
echo$email;
$d="DELETE FROM customer_details_b WHERE email='$email'";
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

	