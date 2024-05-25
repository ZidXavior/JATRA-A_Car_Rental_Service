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
          $q="SELECT * FROM car";
          $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_PLate']=='dhaka-metro-ga-11-11'){
          $Number_PLate= $data['Number_PLate'];
          $Price=$data['Price'];
          echo"<a href='insert.php? Number_PLate=$data[Number_PLate] & Price=$data[Price]'><img src='toyota_premio_15_f_auto_1569728553_a690012d0_progressive.jpg' style='width:100%' padding:10px /> </a>";
      }
    }
    ?>
        <p align='center' ><b>Toyota Premeo</b></p>
      
        <p align='center'><b>Price:4000</b></p>
      
      </div>
</div>
      <div class="column">
      <div class="gallery">
      <?php
      $q="SELECT * FROM car";
      $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_PLate']=='dhaka-metro-ga-11-12'){
          $Number_PLate= $data['Number_PLate'];
          $Price=$data['Price'];
          echo"<a href='insert.php?Number_PLate=$data[Number_PLate] & Price=$data[Price]'><img src='toyota_corolla_axio_15_a_1617461669_87ee71f5_progressive.jpg' alt='Norway' style='width:100%' padding:10px /> </a>";
      
    }
  }
      ?>
      <p align='center'><b>Toyota Axio</b></p>
      
      <p align='center'><b>Price:3500</b></p>
      </div>
</div>
<div class="column">
      <div class="gallery">
      <?php
      $q="SELECT * FROM car";
      $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_PLate']=='dhaka-metro-ga-11-13'){
          $Number_PLate= $data['Number_PLate'];
          $Price=$data['Price'];
          echo"<a href='insert.php?Number_PLate=$data[Number_PLate] & Price=$data[Price]'><img src='002_2.jpg' alt='Norway' style='width:100%' padding:10px /> </a>";
      
    }
  }
      ?>
      <p align='center'><b>Toyota Axio</b></p>
      
      <p align='center'><b>Price:3500</b></p>
      </div>
</div>


<div class="row">
    <div class="column">
    
        <div class="gallery">
          <?php
          $q="SELECT * FROM car";
          $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_PLate']=='dhaka-metro-ga-11-14'){
          $Number_PLate= $data['Number_PLate'];
          $Price=$data['Price'];
          echo"<a href='insert.php?Number_PLate=$data[Number_PLate] & Price=$data[Price]'><img src='10365_m.jpg' alt='Norway' style='width:100%' padding:10px /> </a>";
      }
    }
    ?>
        <p align='center'><b>Toyota Axio</b></p>
      
        <p align='center'><b>Price:3500</b></p>
      
      </div>
</div>
      <div class="column">
      <div class="gallery">
      <?php
      $q="SELECT * FROM car";
      $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_PLate']=='dhaka-metro-ga-11-15'){
          $Number_PLate= $data['Number_PLate'];
          $Price=$data['Price'];
          echo"<a href='insert.php?Number_PLate=$data[Number_PLate] & Price=$data[Price]'><img src='1562547086_00.jpg' alt='Norway' style='width:100%' padding:10px /> </a>";
      
    }
  }
      ?>
      <p align='center'><b>Honda Civic</b></p>
      
      <p align='center'><b>Price:4500</b></p>
      </div>
</div>
<div class="column">
      <div class="gallery">
      <?php
      $q="SELECT * FROM car";
      $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_PLate']=='dhaka-metro-ga-11-16'){
          $Number_PLate= $data['Number_PLate'];
          $Price=$data['Price'];
          echo"<a href='insert.php?Number_PLate=$data[Number_PLate] & Price=$data[Price]'><img src='637365260731018803.jpg' alt='Norway' style='width:100%' padding:10px /> </a>";
      
    }
  }
      ?>
      <p align='center'><b>Toyota Axio</b></p>
      
      <p align='center'><b>Price:3500</b></p>
      </div>
</div>

<div class="row">
    <div class="column">
    
        <div class="gallery">
          <?php
          $q="SELECT * FROM car";
          $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_PLate']=='dhaka-metro-ga-11-17'){
          $Number_PLate= $data['Number_PLate'];
          $Price=$data['Price'];
          echo"<a href='insert.php?Number_PLate=$data[Number_PLate] & Price=$data[Price]'><img src='Axio-2017-Black-front.jpg' alt='Norway' style='width:100%' padding:10px /> </a>";
      }
    }
    ?>
        <p align='center'><b>Toyota Axio</b></p>
      
        <p align='center'><b>Price:3500</b></p>
      
      </div>
