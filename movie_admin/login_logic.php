<?php
session_start();

include 'database/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $my_username = mysqli_real_escape_string($conn, $_POST['username']);
    $my_password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT `id` FROM `admin` WHERE `username` = '{$my_username}' AND `password` = '{$my_password}'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['login_user'] = $my_username;
        header("location: index.php");
    } else {
        header("location: login.php?error_message=true");
    }
}
?>