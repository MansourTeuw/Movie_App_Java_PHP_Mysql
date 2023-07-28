<?php
session_start();

include 'database/connect.php';

$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($conn, "SELECT username FROM `admin` WHERE username='$user_check'");


$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['username'];

if (!isset($login_session)) {
    header("Location: login.php");
}

