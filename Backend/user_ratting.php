<?php
session_start();

$email = $_SESSION['email'];
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'jatra';
$con = mysqli_connect($hostname, $username, $password, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$q = "SELECT * FROM register WHERE email='$email'";
$r = mysqli_query($con, $q);

if ($r) {
    if (mysqli_num_rows($r) > 0) {
        $data = mysqli_fetch_assoc($r);
        $name = $data['name'];
        $email = $data['email'];
    }
}

if (isset($_POST['rating']) && isset($_POST['comment'])) {
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];

    // Check if the user has already submitted a review
    $checkQuery = "SELECT * FROM review WHERE email='$email'";
    $checkResult = mysqli_query($con, $checkQuery);

    if ($checkResult && mysqli_num_rows($checkResult) > 0) {
        // Update the existing review
        $updateQuery = "UPDATE review SET rating='$rating', comment='$comment' WHERE email='$email'";
        $updateResult = mysqli_query($con, $updateQuery);

        if (!$updateResult) {
            die("Update failed: " . mysqli_error($con));
        }
    } else {
        // Insert a new review
        $insertQuery = "INSERT INTO review(name, email, rating, comment) VALUES ('$name', '$email', '$rating', '$comment')";
        $insertResult = mysqli_query($con, $insertQuery);

        if (!$insertResult) {
            die("Insert failed: " . mysqli_error($con));
        }
    }
}
?>

<!-- Rest of your HTML code remains unchanged -->


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
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .form-wrap {
            width: 320px;
            background: rgba(62, 61, 61, 0.7);
            padding: 40px 20px;
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            color: #fff;
            font-weight: normal;
            margin-bottom: 20px;
        }

        input,
        textarea {
            width: 100%;
            background: none;
            border: 1px solid #fff;
            border-radius: 3px;
            padding: 6px 15px;
            box-sizing: border-box;
            margin-bottom: 20px;
            font-size: 16px;
            color: #fff;
        }

        input[type="button"] {
            background: #bac675;
            border: 0;
            cursor: pointer;
            color: #3e3d3d;
        }

        input[type="button"]:hover {
            background: #a4b15c;
            transition: .6s;
        }

        ::placeholder {
            color: #fff;
        }
    </style>
</head>

<body>
    <table class="form-wrap">
        <tr>
            <td>
                <form action="" method="POST">
                    <h1>Rate and Comment</h1>

                    <label for="rating"><h4 style="color:white">Rating</h4></label>
                    <input type="number" min="1" max="5" required name="rating">

                    <label for="comment"><h4 style="color:white">Comment</h4></label>
                    <textarea id="comment" name="comment" placeholder="Write your comment here" style="height:100px"></textarea>

                    <input type="submit" value="Submit" />
                </form>
            </td>
        </tr>
    </table>
</body>

</html>
