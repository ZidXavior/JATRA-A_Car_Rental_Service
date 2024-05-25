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

