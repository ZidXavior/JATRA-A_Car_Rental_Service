
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
<tr><th>Number_PLate</th><th>Model</th><th>Colour</th><th>Price</th><th>Update</th><th>Delete</th></tr>
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
$show="SELECT * FROM car";
$q=mysqli_query($con,$show);
if($q)
{
while($data=mysqli_fetch_assoc($q))
{
	$Number_PLate=$data['Number_PLate'];
$Model=$data['Model'];
$Colour=$data['Colour'];
$Price=$data['Price'];
echo"<tr><td>$Number_PLate</td> <td>$Model</td> <td>$Colour</td>  <td>$Price</td><td><a href='editc.php?Number_PLate=$data[Number_PLate]'>edit</td><td><a href='deletec.php?Number_PLate=$data[Number_PLate]'>delete</a></td></tr>";
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
 $Number_PLate= $_GET['Number_PLate'];
 $sql="SELECT * FROM car WHERE Number_PLate='$Number_PLate'";
 $r=mysqli_query($con,$sql);
 $data=mysqli_fetch_assoc($r);
 $Number_PLate=$data['Number_PLate'];
$Model=$data['Model'];
$Colour=$data['Colour'];
$Price=$data['Price'];
 if(isset($_POST['Number_PLate']) && isset($_POST['Model']) && isset($_POST['Colour']) &&  isset($_POST['Price'])){
    $Number_PLate=$_POST['Number_PLate'];
    $Model=$_POST['Model'];
$Colour=$_POST['Colour'];
$Price=$_POST['Price'];
$sql="UPDATE car SET Number_PLate='$Number_PLate',Model='$Model',Colour='$Colour',Price='$Price' WHERE Number_PLate='$Number_PLate'";
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
            
                <h1>car</h1>

                <input type="text" placeholder=Number_PLate value="<?php echo"$Number_PLate"?>" name="Number_PLate">

               <input type="text" placeholder=Model value="<?php echo"$Model"?>" name="Model">

<input type="text" placeholder=Colour value="<?php echo"$Colour"?>" name="Colour">

<input type="number_format" placeholder=Price value="<?php echo"$Price"?>" name="Price">

<input type="submit" placeholder=submit value="update">

            
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
if(isset($_POST['Number_PLate']) && isset($_POST['Model']) && isset($_POST['Colour']) &&  isset($_POST['Price'])){
    $Number_PLate=$_POST['Number_PLate'];
    $Model=$_POST['Model'];
$Colour=$_POST['Colour'];
$Price=$_POST['Price'];
$insert="INSERT INTO car(Number_PLate,Model,Colour,Price)VALUES('$Number_PLate','$Model','$Colour','$Price')";

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
            
                <h1>car</h1>
                <input type="text" placeholder=Number_PLate name="Number_PLate">

               <input type="text" placeholder=model name="Model">

<input type="text" placeholder=colour name="Colour">

<input type="number_format" placeholder=price name="Price">

<input type="submit" placeholder=submit value="submit">

            
            </form>
        
        </div>
    
    
    
    </body>



</html>
