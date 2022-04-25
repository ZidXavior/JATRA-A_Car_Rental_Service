
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
if(isset($_POST['Number_Plate']) && isset($_POST['Model']) && isset($_POST['Seat']) && isset($_POST['Price'])){
    $Number_Plate=$_POST['Number_Plate'];
    $Model=$_POST['Model'];
    $Seat=$_POST['Seat'];
$Price=$_POST['Price'];
$insert="INSERT INTO microbus(Number_Plate,Model,Seat,Price)VALUES('$Number_Plate','$Model','$Seat','$Price')";

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
            
                <h1>microbus</h1>
                <input type="text" placeholder=Number_Plate name="Number_Plate">

                <input type="text" placeholder=Model name="Model">

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
$Number_Plate=$_GET['Number_Plate'];
$d="DELETE FROM microbus WHERE Number_Plate='$Number_Plate'";
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
<tr><th>Number_Plate</th><th>Model</th><th>Seat</th><th>Price</th><th>Update</th><th>Delete</th></tr>
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
$show="SELECT * FROM microbus";
$q=mysqli_query($con,$show);
if($q)
{
while($data=mysqli_fetch_assoc($q))
{
	$Number_Plate=$data['Number_Plate'];
    $Model=$data['Model'];
$Seat=$data['Seat'];
$Price=$data['Price'];
echo"<tr><td>$Number_Plate</td><td>$Model</td> <td>$Seat</td>   <td>$Price</td><td><a href='microbusu.php?Number_Plate=$data[Number_Plate]'>edit</td><td><a href='microbusd.php?Number_Plate=$data[Number_Plate]'>delete</a></td></tr>";
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
 $Number_Plate= $_GET['Number_Plate'];
 $sql="SELECT * FROM microbus WHERE Number_Plate='$Number_Plate'";
 $r=mysqli_query($con,$sql);
 $data=mysqli_fetch_assoc($r);
 $Number_Plate=$data['Number_Plate'];
 $Model=$data['Model'];
$Seat=$data['Seat'];
$Price=$data['Price'];
 if(isset($_POST['Number_Plate']) && isset($_POST['Model']) && isset($_POST['Seat']) && isset($_POST['Price'])){
    $Number_Platet=$_POST['Number_Plate'];
    $Seat=$_POST['Seat'];
$Price=$_POST['Price'];
$sql="UPDATE microbus SET Number_Plate='$Number_Plate',Model='$Model',Seat='$Seat',Price='$Price' WHERE Number_Plate='$Number_Plate'";
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
            
                <h1>microbus</h1>

                <input type="text" placeholder=Number_Plate value="<?php echo"$Number_Plate"?>" name="Number_Plate">

                <input type="text" placeholder=Model value="<?php echo"$Model"?>" name="Model">

               <input type="text" placeholder=Seat value="<?php echo"$Seat"?>" name="Seat">

<input type="number_format" placeholder=Price value="<?php echo"$Price"?>" name="Price">

<input type="submit" placeholder=submit value="update">

            
            </form>
        
        </div>
    
    
    
    </body>



</html>

