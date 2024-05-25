
<!DOCTYPE html>
<html>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background: url('190325-rental-cars-cs-229p.jpg'); /* Replace 'your-background-image.jpg' with the actual path to your image */
        background-size: cover;
        font-family: sans-serif;
    }

    .form-wrap {
        width: 320px;
        background: rgba(62, 61, 61, 0.8); /* Background color with transparency */
        padding: 40px 20px;
        box-sizing: border-box;
        position: fixed;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    h1 {
        text-align: center;
        color: #fff;
        font-weight: normal;
        margin-bottom: 20px;
    }

    input {
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

<body>

    <div class="form-wrap">

        <form action="" method="POST">

            <h1>Login</h1>

            <input type="email" placeholder="Email" name="email">

            <input type="password" placeholder="Password" name="password">

            <input type="submit" placeholder="Submit" value="Login">

        </form>

    </div>

</body>

</html>

<?php
session_start();
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
if (isset($_POST) and !empty($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM `register` WHERE email='$email' and password='$password'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['email'] = $email;
        ?>
        <script>location.assign('Page-1.html')</script>
    <?php
    } else {
        echo "<h1 style='color: white; background-color: red';>Invalid password </h1>";
    }
}
if (isset($_SESSION['email']))
    echo "<h1 style='color: white; background-color: green';>Already logged in</h1>";
?>
