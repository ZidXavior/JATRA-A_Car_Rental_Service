<?php
// Connect to your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jatra";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process user request
if (isset($_POST['request'])) {
    $username = $_POST['username'];
    $vehicle = $_POST['vehicle'];

    // Insert request into the database
    $sql = "INSERT INTO garage_requests (username, vehicle_id, status) VALUES ('$username', '$vehicle', 'pending')";

    if ($conn->query($sql) === TRUE) {
        echo "Request submitted successfully. Waiting for admin approval.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
