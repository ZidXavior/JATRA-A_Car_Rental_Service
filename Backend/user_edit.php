
<html>

    
   
    
<style>

.center {
text-align: center;
color: red;
}
    *{margin: 0; padding: 0;}
    body{background: #ecf1f4; font-family: sans-serif;}
    
    .form-wrap{ width: 320px; background: #3e3d3d; padding: 40px 20px; box-sizing: border-box; position: fixed; left: 50%; top: 50%; transform: translate(-50%, -50%);}
    h2{text-align: center; color: #fff; font-weight: normal; margin-bottom: 20px;}
    
    input{width: 100%; background: none; border: 1px solid #fff; border-radius: 3px; padding: 6px 15px; box-sizing: border-box; margin-bottom: 20px; font-size: 16px; color: #fff;}
    
    input[type="button"]{ background: #bac675; border: 0; cursor: pointer; color: #3e3d3d;}
    input[type="button"]:hover{ background: #a4b15c; transition: .6s;}
    
    ::placeholder{color: #fff;}

</style>

<body>

    <div class="form-wrap">
    
        <form action="" method="POST">
         
           
       
        
        
            
            <input type="password" name="new_pass" placeholder="enter new password">

            <input type="password" name="confirm_pass" placeholder="confirm new password">
      
  
      <input type="submit" value="update profile">
   </form>

</div>

</body>
</html>
<?php
session_start();
$email = $_SESSION['email'];
$hostname='localhost';
$username='root';
$password='';
$dbname='jatra';
$con=mysqli_connect($hostname,$username,$password,$dbname);
if($con)
{
	echo"<br><br><br><br><br>";
}
else
{
	echo"conn false";
}
$sql="SELECT * FROM  register WHERE email='$email'";
 $r=mysqli_query($con,$sql);
 $data=mysqli_fetch_assoc($r);
 $email=$data['email'];echo"<h2 style='text-align:center;color:black;'>email:".$email."</h2>";
$name=$data['name'];echo"<h2 style='text-align:center;color:black;'>name:".$name."</h2>";
 $contactno=$data['contactno'];echo"<h2 style='text-align:center;color:black;'>contactno".$contactno."</h2>";
$password=$data['password'];

if(isset($_POST['new_pass']) && isset($_POST['confirm_pass'])){

  
   

   $new_pass =$_POST['new_pass'];
   $confirm_pass =$_POST['confirm_pass'];
 

   if(!empty($new_pass) || !empty($confirm_pass)){
      
      }if($new_pass != $confirm_pass){
         echo'confirm password not matched!';
      }else{
         mysqli_query($con, "UPDATE `register` SET  password = '$confirm_pass' WHERE email = '$email'") or die('2query failed');
         echo'password updated successfully!';
      }
   }

 
       
      
   



?>
