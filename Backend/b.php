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
          $q="SELECT * FROM microbus";
          $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_Plate']=='dhaka-metro-ka-11-11'){
          $Number_Plate= $data['Number_Plate'];
          $Price=$data['Price'];
          echo"<a href='insert_b.php? Number_Plate=$data[Number_Plate] & Price=$data[Price]'><img src='ownload.jpg' style='width:100%' padding:10px /> </a>";
      }
    }
    ?>
        <p align='center' ><b>Noah-10 seats</b></p>

        <p align='center'><b>Price:4500</b></p>
      
      </div>
</div>
      <div class="column">
      <div class="gallery">
      <?php
      $q="SELECT * FROM microbus";
      $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_Plate']=='dhaka-metro-ka-12-11'){
          $Number_Plate= $data['Number_Plate'];
          $Price=$data['Price'];
          echo"<a href='insert_b.php?Number_Plate=$data[Number_Plate] & Price=$data[Price]'><img src='12390_m.jpg' alt='Norway' style='width:100%' padding:10px /> </a>";
      
    }
  }
      ?>
<p align='center' ><b>Noah-10 seats</b></p>
 
        <p align='center'><b>Price:4500</b></p>
      </div>
</div>
<div class="column">
      <div class="gallery">
      <?php
      $q="SELECT * FROM microbus";
      $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_Plate']=='dhaka-metro-ka-13-11'){
          $Number_Plate= $data['Number_Plate'];
          $Price=$data['Price'];
          echo"<a href='insert_b.php?Number_Plate=$data[Number_Plate] & Price=$data[Price]'><img src='2014_Toyota_Noah_G_(pre-facelift).jpg' alt='Norway' style='width:100%' padding:10px /> </a>";
      
    }
  }
      ?>
       <p align='center' ><b>Noah-10 seats</b></p>
        
        <p align='center'><b>Price:4500</b></p>
      </div>
</div>



</div>
<div class="div-1">
<div class="row">
      <div class="column">
      <div class="gallery">
      <?php
      $q="SELECT * FROM microbus";
      $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_Plate']=='dhaka-metro-ka-14-11'){
          $Number_Plate= $data['Number_Plate'];
          $Price=$data['Price'];
          echo"<a href='insert_b.php?Number_Plate=$data[Number_Plate] & Price=$data[Price]'><img src='images (5).jpg' alt='Norway' style='width:100%' padding:10px /> </a>";
      
    }
  }
      ?>
     <p align='center' ><b>Noah-10 seats</b></p>
       
        <p align='center'><b>Price:4500</b></p>
      </div>
</div>
<div class="column">
      <div class="gallery">
      <?php
      $q="SELECT * FROM microbus";
      $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_Plate']=='dhaka-metro-ka-15-11'){
          $Number_Plate= $data['Number_Plate'];
          $Price=$data['Price'];
          echo"<a href='insert_b.php?Number_Plate=$data[Number_Plate] & Price=$data[Price]'><img src='Falmouth-To-Port-Antonio-Private-Transfer.......jpg' alt='Norway' style='width:100%' padding:10px /> </a>";
      
    }
  }
      ?>
 <p align='center' ><b>Noah-10 seats</b></p>

        <p align='center'><b>Price:4500</b></p>
      </div>
</div>


    <div class="column">
    
        <div class="gallery">
          <?php
          $q="SELECT * FROM microbus";
          $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_Plate']=='dhaka-metro-ka-16-11'){
          $Number_Plate= $data['Number_Plate'];
          $Price=$data['Price'];
          echo"<a href='insert_b.php?Number_Plate=$data[Number_Plate] & Price=$data[Price]'><img src='maxresdefault (2).jpg' alt='Norway' style='width:100%' padding:10px /> </a>";
      }
    }
    ?>
        <p align='center' ><b>Noah-10 seats</b></p>
    
        <p align='center'><b>Price:4500</b></p>
        </div>
        </div>
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
  