</div>
      <div class="column">
      <div class="gallery">
      <?php
      $q="SELECT * FROM car";
      $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_PLate']=='dhaka-metro-ga-11-18'){
          $Number_PLate= $data['Number_PLate'];
          $Price=$data['Price'];
          echo"<a href='insert.php?Number_PLate=$data[Number_PLate] & Price=$data[Price]'><img src='big_with_watermark_toyota-premio-dhaka-dhaka-4174.jpeg' alt='Norway' style='width:100%' padding:10px /> </a>";
      
    }
  }
      ?>
      <p align='center'><b>Toyota premeo</b></p>
      
      <p align='center'><b>Price:4000</b></p>
      </div>
</div>
<div class="column">
      <div class="gallery">
      <?php
      $q="SELECT * FROM car";
      $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_PLate']=='dhaka-metro-ga-11-21'){
          $Number_PLate= $data['Number_PLate'];
          $Price=$data['Price'];
          echo"<a href='insert.php?Number_PLate=$data[Number_PLate] & Price=$data[Price]'><img src='download (1).jpg' alt='Norway' style='width:100%' padding:10px /> </a>";
      
    }
  }
      ?>
      <p align='center'><b>Hondda Civic</b></p>
      
      <p align='center'><b>Price:4500</b></p>
      </div>
</div>
<div class="row">
    <div class="column">
    
        <div class="gallery">
          <?php
          $q="SELECT * FROM car";
          $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_PLate']=='dhaka-metro-ga-11-31'){
          $Number_PLate= $data['Number_PLate'];
          $Price=$data['Price'];
          echo"<a href='insert.php?Number_PLate=$data[Number_PLate] & Price=$data[Price]'><img src='Toyota-Premio-2017-15.webp' alt='Norway' style='width:100%' padding:10px /> </a>";
      }
    }
    ?>
        <p align='center'><b>Toyota Premeo</b></p>
      
        <p align='center'><b>Price:4000</b></p>
      
      </div>
</div>
      <div class="column">
      <div class="gallery">
      <?php
      $q="SELECT * FROM car";
      $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_PLate']=='dhaka-metro-ga-11-41'){
          $Number_PLate= $data['Number_PLate'];
          $Price=$data['Price'];
          echo"<a href='insert.php?Number_PLate=$data[Number_PLate] & Price=$data[Price]'><img src='giant_89284.jpg' alt='Norway' style='width:100%' padding:10px /> </a>";
      
    }
  }
      ?>
      <p align='center'><b>Toyota Premeo</b></p>
      
      <p align='center'><b>Price:4000</b></p>
      </div>
</div>
<div class="column">
      <div class="gallery">
      <?php
      $q="SELECT * FROM car";
      $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_PLate']=='dhaka-metro-ga-11-51'){
          $Number_PLate= $data['Number_PLate'];
          $Price=$data['Price'];
          echo"<a href='insert.php?Number_PLate=$data[Number_PLate] & Price=$data[Price]'><img src='giant_106524.jpg' alt='Norway' style='width:100%' padding:10px /> </a>";
      
    }
  }
      ?>
      <p align='center'><b>Toyota Premeo</b></p>
      
      <p align='center'><b>Price:4000</b></p>
      </div>
</div>
<div class="row">
    <div class="column">
    
        <div class="gallery">
          <?php
          $q="SELECT * FROM car";
          $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_PLate']=='dhaka-metro-ga-11-61'){
          $Number_PLate= $data['Number_PLate'];
          $Price=$data['Price'];
          echo"<a href='insert.php?Number_PLate=$data[Number_PLate] & Price=$data[Price]'><img src='images (1).jpg' alt='Norway' style='width:100%' padding:10px /> </a>";
      }
    }
    ?>
        <p align='center'><b>Toyota Premeo</b></p>
      
        <p align='center'><b>Price:4000</b></p>
      
      </div>
</div>
     
<div class="column">
      <div class="gallery">
      <?php
      $q="SELECT * FROM car";
      $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_PLate']=='dhaka-metro-ga-12-21'){
          $Number_PLate= $data['Number_PLate'];
          $Price=$data['Price'];
          echo"<a href='insert.php?Number_PLate=$data[Number_PLate] & Price=$data[Price]'><img src='images (3).jpg' alt='Norway' style='width:100%' padding:10px /> </a>";
      
    }
  }
      ?>
      <p align='center'><b>Toyota Axio</b></p>
      
      <p align='center'><b>Price:3500</b></p>
      </div>
