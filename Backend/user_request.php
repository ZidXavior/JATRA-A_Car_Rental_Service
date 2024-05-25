<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user_request.css">
    <title>User Request Parking</title>
    
</head>
<body>

<header>
        <div class="container">
            <h1>JATRA Garage</h1>
        </div>
    </header>
<br>
    <div class="container">
        <h2>Garage Request Form</h2>

        <!-- User Request Form -->
        <form action="process_request.php" method="post">
            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="location">Location:</label>
            <input type="text" name="location" required>

            <button type="submit" name="request">Submit Request</button>
        </form>
    </div>

<br>
    <footer>
        <div class="container">
            <p>&copy; 2023 Vehicle Rental System - JATRA</p>
        </div>
    </footer>
</body>
</html>
