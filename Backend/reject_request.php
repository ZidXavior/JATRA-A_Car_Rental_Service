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

// Reject request
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Update request status to rejected
    $sql = "UPDATE garage_requests SET status = 'rejected' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: admin_panel.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
