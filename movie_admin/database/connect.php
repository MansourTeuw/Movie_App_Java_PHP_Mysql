<?php
// Define the connection
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "api_movie";

// Call function to connect the databas
$conn = mysqli_connect($server_name, $user_name, $password, $database_name) or die(mysqli_error($conn));
?>