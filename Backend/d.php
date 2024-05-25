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
      $q="SELECT * FROM truck";
      $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_Plate']=='dhaka-metro-ca-11-21'){
          $Number_Plate=$data['Number_Plate'];
          $Price=$data['Price'];
          echo"<a href='insert_d.php?Number_Plate=$data[Number_Plate] & Price=$data[Price]'><img src='tata-ace-mega-mini-truck-500x500.jpg' alt='Norway' style='width:100%' padding:10px /></a>";
      
    }
  }
      ?>
    
      
      <p align='center'><b>Price:3000</b></p>
      </div>
</div>
      <div class="column">
      <div class="gallery">
      <?php
      $q="SELECT * FROM truck";
      $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_Plate']=='dhaka-metro-ca-11-31'){
          $Number_Plate=$data['Number_Plate'];
          $Price=$data['Price'];
          echo"<a href='insert_d.php?Number_Plate=$data[Number_Plate] & Price=$data[Price]'><img src='transport1.jpg' alt='Norway' style='width:100%' padding:10px /></a>";
      
    }
  }
      ?>
    
      
      <p align='center'><b>Price:4500</b></p>
      </div>
</div>
<div class="column">
      <div class="gallery">
      <?php
      $q="SELECT * FROM truck";
      $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_Plate']=='dhaka-metro-ca-11-41'){
          $Number_Plate=$data['Number_Plate'];
          $Price=$data['Price'];
          echo"<a href='insert_d.php?Number_Plate=$data[Number_Plate] & Price=$data[Price]'><img src='icv-truck.jpg' alt='Norway' style='width:100%' padding:10px /></a>";
      
    }
  }
      ?>
     
      
      <p align='center'><b>Price:6000</b></p>
      </div>




</div>
      <div class="column">
      <div class="gallery">
      <?php
      $q="SELECT * FROM truck";
      $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_Plate']=='dhaka-metro-ca-11-51'){
          $Number_Plate=$data['Number_Plate'];
          $Price=$data['Price'];
          echo"<a href='insert_d.php?Number_Plate=$data[Number_Plate] & Price=$data[Price]'><img src='isz12211_range_block_n_series_profile_800x600.png' alt='Norway' style='width:100%' padding:10px /></a>";
      
    }
  }
      ?>
      <p align='center'><b>Price:6000</b></p>
      </div>
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


