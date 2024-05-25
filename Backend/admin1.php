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
