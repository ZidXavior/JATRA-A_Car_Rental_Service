<!DOCTYPE html>
<html>

<head>
    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            margin: 0;
            padding: 0;
            background: url('Tesla.jpg') center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            color: white;
        }

        .container {
            text-align: center;
            padding: 20px;
        }

        .user-box {
            border: 1px solid #fff;
            border-radius: 10px;
            background: rgba(0, 0, 0, 0.5);
            margin: 10px;
            padding: 20px;
        }

        .average-rating {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .star-container {
            display: inline-block;
        }

        .checked {
            color: orange;
        }

        .review {
            margin-top: 30px;
        }

        h2 {
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'jatra';
        $con = mysqli_connect($hostname, $username, $password, $dbname);
        if ($con) {
            echo "";
        } else {
            echo "conn false";
        }
        $s = "SELECT AVG(rating) AS R FROM review";
        $qr = mysqli_query($con, $s);
        if ($qr) {
            while ($data = mysqli_fetch_assoc($qr)) {
                $rating = $data['R'];
                echo "<div class='average-rating'><strong>Average Rating:</strong></div>";
                ?>
                <div class="star-container" align="center">
                    <?php
                    for ($s = 0; $s < $rating; $s++) {
                        ?>
                        <span class="fa fa-star checked"></span>
                    <?php
                    }
                    for ($s = 0; $s < 5 - $rating; $s++) {
                        ?>
                        <span class="fa fa-star"></span>
                    <?php
                    }
                    ?>
                </div>
        <?php
            }
        }
        $show = "SELECT * FROM review ORDER BY name";
        $q = mysqli_query($con, $show);
        if ($q) {
            while ($data = mysqli_fetch_assoc($q)) {
                $name = $data['name'];
                $rating = $data['rating'];
                $comment = $data['comment'];
                echo "<div class='user-box'>";
                echo "<h2>$name</h2>";
                ?>
                <div class="star-container">
                    <?php
                    for ($s = 0; $s < $rating; $s++) {
                        ?>
                        <span class="fa fa-star checked"></span>
                    <?php
                    }
                    for ($s = 0; $s < 5 - $rating; $s++) {
                        ?>
                        <span class="fa fa-star"></span>
                    <?php
                    }
                    ?>
                </div>
        <?php
                echo "<p>$comment</p>";
                echo "</div>";
            }
        }
        ?>
    </div>
</body>

</html>
