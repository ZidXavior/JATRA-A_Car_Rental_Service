
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
if(isset($_POST['Number_plat']) && isset($_POST['Seat']) && isset($_POST['Price'])){
    $Number_plat=$_POST['Number_plat'];
    $Seat=$_POST['Seat'];
$Price=$_POST['Price'];
$insert="INSERT INTO bus(Number_plat,Seat,Price)VALUES('$Number_plat','$Seat','$Price')";

if(mysqli_query($con,$insert))
{
echo"true";
}

	else
	{
		echo"false";
	}
}
?>
<!DOCTYPE html>


<html>

    
   
    
    <style>
    
        *{margin: 0; padding: 0;}
        body{background: #ecf1f4; font-family: sans-serif;}
        
        .form-wrap{ width: 320px; background: #3e3d3d; padding: 40px 20px; box-sizing: border-box; position: fixed; left: 50%; top: 50%; transform: translate(-50%, -50%);}
        h1{text-align: center; color: #fff; font-weight: normal; margin-bottom: 20px;}
        
        input{width: 100%; background: none; border: 1px solid #fff; border-radius: 3px; padding: 6px 15px; box-sizing: border-box; margin-bottom: 20px; font-size: 16px; color: #fff;}
        
        input[type="button"]{ background: #bac675; border: 0; cursor: pointer; color: #3e3d3d;}
        input[type="button"]:hover{ background: #a4b15c; transition: .6s;}
        
        ::placeholder{color: #fff;}
    
    </style>

    <body>
    
        <div class="form-wrap">
        
            <form action="" method="POST">
            
                <h1>bus</h1>
                <input type="text" placeholder=Number_plat name="Number_plat">

               <input type="text" placeholder=Seat name="Seat">

<input type="number_format" placeholder=price name="Price">

<input type="submit" placeholder=submit value="submit">

            
            </form>
        
        </div>
    
    
    
    </body>



</html>

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
$Number_plat=$_GET['Number_plat'];
$d="DELETE FROM bus WHERE Number_plat='$Number_plat'";
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
	echo"conn true";
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
 $Number_plat= $_GET['Number_plat'];
 $sql="SELECT * FROM bus WHERE Number_plat='$Number_plat'";
 $r=mysqli_query($con,$sql);
 $data=mysqli_fetch_assoc($r);
 $Number_plat=$data['Number_plat'];
$Seat=$data['Seat'];
$Price=$data['Price'];
 if(isset($_POST['Number_plat']) && isset($_POST['Seat']) && isset($_POST['Price'])){
    $Number_plat=$_POST['Number_plat'];
    $Seat=$_POST['Seat'];
$Price=$_POST['Price'];
$sql="UPDATE bus SET Number_plat='$Number_plat',Seat='$Seat',Price='$Price' WHERE Number_plat='$Number_plat'";
$r=mysqli_query($con,$sql);
if($r)
{
	echo"update succesfully";
}
else
{
	echo"update failed";
}

 }
?>
<!DOCTYPE html>


<html>

    
   
    
    <style>
    
        *{margin: 0; padding: 0;}
        body{background: #ecf1f4; font-family: sans-serif;}
        
        .form-wrap{ width: 320px; background: #3e3d3d; padding: 40px 20px; box-sizing: border-box; position: fixed; left: 50%; top: 50%; transform: translate(-50%, -50%);}
        h1{text-align: center; color: #fff; font-weight: normal; margin-bottom: 20px;}
        
        input{width: 100%; background: none; border: 1px solid #fff; border-radius: 3px; padding: 6px 15px; box-sizing: border-box; margin-bottom: 20px; font-size: 16px; color: #fff;}
        
        input[type="button"]{ background: #bac675; border: 0; cursor: pointer; color: #3e3d3d;}
        input[type="button"]:hover{ background: #a4b15c; transition: .6s;}
        
        ::placeholder{color: #fff;}
    
    </style>

    <body>
    
        <div class="form-wrap">
        
            <form action="" method="POST">
            
                <h1>bus</h1>

                <input type="text" placeholder=Number_plat value="<?php echo"$Number_plat"?>" name="Number_plat">

               <input type="text" placeholder=Seat value="<?php echo"$Seat"?>" name="Seat">

<input type="number_format" placeholder=Price value="<?php echo"$Price"?>" name="Price">

<input type="submit" placeholder=submit value="update">

            
            </form>
        
        </div>
    
    
    
    </body>



</html>

