<?php 
session_start();
$email=$_SESSION['email'];
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
$q="SELECT * FROM register WHERE email='$email'";
$r=mysqli_query($con,$q);
if(mysqli_num_rows($r)>0){
    $data=mysqli_fetch_assoc($r);
    $name=$data['name'];
}
else
{
    echo"failed";
}

echo"<h1 style='color: red';>$name _account</h1>";
?>


    
   
    
