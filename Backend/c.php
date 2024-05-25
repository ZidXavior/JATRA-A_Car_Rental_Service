<!doctype html>
<html>
    <head></head>
    <style>
      p{
        color:white;
      }
      .div-1 {
        background-color: black;
    }
        .column {
  float: left;
  width: 32%;
  padding: 5px;
  height: 300px; /* Should be removed. Only for demonstration */
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
div.gallery {
    
  margin: 10px;
  border: 1px solid #ccc;
  float: left;
  width: 450px;
}
div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: 200px;
}

div.desc {
  padding: 10px;
  text-align: center;
}
</style>
    <body>
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
	echo"";
}
else
{
	echo"conn false";
}
$sr="SELECT * FROM register WHERE email='$email'";
$rr=mysqli_query($con,$sr);
$data=mysqli_fetch_assoc($rr); 
if(mysqli_num_rows($rr)>0)
{

?>
<div class="div-1">
    <div class="row">
    <div class="column">
    
        <div class="gallery">
          <?php
          $q="SELECT * FROM bus";
          $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_plat']=='dhaka-metro-ca-11-11'){
          $Number_plat= $data['Number_plat'];
          $Price=$data['Price'];
          echo"<a href='insert_c.php? Number_plat=$data[Number_plat] & Price=$data[Price]'><img src='2tola.jpg' style='width:100%' padding:10px /></a>";
      }
    }
    ?>
        <p align='center' ><b>seat:70</b></p>
      
        <p align='center'><b>Price:20000</b></p>
      
      </div>
</div>
      <div class="column">
      <div class="gallery">
      <?php
      $q="SELECT * FROM bus";
      $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_plat']=='dhaka-metro-ca-12-11'){
          $Number_plat= $data['Number_plat'];
          $Price=$data['Price'];
          echo"<a href='insert_c.php?Number_plat=$data[Number_plat] & Price=$data[Price]'><img src='istockphoto-135327019-612x612.jpg' alt='Norway' style='width:100%' padding:10px /> </a>";
      
    }
  }
      ?>
      <p align='center'><b>seat:40</b></p>
      
      <p align='center'><b>Price:12000</b></p>
      </div>
</div>
<div class="column">
      <div class="gallery">
      <?php
      $q="SELECT * FROM bus";
      $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_plat']=='dhaka-metro-ca-13-11'){
          $Number_plat= $data['Number_plat'];
          $Price=$data['Price'];
          echo"<a href='insert_c.php?Number_plat=$data[Number_plat] & Price=$data[Price]'><img src='dd.jpg' alt='Norway' style='width:100%' padding:10px /> </a>";
      
    }
  }
      ?>
      <p align='center'><b>seat:40</b></p>
      
      <p align='center'><b>Price:12000</b></p>
      </div>




</div>
      <div class="column">
      <div class="gallery">
      <?php
      $q="SELECT * FROM bus";
      $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_plat']=='dhaka-metro-ca-14-11'){
          $Number_plat= $data['Number_plat'];
          $Price=$data['Price'];
          echo"<a href='insert_c.php?Number_plat=$data[Number_plat] & Price=$data[Price]'><img src='images (6).jpg' alt='Norway' style='width:100%' padding:10px /> </a>";
      
    }
  }
      ?>
      <p align='center'><b>seat:16</b></p>
      
      <p align='center'><b>Price:7000</b></p>
      </div>
</div>
<div class="column">
      <div class="gallery">
      <?php
      $q="SELECT * FROM bus";
      $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_plat']=='dhaka-metro-ca-15-11'){
          $Number_plat= $data['Number_plat'];
          $Price=$data['Price'];
          echo"<a href='insert_c.php?Number_plat=$data[Number_plat] & Price=$data[Price]'><img src='mini-bus-rental-service-for-wedding-500x500.jpg' alt='Norway' style='width:100%' padding:10px /> </a>";
      
    }
  }
      ?>
      <p align='center'><b>seat:30</b></p>
      
      <p align='center'><b>Price:10000</b></p>
      </div>
</div>
<?php
}
else{
  ?>
  <html>
  <body style="background-color:black;text-align:center">
  <h1 style='color:white;'>please login first</h1>
    </body>
  </html>
<?php
}
?>



