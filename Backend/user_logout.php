<?php
session_start();
if(isset($_SESSION['email']))
echo"<h1 style='color: white; background-color: green';>already loged</h1>";
session_destroy();
header('Location: index.html');
?>