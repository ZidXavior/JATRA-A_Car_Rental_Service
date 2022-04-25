
<?php
session_start();
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
if (isset($_POST) and !empty($_POST)){

$Name = $_POST['Name'];
$password = $_POST['password'];

$query = "SELECT * FROM `admin` WHERE Name='$Name' and password='$password'";
 
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);

if ($count == 1){
    $_SESSION['Name']=$Name;
?>
<script>location.assign('home.php')</script>
<?php 
}else{
echo "Invalid Login";
}
}
if(isset($_SESSION['Name']))
echo"already loged";
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
            
                <h1>login</h1>

                <input type="text" placeholder=Name  name="Name">

               <input type="text" placeholder=password  name="password">



<input type="submit" placeholder=submit value="login">

            
            </form>
        
        </div>
    
    
    
    </body>



</html>

<?php
session_start();
session_destroy();
header('Location: login.php');
?>
