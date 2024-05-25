<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        header {
            background-color: #033427;
            color: #fff;
            padding: 15px 0;
        }

        header h1 {
            margin: 0;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        nav li {
            display: inline;
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        .main-content {
            padding: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>

<header>
        <div class="container">
            <h1>JATRA Garage</h1>
        </div>
    </header>

<?php
// Function to send email
function sendEmail($to, $subject, $message)
{
    $headers = 'From: arcodatta1847@gmail.com' . "\r\n" .
        'Reply-To: arcodatta1847@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
}

// Connect to your database
$servername = "localhost: 3306";
$username = "root";
$password = "";
$dbname = "jatra";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all requests
$sql = "SELECT * FROM garage_requests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Email</th><th>Location</th><th>Status</th><th>Action</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['location'] . "</td>";
        echo "<td>" . $row['status'] . "</td>";
        echo "<td><a href='approve_request.php?id=" . $row['id'] . "&email=" . $row['email'] . "&status=approved'>Approve</a> | <a href='reject_request.php?id=" . $row['id'] . "&email=" . $row['email'] . "&status=rejected'>Reject</a></td>";
        echo "</tr>";

        // Check if the button is clicked and send email
        if (isset($_GET['id']) && isset($_GET['email']) && isset($_GET['status'])) {
            $to = $_GET['email'];
            $subject = "Request Status";
            $message = "Your request with ID " . $_GET['id'] . " has been " . $_GET['status'] . ".";
            sendEmail($to, $subject, $message);
        }
    }
    echo "</table>";
} else {
    echo "No requests.";
}

$conn->close();
?>

<footer>
        <div class="container">
            <p>&copy; 2023 Vehicle Rental System - JATRA</p>
        </div>
    </footer>

</body>
</html>
