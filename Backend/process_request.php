<<?php
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
    $email = $_POST['email'];
    $location = $_POST['location'];

    // Insert request into the database with 'pending' status
    $sql = "INSERT INTO garage_requests (email, location, status) VALUES ('$email', '$location', 'pending')";

    if ($conn->query($sql) === TRUE) {
        // Use JavaScript to show an alert and redirect after 2 seconds
        echo '<script>alert("Request submitted successfully. Waiting for approval Email."); window.location.href = "Page-1.html";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