</div>
<div class="row">
    <div class="column">
    
        <div class="gallery">
          <?php
          $q="SELECT * FROM car";
          $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_PLate']=='dhaka-metro-ga-13-11'){
          $Number_PLate= $data['Number_PLate'];
          $Price=$data['Price'];
          echo"<a href='insert.php?Number_PLate=$data[Number_PLate] & Price=$data[Price]'><img src='images (4).jpg' alt='Norway' style='width:100%' padding:10px /> </a>";
      }
    }
    ?>
        <p align='center'><b>Toyota Axio</b></p>
      
        <p align='center'><b>Price:3500</b></p>
      
      </div>
</div>
<div class="column">
      <div class="gallery">
      <?php
      $q="SELECT * FROM car";
      $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_PLate']=='dhaka-metro-ga-12-11'){
          $Number_PLate= $data['Number_PLate'];
          $Price=$data['Price'];
          echo"<a href='insert.php?Number_PLate=$data[Number_PLate] & Price=$data[Price]'><img src='images (2).jpg' alt='Norway' style='width:100%' padding:10px /> </a>";
      
    }
  }
      ?>
      <p align='center'><b>Toyota Premeo</b></p>
      
      <p align='center'><b>Price:4000</b></p>
      </div>
</div>
      <div class="column">
      <div class="gallery">
      <?php
      $q="SELECT * FROM car";
      $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_PLate']=='dhaka-metro-ga-14-11'){
          $Number_PLate= $data['Number_PLate'];
          $Price=$data['Price'];
          echo"<a href='insert.php?Number_PLate=$data[Number_PLate] & Price=$data[Price]'><img src='images.jpg' alt='Norway' style='width:100%' padding:10px /> </a>";
      
    }
  }
      ?>
      <p align='center'><b>Toyota Premeo</b></p>
    
      <p align='center'><b>Price:4000</b></p>
      </div>
</div>
<div class="column">
      <div class="gallery">
      <?php
      $q="SELECT * FROM car";
      $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_PLate']=='dhaka-metro-ga-15-11'){
          $Number_PLate= $data['Number_PLate'];
          $Price=$data['Price'];
          echo"<a href='insert.php?Number_PLate=$data[Number_PLate] & Price=$data[Price]'><img src='96-98_Honda_Civic_LX_sedan.jpg' alt='Norway' style='width:100%' padding:10px /> </a>";
      
    }
  }
      ?>
      <p align='center'><b>Honda </b></p>
      
      <p align='center'><b>Price:2000</b></p>
      </div>
</div>

<div class="row">
    <div class="column">
    
        <div class="gallery">
          <?php
          $q="SELECT * FROM car";
          $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_PLate']=='dhaka-metro-ga-16-11'){
          $Number_PLate= $data['Number_PLate'];
          $Price=$data['Price'];
          echo"<a href='insert.php?Number_PLate=$data[Number_PLate] & Price=$data[Price]'><img src='JDPA_2020-Honda-Civic-Hatchback-Sport-Touring-White-Front-Quarter-Small (1).webp' alt='Norway' style='width:100%' padding:10px /> </a>";
      }
    }
    ?>
        <p align='center'><b>Honda Civic</b></p>
      
        <p align='center'><b>Price:4500</b></p>
      
      </div>
</div>
      <div class="column">
      <div class="gallery">
      <?php
      $q="SELECT * FROM car";
      $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_PLate']=='dhaka-metro-ga-17-11'){
          $Number_PLate= $data['Number_PLate'];
          $Price=$data['Price'];
          echo"<a href='insert.php?Number_PLate=$data[Number_PLate] & Price=$data[Price]'><img src='2022-honda-civic-si-sedan-736884.webp' alt='Norway' style='width:100%' padding:10px /> </a>";
      
    }
  }
      ?>
      <p align='center'><b>Honda Civic</b></p>
      
      <p align='center'><b>Price:4500</b></p>
      </div>
</div>
<div class="column">
      <div class="gallery">
      <?php
      $q="SELECT * FROM car";
      $r=mysqli_query($con,$q);
        while($data=mysqli_fetch_assoc($r)){
          if($data['Number_PLate']=='dhaka-metro-ga-18-11'){
          $Number_PLate= $data['Number_PLate'];
          $Price=$data['Price'];
          echo"<a href='insert.php?Number_PLate=$data[Number_PLate] & Price=$data[Price]'><img src='maxresdefault.jpg' alt='Norway' style='width:100%' padding:10px /> </a>";
      
    }
  }
      ?>
      <p align='center'><b>Honda Civic</b></p>
      
      <p align='center'><b>Price:4500</b></p>
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