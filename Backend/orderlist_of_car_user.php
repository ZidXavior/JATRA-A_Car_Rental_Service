

<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url('Tesla.jpg') center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            color: white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    backdrop-filter: blur(5px); /* Adjust the blur value as needed */
    background-color: rgba(255, 255, 255, 0.5); /* Adjust the alpha value for transparency */
}

th, td {
    border: 1px solid white;
    padding: 10px;
    text-align: left;
    color: gold;
}

th {
    background-color: #333;
    font-weight: bold;
}


        table, th, td {
            border: 1px solid white;
        }

        th, td {
            padding: 10px;
            text-align: left;
            color: gold; /* Added font color */
        }

        th {
            background-color: #333;
            font-weight: bold; /* Added bold font weight */
        }

        h1 {
            text-align: center;
            color: #fff;
        }
    </style>
</head>

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
      echo"co/nn false";
    }
    $q="SELECT customer_details_c.name,customer_details_c.email,customer_details_c.contactno,car.Model,car.Colour,customer_details_c.pickup_address,customer_details_c.pickup_date,customer_details_c.pickup_time,customer_details_c.days,customer_details_c.location,customer_details_c.price,customer_details_c.reason,car.Number_PLate FROM car JOIN customer_details_c ON customer_details_c.Number_PLate=car.Number_PLate WHERE email='$email' GROUP BY customer_details_c.name,customer_details_c.email,customer_details_c.contactno,car.Model,car.Colour,customer_details_c.pickup_address,customer_details_c.pickup_date,customer_details_c.pickup_time,customer_details_c.days,customer_details_c.location,customer_details_c.price,customer_details_c.reason,car.Number_PLate  ORDER BY customer_details_c.pickup_date";
    $r=mysqli_query($con,$q);
    if(mysqli_num_rows($r)>0){
      ?>
      <h1>Car</h1>
    <table style="width:100%">
    <tr><th>name</th><th>email</th><th>contactno</th><th>model</th><th>color</th><th>pickup_adress</th><th>pickup_date</th><th>pickup_time</th><th>location</th><th>reason</th><th>price</th><th>numberplate</th><th>days</th></tr>
    <?php
    if($r)
    {
    while($data=mysqli_fetch_assoc($r)){
        $name=$data['name'];
        $email=$data['email'];
        $contactno=$data['contactno'];
        $Model=$data['Model'];
        $Colour=$data['Colour'];
        $pickup_address=$data['pickup_address'];
        $pickup_date=$data['pickup_date'];
        $pickup_time=$data['pickup_time'];
        $location=$data['location'];
        $price=$data['price'];
        $reason=$data['reason'];
        $Number_PLate=$data['Number_PLate'];
        $days=$data['days'];
        
        echo"<tr><td>$name</td><td>$email</td><td>$contactno</td><td>$Model</td><td>$Colour</td><td>$pickup_address</td><td>$pickup_date</td><td>$pickup_time</td><td>$location</td><td>$reason</td><td>$price</td><td>$Number_PLate</td><td>$days</td></tr>";
    
    
    }
    }
    }
    $q="SELECT customer_details_m.name,customer_details_m.email,
    customer_details_m.contactno,customer_details_m.days,microbus.Model,microbus.Seat,customer_details_m.pickup_address,
    customer_details_m.pickup_date,customer_details_m.pickup_time,customer_details_m.location,customer_details_m.Price,customer_details_m.reason,microbus.Number_Plate FROM microbus JOIN customer_details_m ON customer_details_m.Number_Plate=microbus.Number_Plate WHERE email='$email'
     GROUP BY customer_details_m.name,customer_details_m.email,customer_details_m.contactno,customer_details_m.days,microbus.Model,microbus.Seat,
     customer_details_m.pickup_address,customer_details_m.pickup_date,customer_details_m.pickup_time,customer_details_m.location,customer_details_m.Price,customer_details_m.reason,microbus.Number_Plate ORDER BY customer_details_m.pickup_date";
    $r=mysqli_query($con,$q);
    if(mysqli_num_rows($r)>0){
      ?>
     
      <table style="width:100%">
      <h1>Microbus</h1>
    <tr><th>name</th><th>email</th><th>contactno</th><th>model</th><th>Seat</th><th>pickup_adress</th><th>pickup_date</th><th>pickup_time</th><th>location</th><th>price</th><th>reason</th><th>numberplate</th><th>days</th></tr>
    <?php
    if($r)
    {
    while($data=mysqli_fetch_assoc($r)){
        $name=$data['name'];
        $email=$data['email'];
        $contactno=$data['contactno'];
        $Model=$data['Model'];
        $Seat=$data['Seat'];
        $pickup_address=$data['pickup_address'];
        $pickup_date=$data['pickup_date'];
        $pickup_time=$data['pickup_time'];
        $location=$data['location'];
        $Price=$data['Price'];
        $reason=$data['reason'];
        $Number_Plate=$data['Number_Plate'];
        $days=$data['days'];
        echo"<tr><td>$name</td><td>$email</td><td>$contactno</td><td>$Model</td><td>$Seat</td><td>$pickup_address</td><td>$pickup_date</td><td>$pickup_time</td><td>$location</td><td>$Price</td><td>$reason</td><td>$Number_Plate</td><td>$days</td></tr>";
    }
    }
    }
    $q="SELECT customer_details_b.name,customer_details_b.email,
    customer_details_b.contactno,bus.Seat,customer_details_b.pickup_address,
    customer_details_b.pickup_date,customer_details_b.pickup_time,customer_details_b.days,customer_details_b.location,customer_details_b.Price,customer_details_b.reason,bus.Number_plat FROM bus JOIN customer_details_b ON customer_details_b.Number_plat=bus.Number_plat WHERE email='$email'
     GROUP BY customer_details_b.name,customer_details_b.email,customer_details_b.contactno,bus.Seat,
     customer_details_b.pickup_address,customer_details_b.pickup_date,customer_details_b.pickup_time,customer_details_b.days,customer_details_b.location,customer_details_b.Price,customer_details_b.reason,bus.Number_plat ORDER BY customer_details_b.pickup_date";
    $r=mysqli_query($con,$q);
    if(mysqli_num_rows($r)>0){
      ?>
     
      <table style="width:100%">
      <h1>Bus</h1>
      <tr><th>name</th><th>email</th><th>contactno</th><th>Seat</th><th></th><th>pickup_adress</th><th></th><th>pickup_date</th><th>pickup_time</th><th></th><th>price</th><th>reason</th><th>location</th><th>numberplate</th><th>days</th></tr>
    <?php
    if($r)
    {
      while($data=mysqli_fetch_assoc($r)){
        $name=$data['name'];
        $email=$data['email'];
        $contactno=$data['contactno'];
        $Seat=$data['Seat'];
        $pickup_address=$data['pickup_address'];
        $pickup_date=$data['pickup_date'];
        $pickup_time=$data['pickup_time'];
        $location=$data['location'];
        $Price=$data['Price'];
        $reason=$data['reason'];
        $Number_plat=$data['Number_plat'];
          $days=$data['days'];
        echo"<tr><td>$name</td><td>$email</td><td>$contactno</td><td>$Seat</td><th></th><td>$pickup_address</td><th></th><td>$pickup_date</td><td>$pickup_time</td><th></th><td>$Price</td><td>$reason</td><td>$location</td><td>$Number_plat</td><td>$days</td></tr>";
    }
    }
    }
    $q="SELECT customer_details_t.name,customer_details_t.email,
    customer_details_t.contactno,customer_details_t.pickup_address,
    customer_details_t.pickup_date,customer_details_t.pickup_time,customer_details_t.days,customer_details_t.location,customer_details_t.Price,customer_details_t.reason,truck.Number_Plate FROM truck JOIN customer_details_t ON customer_details_t.Number_Plate=truck.Number_Plate WHERE email='$email'
     GROUP BY customer_details_t.name,customer_details_t.email,customer_details_t.contactno,
     customer_details_t.pickup_address,customer_details_t.pickup_date,customer_details_t.pickup_time,customer_details_t.days,customer_details_t.location,customer_details_t.Price,customer_details_t.reason,truck.Number_Plate ORDER BY customer_details_t.pickup_date";
    $r=mysqli_query($con,$q);
    if(mysqli_num_rows($r)>0){
      ?>
     
      <table style="width:100%">
      <h1>Truck</h1>
    <tr><th>name</th><th>email</th><th>contactno</th><th>pickup_adress</th><th>pickup_date</th><th>pickup_time</th><th>price</th><th>reason</th><th>location</th><th>numberplate</th><th>days</th></tr>
    <?php
    if($r)
    {
      while($data=mysqli_fetch_assoc($r)){
        $name=$data['name'];
        $email=$data['email'];
        $contactno=$data['contactno'];
        $pickup_address=$data['pickup_address'];
        $pickup_date=$data['pickup_date'];
        $pickup_time=$data['pickup_time'];
        $location=$data['location'];
        $Price=$data['Price'];
        $reason=$data['reason'];
        $Number_Plate=$data['Number_Plate'];
        $days=$data['days'];
        echo"<tr><td>$name</td><td>$email</td><td>$contactno</td><td>$pickup_address</td><td>$pickup_date</td><td>$pickup_time</td><td>$Price</td><td>$reason</td><td>$location</td><td>$Number_Plate</td><td>$days</td></tr>";
    }
    }
    }
    $q="SELECT customer_details_e.name,customer_details_e.email,
    customer_details_e.contactno,customer_details_e.pickup_address,
    customer_details_e.price,customer_details_e.Number_PLate,package.p_id,package.hotel,package.rooms,package.date,package.Pickup_time,package.place,package.spot1,package.spot2 FROM package JOIN customer_details_e ON customer_details_e.p_id=package.p_id WHERE email='$email'
     GROUP BY customer_details_e.name,customer_details_e.email,
    customer_details_e.contactno,customer_details_e.pickup_address,
    customer_details_e.price,customer_details_e.Number_PLate,package.hotel,package.rooms,package.date,package.Pickup_time,package.place,package.spot1,package.spot2 ORDER BY package.date ";
    $r=mysqli_query($con,$q);
    if(mysqli_num_rows($r)>0){
      ?>
     
      <table style="width:100%">
      <h1>Package</h1>
      <tr><th>name</th><th>email</th><th>contactno</th><th>pickup_adress</th><th>price</th><th>numberplate</th><th>p_id</th><th>hotels</th><th>rooms</th><th>date</th><th>pickup_time</th><th>place</th><th>spot1</th><th>spot2</th></tr>
    <?php
    if($r)
    {
      while($data=mysqli_fetch_assoc($r)){
        $name=$data['name'];
        $email=$data['email'];
        $contactno=$data['contactno'];
        $pickup_address=$data['pickup_address'];
        $Pickup_time=$data['Pickup_time'];
        $price=$data['price'];
        $Number_PLate=$data['Number_PLate'];
        $hotel=$data['hotel'];
        $rooms=$data['rooms'];
        $date=$data['date'];
        $place=$data['place'];
        $spot1=$data['spot1'];
        $spot2=$data['spot2'];
        $p_id=$data['p_id'];
        echo"<tr><td>$name</td><td>$email</td><td>$contactno</td><td>$pickup_address</td><td>$price</td><td>$Number_PLate</td><td>$p_id</td><td>$hotel</td><td>$rooms</td><td>$date</td><td>$Pickup_time</td><td>$place</td><td>$spot1</td><td>$spot2</td><tr>";
      }
    }
    }

    // Microbus Details
    // Repeat the similar code for other vehicle types...

    ?>

</body>

</html>
