<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-image: url('promo.jpg');
            background-size: cover;
            background-position: center;
            color: white;
        }

        p {
            color: white;
        }

        .div-1 {
            background-color: black;
            padding: 20px; /* Added padding for better visibility */
        }

        .column {
            float: left;
            width: 32%;
            padding: 5px;
            height: auto; /* Adjusted height to accommodate dynamic content */
            margin-bottom: 20px; /* Added margin for better spacing */
        }

        div.gallery {
            margin: 10px;
            border: 1px solid #ccc;
            float: left;
            width: 100%; /* Adjusted width to fit the entire column */
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: 180px;
        }

        div.desc {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
session_start();
$email = $_SESSION['email'];
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'jatra';
$con = mysqli_connect($hostname, $username, $password, $dbname);
if ($con) {
    echo "conn true";
} else {
    echo "conn false";
}
$sr = "SELECT * FROM register WHERE email='$email'";
$rr = mysqli_query($con, $sr);
$data = mysqli_fetch_assoc($rr);
if (mysqli_num_rows($rr) > 0) {
    ?>
    <div class="div-1">
        <div class="row">
            <?php
            $q = "SELECT * FROM package";
            $r = mysqli_query($con, $q);

            while ($data = mysqli_fetch_assoc($r)) {
                ?>
                <div class="column">
                    <div class="gallery">
                        <a href='a_package.php?p_id=<?php echo $data['p_id']; ?>'>
                            <img src='family.jpg' alt='Norway' style='width:100%' padding:10px />
                        </a>
                        <div class="desc">
                            <p><b>Package ID:</b> <?php echo $data['p_id']; ?></p>
                            <p><b>Hotel:</b> <?php echo $data['hotel']; ?></p>
                            <p><b>Rooms:</b> <?php echo $data['rooms']; ?></p>
                            <p><b>Price:</b> <?php echo $data['price']; ?> BDT</p>
                            <p><b>Date:</b> <?php echo $data['date']; ?></p>
                            <p><b>Pickup Time:</b> <?php echo $data['Pickup_time']; ?></p>
                            <p><b>Number Plate:</b> <?php echo $data['Number_PLate']; ?></p>
                            <p><b>Place:</b> <?php echo $data['place']; ?></p>
                            <p><b>Spot 1:</b> <?php echo $data['spot1']; ?></p>
                            <p><b>Spot 2:</b> <?php echo $data['spot2']; ?></p>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    </body>
    </html>
    <?php
} else {
    ?>
    <html>
    <body style="background-color:black;text-align:center">
    <h1 style='color:white;'>Please login first</h1>
    </body>
    </html>
    <?php
}
?>


